# Eshop — Laravel E-Commerce Store

A bilingual (**Arabic / English**) e-commerce storefront built with **Laravel 11**, with an admin dashboard.

## Features

- Storefront home page with **Trending**, **Hot Items**, **On Sale** and **Blog** sections
- Admin dashboard
- User authentication
- Arabic / English localization (`mcamara/laravel-localization`)

## Tech Stack

PHP · Laravel 11 · Blade · Tailwind CSS · Laravel Localization

## Getting Started

```bash
git clone https://github.com/mhmdatya72/Eshop-ecommerce.git
cd Eshop-ecommerce
composer install && npm install
cp .env.example .env
php artisan key:generate
# set your DB_* values in .env
php artisan migrate
npm run build
php artisan serve
```

## Author

**Mohamed Atya Hawash** — Senior Full-Stack Laravel Developer
[Portfolio](https://mohamedatya-dev.vercel.app) · [LinkedIn](https://www.linkedin.com/in/mohamedatya-dev/)
