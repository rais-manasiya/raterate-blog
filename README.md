# Raterate Blog

> ### Laravel + MySQL codebase containing third party API integration examples (Data Inserting, advanced patterns, migration, etc).

This codebase was created to demonstrate a fully functional third party API integration built with **Laravel 8 + MySQL + API**, including Insert operations, routing, migration and more.

Hope you'll find this example helpful. Pull requests are welcome!

----------

# Getting started

## Installation

Please check the official Laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)


Clone the repository

    git clone https://github.com/rais-manasiya/raterate-blog.git

Switch to the repo folder

    cd raterate-blog

Install all the dependencies using composer

    composer install

Copy the example env file (if does not exist) and make the required configuration changes in the .env file

    cp .env.example .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://127.0.0.1:8000

**TL;DR command list**

    git clone https://github.com/rais-manasiya/raterate-blog.git
    cd raterate-blog
    composer install
    cp .env.example .env
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

***Note*** : First time database table will be an empty, You will have to insert data using post method

## Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers` - Contains all the api controllers
- `app/Providers` - Contains all the service providers
- `config` - Contains all the application configuration files
- `database/migrations` - Contains all the database migrations
- `routes` - Contains all the api routes defined in web.php file

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing API

Run the Laravel development server

    php arisan serve

The api can now be accessed at

    http://127.0.0.1:8000
    
### API Routes
| HTTP Method	| URI | Action | Scope | Desciption  |
| ----- | ----- | ----- | ---- |------------- |
| GET      | /users | fetch | user_details.fethAllUsers | Get all Users
| GET      | /users/{id} | fetch | user_details.fethSignleUser |  Get user by user_id
| GET      | /posts | fetch | user_details.fethAllUsers | Get all Posts
| GET      | /posts/{user_id} | fetch | posts.fetchAllPosts |  Get post by user_id








