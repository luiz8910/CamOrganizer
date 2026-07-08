<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="pt-BR">
<head>
    <title>Verificação em duas etapas - Xamps App</title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.bundle.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Estilos auto-contidos para não depender de classes Tailwind que podem ter sido purgadas. */
        .tfa-body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .tfa-wrap { width: 100%; max-width: 380px; }
        .tfa-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .2);
            padding: 32px 28px;
        }
        .tfa-logo { display: block; height: 40px; margin: 0 auto 16px; }
        .tfa-title { margin: 0; font-size: 20px; font-weight: 700; color: #111827; text-align: center; }
        .tfa-sub { margin: 6px 0 0; font-size: 14px; color: #6b7280; text-align: center; }
        .tfa-alert { padding: 10px 12px; border-radius: 8px; font-size: 13px; margin-top: 16px; }
        .tfa-alert-ok { background: #ecfdf5; border: 1px solid #a7f3d0; color: #047857; }
        .tfa-alert-err { background: #fef2f2; border: 1px solid #fecaca; color: #b91c1c; }
        .tfa-alert-err p { margin: 0; }
        .tfa-label { display: block; font-size: 13px; font-weight: 600; color: #374151; margin: 24px 0 8px; }
        .tfa-code {
            width: 100%;
            box-sizing: border-box;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 24px;
            font-weight: 700;
            text-align: center;
            letter-spacing: 8px;
            color: #111827;
            outline: none;
            transition: border-color .15s, box-shadow .15s;
        }
        .tfa-code::placeholder { color: #d1d5db; letter-spacing: 8px; }
        .tfa-code:focus { border-color: #6366f1; box-shadow: 0 0 0 3px rgba(99, 102, 241, .25); }
        .tfa-btn {
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
        .tfa-btn:hover { background: #4338ca; }
        .tfa-links { text-align: center; margin-top: 20px; }
        .tfa-links p { margin: 0 0 4px; font-size: 13px; color: #6b7280; }
        .tfa-link-btn { background: none; border: 0; padding: 0; cursor: pointer; font-size: 13px; font-weight: 600; color: #4f46e5; }
        .tfa-link-btn:hover { color: #3730a3; }
        .tfa-back { display: inline-block; margin-top: 14px; font-size: 13px; color: #6b7280; text-decoration: none; }
        .tfa-back:hover { color: #374151; }
        .tfa-foot { text-align: center; margin-top: 20px; font-size: 12px; color: rgba(255, 255, 255, .7); }
    </style>
</head>
<body class="tfa-body">
    <div class="tfa-wrap">
        <div class="tfa-card">
            <img class="tfa-logo" src="{{ asset('assets/media/app/mini-logo-gray.svg') }}" alt="Logo"/>
            <h1 class="tfa-title">Verificação em duas etapas</h1>
            <p class="tfa-sub">
                Digite o código de 6 dígitos enviado para
                @if($email)
                    <strong>{{ $email }}</strong>
                @else
                    seu e-mail
                @endif
            </p>

            @if (session('status'))
                <div class="tfa-alert tfa-alert-ok">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="tfa-alert tfa-alert-err">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login.2fa.submit') }}">
                @csrf
                <label class="tfa-label" for="code">Código de verificação</label>
                <input
                    id="code"
                    name="code"
                    type="text"
                    maxlength="6"
                    required
                    autofocus
                    autocomplete="one-time-code"
                    inputmode="numeric"
                    pattern="[0-9]{6}"
                    placeholder="000000"
                    class="tfa-code"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                />
                <button type="submit" class="tfa-btn">Verificar e entrar</button>
            </form>

            <div class="tfa-links">
                <p>Não recebeu o código?</p>
                <form method="POST" action="{{ route('login.2fa.resend') }}" style="display:inline;">
                    @csrf
                    <button type="submit" class="tfa-link-btn">Reenviar código</button>
                </form>
                <div>
                    <a href="{{ route('login') }}" class="tfa-back">← Voltar ao login</a>
                </div>
            </div>
        </div>

        <p class="tfa-foot">&copy; {{ date('Y') }} Xamps App. Todos os direitos reservados.</p>
    </div>
</body>
</html>
