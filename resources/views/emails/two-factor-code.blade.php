<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de acesso</title>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 22px;
            font-weight: 700;
        }
        .body {
            padding: 30px;
        }
        .body p {
            color: #4b5563;
            font-size: 14px;
            line-height: 1.6;
            margin: 0 0 20px;
        }
        .code-box {
            background: #f3f4f6;
            border: 2px dashed #d1d5db;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 25px 0;
        }
        .code {
            font-size: 36px;
            font-weight: 700;
            letter-spacing: 8px;
            color: #1f2937;
            font-family: 'Courier New', monospace;
        }
        .footer {
            padding: 20px 30px;
            background: #f9fafb;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            color: #9ca3af;
            font-size: 12px;
            margin: 0;
        }
        .warning {
            color: #9ca3af;
            font-size: 12px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Xamps App</h1>
        </div>
        <div class="body">
            <p>Olá,</p>
            <p>Detectamos um novo acesso à sua conta. Use o código abaixo para concluir o login:</p>

            <div class="code-box">
                <div class="code">{{ $code }}</div>
            </div>

            <p>Este código é válido por <strong>15 minutos</strong>.</p>
            <p class="warning">Se você não tentou acessar sua conta, altere sua senha imediatamente.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Xamps App. Todos os direitos reservados.</p>
        </div>
    </div>
</body>
</html>
