serve:
	php artisan serve

up:
	docker-compose -f docker-compose.yml up -d

bup:
	docker-compose -f docker-compose.yml up -d -- build

down:
	docker-compose -f docker-compose.yml down

build:
	docker-compose -f docker-compose.yml build

migrate:
	 docker-compose exec app php artisan migrate:fresh

init:
	docker-compose build
	composer install
	npm install
