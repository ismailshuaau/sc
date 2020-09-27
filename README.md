# Server Requirements
The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

    PHP >= 7.3
    BCMath PHP Extension
    Ctype PHP Extension
    Fileinfo PHP extension
    JSON PHP Extension
    Mbstring PHP Extension
    OpenSSL PHP Extension
    PDO PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension

# Getting Started
From the directory where you want to install the app, clone the project repo:

    git clone https://github.com/ismailshuaau/storyclash.git

Enter the project folder and rename env.example to .env
    cp env-example .env

Install Laravel with
    composer install

type php artisan key:generateto generate secure key in .env file



#Set up the database

    set DB_CONNECTION
    set DB_DATABASE
    set DB_USERNAME
    set DB_PASSWORD


Try to start the MySQL server:

    mysql.server start 

Logging into MySQL

    mysql -u root -p

Now you can create the database:

    mysql>  CREATE DATABASE storyclash;


Then you can run. This will create the database tables for the application

    php artisan migrate:fresh

