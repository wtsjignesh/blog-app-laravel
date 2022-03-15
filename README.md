# Simple Blog App - Laravel

## Demo User

user: mesvaniya.jignesh2141@gmail.com
|| password: password


## Installation Steps

```
git clone https://github.com/wtsjignesh/blog-app-laravel.git
cd blog-app-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

For sample data, you can run below seeder

```
php artisan db:seed --class=SampleDataSeeder
```
