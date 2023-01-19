# Laravel-cms is a simple project for my portfolio

## How to set this project locally

```
composer install
php artisan key:generate
npm install
npm run build
```
Copy ```.env.example```, rename to ```.env``` and assign values for variables:
- ```DEFAULT_SUPERADMIN_PASSWORD```
- ```DEFAULT_SUPERADMIN_MAIL```
- ```MAIL_USERNAME```
- ```MAIL_PASSWORD```

:information_source: ```.env.example``` file by default sets [Mailtrap](https://mailtrap.io) as an email delivery platform. 

Create local database (change access to it in ```.env``` if needed).

```
php artisan migrate:fresh --seed
```
