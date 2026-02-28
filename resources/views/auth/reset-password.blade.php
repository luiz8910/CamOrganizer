<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="pt-BR">
<head>
    <title>Redefinir senha - Xamps App</title>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.bundle.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .auth-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="antialiased flex h-full text-base text-gray-700 auth-bg">
    <div class="flex items-center justify-center w-full min-h-screen p-5">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <!-- Header -->
                <div class="text-center mb-8">
                    <img class="mx-auto h-12 mb-4" src="{{ asset('assets/media/app/mini-logo-gray.svg') }}" alt="Logo"/>
                    <h1 class="text-2xl font-bold text-gray-900">Redefinir senha</h1>
                    <p class="text-gray-500 mt-1">Digite sua nova senha</p>
                </div>

                <!-- Errors -->
                @if ($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <!-- Form -->
                <form method="POST" action="{{ route('password.reset.submit') }}">
                    @csrf

                    <input type="hidden" name="email" value="{{ $email }}"/>
                    <input type="hidden" name="token" value="{{ $token }}"/>

                    <!-- New Password -->
                    <div class="mb-5">
                        <label class="block text-sm font-semibold text-gray-700 mb-2" for="password">
                            Nova senha
                        </label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            autofocus
                            autocomplete="new-password"
                            placeholder="Mínimo 8 caracteres"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                        />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2" for="password_confirmation">
                            Confirmar nova senha
                        </label>
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                            autocomplete="new-password"
                            placeholder="Repita a senha"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                        />
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Redefinir senha
                    </button>
                </form>

                <!-- Back to login -->
                <div class="text-center mt-6">
                    <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-gray-700 font-medium transition">
                        <i class="ki-filled ki-arrow-left text-xs mr-1"></i>
                        Voltar ao login
                    </a>
                </div>
            </div>

            <p class="text-center text-white/70 text-sm mt-6">
                &copy; {{ date('Y') }} Xamps App. Todos os direitos reservados.
            </p>
        </div>
    </div>
</body>
</html>
