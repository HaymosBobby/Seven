## Sevenz HealthCare API

Backend REST API on PHP (8.2) + Laravel(11) + SQLite.

## Quick Start to run locally
- Clone repository
- Run composer install
- copy .env.example file to .env 
- Open .env and setup database connection
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed` to create the test user
- Finally, run `php artisan serve`

## Test User
- email - `test@example.com`
- password - `password`
- authToken - `2|E46Vil9GPkF1YYEvJRTphEWCpVDqgREGP80FAXt6b1f59a3b`

## Api Routes
- /api/login POST 
- /api/lab-tests GET
- /api/medical-lab-tests POST
