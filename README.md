<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Steps

1. Install Laravel 8 using command "Laravel new FreshLogin"
2. Database configuration
3. Create Model and migration using command "php artisan make:model UserData -m"
4. Create all fields of table in file Project_name\database\migrations\recetly_created table
5. migrate all table fields using command "php artisan migrate"
6. Created 3 pages Home, Login and Register page
7. Create routes for the Login and Register page
8. Create controller using command "php artisan make:controller AllController"
9. Do validation for both forms
10. Write code for registration and also store the username in session and redirect to home page
11. Now code for login, here we check username and password is matching to any field of table in Database. If yes, then store username in session nad redirect to home page.
12. For home page, there is a if condition that if model UserData has session, display username and a logout button. In case of session null, display Login and Register button.
13. Now for Logout, if the user do logout, then a route is deplared where it says, If anybody click on logout it will pull/flush the session and redirect to home page.
14. In case if it has session and anybody still tried to go to login/register page, then i have created a route loginView and registerView, which will protect from going to that page.
