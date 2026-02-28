<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetCodeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /**
     * Exibe o formulário de "Esqueci minha senha".
     */
    public function showForgotForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Envia o código de verificação por e-mail.
     */
    public function sendResetCode(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return back()->withErrors([
                'email' => __('Não encontramos um usuário com esse endereço de e-mail.'),
            ])->onlyInput('email');
        }

        // Gerar código de 6 dígitos
        $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        // Salvar código no banco
        DB::table('password_reset_codes')->updateOrInsert(
            ['email' => $request->email],
            [
                'code'       => Hash::make($code),
                'created_at' => now(),
            ]
        );

        // Enviar e-mail com o código
        Mail::to($request->email)->send(new PasswordResetCodeMail($code));

        return redirect()
            ->route('password.verify-code')
            ->with('email', $request->email)
            ->with('status', __('Enviamos um código de verificação para seu e-mail.'));
    }

    /**
     * Exibe o formulário para digitar o código de verificação.
     */
    public function showVerifyCodeForm(Request $request)
    {
        $email = $request->session()->get('email', old('email'));

        return view('auth.verify-code', compact('email'));
    }

    /**
     * Valida o código e redireciona para redefinir senha.
     */
    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'code'  => ['required', 'string', 'size:6'],
        ]);

        $record = DB::table('password_reset_codes')
            ->where('email', $request->email)
            ->first();

        if (! $record) {
            return back()->withErrors([
                'code' => __('Código inválido ou expirado.'),
            ])->withInput();
        }

        // Verificar expiração (60 minutos)
        if (now()->diffInMinutes($record->created_at) > 60) {
            DB::table('password_reset_codes')->where('email', $request->email)->delete();

            return back()->withErrors([
                'code' => __('Código expirado. Solicite um novo código.'),
            ])->withInput();
        }

        // Verificar o código
        if (! Hash::check($request->code, $record->code)) {
            return back()->withErrors([
                'code' => __('Código inválido ou expirado.'),
            ])->withInput();
        }

        // Gerar token temporário para a próxima etapa
        $token = bin2hex(random_bytes(32));
        DB::table('password_reset_codes')
            ->where('email', $request->email)
            ->update(['token' => $token]);

        return redirect()
            ->route('password.reset-form')
            ->with('email', $request->email)
            ->with('token', $token);
    }

    /**
     * Exibe o formulário de redefinição de senha.
     */
    public function showResetForm(Request $request)
    {
        $email = $request->session()->get('email', old('email'));
        $token = $request->session()->get('token', old('token'));

        if (! $email || ! $token) {
            return redirect()->route('password.forgot');
        }

        return view('auth.reset-password', compact('email', 'token'));
    }

    /**
     * Redefine a senha do usuário.
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email'                 => ['required', 'email'],
            'token'                 => ['required', 'string'],
            'password'              => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $record = DB::table('password_reset_codes')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (! $record) {
            return redirect()->route('password.forgot')->withErrors([
                'email' => __('Sessão expirada. Solicite um novo código.'),
            ]);
        }

        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return redirect()->route('password.forgot')->withErrors([
                'email' => __('Usuário não encontrado.'),
            ]);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        // Limpar código usado
        DB::table('password_reset_codes')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('status', __('Senha redefinida com sucesso!'));
    }
}
