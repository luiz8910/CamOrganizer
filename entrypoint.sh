#!/bin/bash

echo "Instalando dependências via Composer..."
composer install

# Executa o comando padrão do container (php artisan serve)
exec "$@"
