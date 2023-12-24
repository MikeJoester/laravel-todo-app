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
https://github.com/MikeJoester/laravel-todo-app/assets/74175443/8d9a18ae-fe5a-4e70-a1b4-a151516a7d08

### Database Structure
The main database consists of two main table: User and Todos, linked together by user_id and id value
![image](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/99e13518-3a43-4bd6-b5bf-64f6b9cc2868)


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
![Animation2](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/fdca5fda-1eef-4335-bf45-70e94e1e80d0)

#### View Tasks:
![image](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/4f217f16-ebfc-41b1-9247-b3b11c1216c5)

#### Edit Tasks:
![Animation3](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/8453177a-5ec3-43cd-96f3-d65d70acd928)

#### Delete Tasks:
![AnimationDelete](https://github.com/MikeJoester/laravel-todo-app/assets/74175443/da28a888-14f3-484d-9a86-c3638c49c680)
