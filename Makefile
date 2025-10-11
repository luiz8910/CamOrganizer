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

# Limpa caches do Laravel
cache-clear:
	docker exec -it $(CONTAINER_NAME) php artisan cache:clear
	docker exec -it $(CONTAINER_NAME) php artisan config:clear
	docker exec -it $(CONTAINER_NAME) php artisan route:clear
	docker exec -it $(CONTAINER_NAME) php artisan view:clear

# Otimiza o Laravel
optimize:
	docker exec -it $(CONTAINER_NAME) php artisan optimize
	docker exec -it $(CONTAINER_NAME) php artisan config:cache
	docker exec -it $(CONTAINER_NAME) php artisan route:cache
	docker exec -it $(CONTAINER_NAME) php artisan view:cache

# Lista de rotas do Laravel
routes-list:
	docker exec -it $(CONTAINER_NAME) php artisan route:list
