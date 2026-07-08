<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="pt-BR">
<head>
    <title>Login - Xamps App</title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.bundle.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Estilos auto-contidos para não depender de classes Tailwind que podem ter sido purgadas. */
        .auth-body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .auth-wrap { width: 100%; max-width: 400px; }
        .auth-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
            padding: 32px 28px;
        }
        .auth-logo { display: block; height: 40px; margin: 0 auto 16px; }
        .auth-title { margin: 0; font-size: 20px; font-weight: 700; color: #111827; text-align: center; }
        .auth-sub { margin: 6px 0 0; font-size: 14px; color: #6b7280; text-align: center; }
        .auth-alert { padding: 10px 12px; border-radius: 8px; font-size: 13px; margin-top: 16px; }
        .auth-alert-ok { background: #ecfdf5; border: 1px solid #a7f3d0; color: #047857; }
        .auth-alert-err { background: #fef2f2; border: 1px solid #fecaca; color: #b91c1c; }
        .auth-alert-err p { margin: 0; }
        .auth-field { margin-top: 20px; }
        .auth-label-row { display: flex; align-items: center; justify-content: space-between; }
        .auth-label { display: block; font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 8px; }
        .auth-input {
            width: 100%;
            box-sizing: border-box;
            padding: 11px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            color: #111827;
            outline: none;
            transition: border-color .15s, box-shadow .15s;
        }
        .auth-input::placeholder { color: #9ca3af; }
        .auth-input:focus { border-color: #6366f1; box-shadow: 0 0 0 3px rgba(99, 102, 241, .25); }
        .auth-input.is-error { border-color: #ef4444; }
        .auth-remember { display: flex; align-items: center; margin-top: 16px; font-size: 13px; color: #4b5563; }
        .auth-remember input { width: 16px; height: 16px; margin-right: 8px; }
        .auth-btn {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            border: 0;
            border-radius: 8px;
            background: #4f46e5;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background .15s;
        }
        .auth-btn:hover { background: #4338ca; }
        .auth-forgot { font-size: 13px; font-weight: 500; color: #4f46e5; text-decoration: none; }
        .auth-forgot:hover { color: #3730a3; }
        .auth-foot { text-align: center; margin-top: 20px; font-size: 12px; color: rgba(255, 255, 255, .7); }
    </style>
</head>
<body class="auth-body">
    <div class="auth-wrap">
        <div class="auth-card">
            <img class="auth-logo" src="{{ asset('assets/media/app/mini-logo-gray.svg') }}" alt="Logo"/>
            <h1 class="auth-title">Bem-vindo de volta</h1>
            <p class="auth-sub">Faça login para acessar o sistema</p>

            @if (session('status'))
                <div class="auth-alert auth-alert-ok">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="auth-alert auth-alert-err">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="auth-field">
                    <label class="auth-label" for="email">E-mail</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="seu@email.com"
                        class="auth-input @error('email') is-error @enderror"
                    />
                </div>

                <div class="auth-field">
                    <div class="auth-label-row">
                        <label class="auth-label" for="password">Senha</label>
                        <a href="{{ route('password.forgot') }}" class="auth-forgot">Esqueceu a senha?</a>
                    </div>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                        placeholder="••••••••"
                        class="auth-input"
                    />
                </div>

                <label class="auth-remember">
                    <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                    Lembrar-me
                </label>

                <button type="submit" class="auth-btn">Entrar</button>
            </form>
        </div>

        <p class="auth-foot">&copy; {{ date('Y') }} Xamps App. Todos os direitos reservados.</p>
    </div>
</body>
</html>
