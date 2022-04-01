COPY_FILES = cp .env.example .env

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

init:
	docker-compose build
	composer install
	npm install
	$(COPY_FILES)
	php artisan key:generate

