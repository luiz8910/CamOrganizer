<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\TwoFactorCodeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /** Nome do cookie que guarda o token secreto do dispositivo confiável. */
    private const TRUSTED_COOKIE = '2fa_trusted';

    /** Validade do dispositivo confiável, em minutos (24h = "pedir o código uma vez por dia por dispositivo/IP"). */
    private const TRUSTED_MINUTES = 1440;

    /** Validade do código de verificação, em minutos. */
    private const CODE_TTL_MINUTES = 15;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember');

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors([
                'email' => __('As credenciais informadas não correspondem aos nossos registros.'),
            ])->onlyInput('email');
        }

        // Mesmo dispositivo E mesmo IP já verificados nas últimas 24h → login direto.
        if ($this->deviceIsTrusted($request, $user)) {
            Auth::login($user, $remember);
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        // Caso contrário, inicia a verificação em duas etapas.
        $request->session()->put('2fa:user_id', $user->id);
        $request->session()->put('2fa:remember', $remember);

        $this->sendTwoFactorCode($user);

        return redirect()
            ->route('login.2fa')
            ->with('status', __('Enviamos um código de verificação para seu e-mail.'));
    }

    /**
     * Exibe o formulário para digitar o código de verificação (2FA).
     */
    public function showTwoFactorForm(Request $request)
    {
        $user = $this->pendingUser($request);

        if (! $user) {
            return redirect()->route('login');
        }

        return view('auth.two-factor', ['email' => $user->email]);
    }

    /**
     * Valida o código de verificação e efetua o login.
     */
    public function verifyTwoFactor(Request $request)
    {
        $user = $this->pendingUser($request);

        if (! $user) {
            return redirect()->route('login');
        }

        $request->validate([
            'code' => ['required', 'string', 'size:6'],
        ]);

        $record = DB::table('two_factor_codes')->where('email', $user->email)->first();

        if (! $record) {
            return back()->withErrors(['code' => __('Código inválido ou expirado.')]);
        }

        if (now()->diffInMinutes($record->created_at) > self::CODE_TTL_MINUTES) {
            DB::table('two_factor_codes')->where('email', $user->email)->delete();

            return back()->withErrors(['code' => __('Código expirado. Solicite um novo código.')]);
        }

        if (! Hash::check($request->code, $record->code)) {
            return back()->withErrors(['code' => __('Código inválido ou expirado.')]);
        }

        // Sucesso: limpa o código e efetua o login.
        DB::table('two_factor_codes')->where('email', $user->email)->delete();

        $remember = (bool) $request->session()->pull('2fa:remember', false);
        $request->session()->forget('2fa:user_id');

        Auth::login($user, $remember);
        $request->session()->regenerate();

        // Marca este dispositivo/IP como confiável por 24h (não pedir o código de novo hoje).
        $cookie = $this->trustDevice($request, $user);

        return redirect()->intended(route('home'))->withCookie($cookie);
    }

    /**
     * Reenvia o código de verificação.
     */
    public function resendTwoFactor(Request $request)
    {
        $user = $this->pendingUser($request);

        if (! $user) {
            return redirect()->route('login');
        }

        $this->sendTwoFactorCode($user);

        return back()->with('status', __('Um novo código foi enviado para seu e-mail.'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    /**
     * Usuário aguardando verificação (definido na sessão durante o login).
     */
    private function pendingUser(Request $request): ?User
    {
        $userId = $request->session()->get('2fa:user_id');

        return $userId ? User::find($userId) : null;
    }

    /**
     * Gera, salva (hasheado) e envia por e-mail um novo código de 6 dígitos.
     */
    private function sendTwoFactorCode(User $user): void
    {
        $code = str_pad((string) random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        DB::table('two_factor_codes')->updateOrInsert(
            ['email' => $user->email],
            [
                'code'       => Hash::make($code),
                'created_at' => now(),
            ]
        );

        Mail::to($user->email)->send(new TwoFactorCodeMail($code));
    }

    /**
     * Verifica se o dispositivo atual já passou pela verificação nas últimas 24h.
     *
     * A confiança é vinculada ao dispositivo (token secreto guardado no cookie)
     * E ao IP a partir do qual a verificação foi concluída. Um novo dispositivo
     * ou um IP diferente sempre exige um novo código — não basta o usuário ter
     * logado no sistema nas últimas 24h.
     */
    private function deviceIsTrusted(Request $request, User $user): bool
    {
        $token = $request->cookie(self::TRUSTED_COOKIE);

        if (! $token) {
            return false;
        }

        $device = DB::table('trusted_devices')
            ->where('user_id', $user->id)
            ->where('token', hash('sha256', $token))
            ->where('expires_at', '>', now())
            ->first();

        return $device !== null && hash_equals($device->ip_address, (string) $request->ip());
    }

    /**
     * Registra o dispositivo/IP atual como confiável por 24h e devolve o cookie
     * com o token secreto correspondente.
     */
    private function trustDevice(Request $request, User $user)
    {
        $token = Str::random(60);

        // Limpa registros expirados deste usuário para não acumular lixo.
        DB::table('trusted_devices')
            ->where('user_id', $user->id)
            ->where('expires_at', '<=', now())
            ->delete();

        DB::table('trusted_devices')->insert([
            'user_id'    => $user->id,
            'token'      => hash('sha256', $token),
            'ip_address' => (string) $request->ip(),
            'expires_at' => now()->addMinutes(self::TRUSTED_MINUTES),
            'created_at' => now(),
        ]);

        return Cookie::make(self::TRUSTED_COOKIE, $token, self::TRUSTED_MINUTES);
    }
}
