## Installation
1. Setup the project locally

2. Install composer dependencies
	```sh
	composer install
	```
3. Install npm dependencies
	```sh
	npm install
	```
4. Create .env file
	```sh
	cp .env.example .env
	```
5. Generate app key
	```sh
	php artisan key:generate
	```
6. Migration
	```sh
	php artisan migrate
	```
7. Run the database seeder
	```sh
	php artisan db:seed
	```
8. Work!
	```sh
	npm run dev
	```

