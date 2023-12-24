# 2DO - A todo app created by Laravel
Advanced Web Development - Final Project

## Overview
This is a simple Todo web application created by Nguyen The Dan in the final project of the Advanced Web Development Course

## Technology
This project requires [PHP 8.2](https://windows.php.net/download#php-8.2) or later to run.
Packages used in this project:
- [Laravel Breeze & Blade](https://laravel.com/docs/10.x/starter-kits#breeze-and-blade) for the front end and basic authorization
- [Tailwindcss](https://tailwindcss.com/) for styling
- [Laravel Sanctum](https://laravel.com/docs/10.x/sanctum) for the API
- [Laravel Telescope](https://laravel.com/docs/10.x/telescope) for monitoring the project

## Installation

Install the PHP and Node.js dependencies.

```sh
composer install
npm install
```

Create your .env file and generate the application key:

```sh
cp .env.example .env
php artisan key:generate
```

After that, we open XAMPP's MySQl and run some commands to migrate the database.

```sh
php artisan migrate:fresh
```

To add some dummy data, we use the Laravel's Seeder command.

```sh
php artisan db:seed --class=DatabaseSeeder
```

At the root of the project folder, we will run our website:

```sh
php artisan serve
```

and on the new shell, we also run:
```sh
npm run dev
```
## Features
And the web is available on `127.0.0.1:8000`, which is similar to this demo video below:

https://github.com/MikeJoester/laravel-todo-app/assets/74175443/26430757-fa25-4d4b-b92e-8ce5ce8e05bb


### Database Structure
The main database consists of three main table: User, Todos and Categories
![image](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/e623fb33-346a-402a-bc23-4ef0efdb26ac)



### Create documentation with Scramble
Scramble generates API documentation for Laravel project. Without requiring you to manually write PHPDoc annotations. Docs are generated in OpenAPI 3.1.0 format.
![image](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/93205a53-e196-4021-9c18-7c34ca7b060b)

### Telescope
Laravel Telescope is a debugging and introspection tool for the Laravel PHP framework. It provides a powerful set of tools for monitoring and debugging your applications during development. Telescope allows developers to easily view information about the requests coming to their application, monitor database queries, cache usage, queued jobs, and more.
![image](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/32da95ae-0265-4317-8743-d43701a1c638)


### Pulse
Laravel Pulse delivers at-a-glance insights into your application's performance and usage. With Pulse, you can track down bottlenecks like slow jobs and endpoints, find your most active users, and more.
![image](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/47962ab6-a5d1-4302-baa0-55654ae3b84d)

### Main Functions:
The main functions are displayed in the demo video above. Here is some screenshots about all of the functions in the video:
#### Login and Register:
![Animation1](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/612e0270-25bd-4745-aea2-a541676f1726)

#### Add Tasks:
![CreateTodo](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/2dace0c2-51f0-4788-8ef0-b61fe39e464c)

#### View Tasks:
![ViewTodo](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/243c513f-4886-4eb7-8a52-9f87f38de84e)

#### Edit Tasks:
![EditTodo](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/9b2b124d-6e81-4037-bee0-970fad4fd658)

#### Delete Tasks:
![DeleteTodo](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/08d6d69f-2494-4542-a89e-7212ef1c6c9a)

#### Search Tasks:
![SearchTodo](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/c4afdd08-9c45-4134-bf9c-53b1d63823d1)

#### Add Category:
![CreateCat](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/38371b3a-64fb-45f3-9fa7-bf8587919a8b)

#### View Categories:
![image](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/443fdfa2-d984-4f5b-9cd7-35b89674b12a)

#### Delete Categories:
![DeleteCat](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/ee01e57a-54aa-4f32-a147-f135fe637050)

#### Sort by Categories:
![FilterCat](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/4d9ab400-fdba-45d6-8711-18e17b672c41)

