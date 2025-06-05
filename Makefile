# Caminho da imagem PHP
PHP_IMAGE=image/php/xamps
CONTAINER_NAME=php_xamps

# Instala as dependências PHP com o Composer dentro do container (sem subir o app ainda)
composer-install:
	docker run --rm -v $$(pwd):/var/www -w /var/www $(PHP_IMAGE) composer install

composer-update:
	docker run --rm -v $$(pwd):/var/www -w /var/www $(PHP_IMAGE) composer update

# Build da imagem PHP
build:
	docker compose build

# Sobe os containers
up:
	docker compose up -d

# Derruba os containers
down:
	docker compose down

# Entra no container PHP
bash:
	docker exec -it $(CONTAINER_NAME) bash

# Roda os testes (ajuste conforme sua estrutura de testes)
test:
	docker exec -it $(CONTAINER_NAME) php artisan test
