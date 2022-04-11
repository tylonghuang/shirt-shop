# Laravel Shirt-Shop

## Preview
![](/preview/home.png "Home Page")

## Tools and technologies
- Frontend: [Bootstrap](https://getbootstrap.com/)
- Backend: [Laravel](https://laravel.com/)
- Payments: [Stripe API](https://stripe.com/en-de)

## Stripe API
If you want to test the site with real payments:
1. Create a new Account on [Stripe](https://stripe.com/en-de) and generate a keypair
2. Change PUBLIC KEY in `public/src/js/checkout.js`
3. Change PRIVATE KEY in `Stripe::setApiKey('')`
4. Check out the official [Testdata](https://stripe.com/docs/testing) provided by Stripe

## Setup
1. Execute `composer install` in the project directory
2. Change the name of `.env.example` to `.env` 
3. Open the File and assign `shop` to the Variable `DB_DATABASE`
4. Execute `php artisan key:generate` in the project directory
5. Open: `localhost/phpmyadmin` and create a DB: `shop`
6. Execute `php artisan migrate` to create all pre-defined tables
7. Execute `php artisan db:seed` to fill the tables with pre-defined data
8. Execute `npm install` and `npm run dev` or `npm run watch`
9. Have fun on: `localhost/<project_dir>/shirt-shop/public`

## Important commands
- `php artisan make:model <name> -m` - Create a DB-model + migration-file
- `php artisan make:migration <name>` - Create a migration-file by itself
- `php artisan make:seed <name>` - Create a template for a seeder
- `php artisan make:controller <name>` - Create a controller for HTTP related affairs
- `php artisan make:middleware <name>` - Create a new middleware
- `php artisan migrate` - Create defined tables in the DB
- `php artisan db:seed` - Fills tables up with data
- `php artisan migrate:refresh --seed ` - Delete existing tables, create new ones and seed them


