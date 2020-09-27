
    php artisan migrate
<!-- TABLE OF CONTENTS -->
## Table of Contents

* [About the Project](#about-the-project)
  * [Built With](#built-with)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Usage](#usage)
* [Contact](#contact)
* [Acknowledgements](#acknowledgements)



<!-- ABOUT THE PROJECT -->
## About The Project

Make use of controller/service/repository pattern 
* app/Repository/Eloquent/BaseRepository.php
* app/Repository/EloquentRepositoryInterface.php
* app/Http/Controllers/ReportController.php
* app/Repository/Eloquent/ReportRepository.php
* app/Repository/ReportRepositoryInterface.php
* app/Providers/RepositoryServiceProvider.php
* app/Models/Report.php


Proper routes for ajax calls /page url:
* routes/web.php
* app/Http/Middleware/AllowOnlyAjaxRequests.php
* app/Http/Kernel.php

Implement the styling/colors/fonts as you can see them in the screenshots 
* resources/views/dashboard/index.blade.php
* resources/views/layouts/app.blade.php
* public/js/templates.js
* public/js/ajax.js
* public/js/events.js

### Built With
* [W3.CSS](https://www.w3schools.com/w3css)
* [jQuery](https://jquery.com)
* [Laravel](https://laravel.com)


<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

For the Laravel backend to run, you will need a server (Apache or Nginx) and PHP. You can have these installed directly on your machine, or use a virtual environment. [Laravel](https://laravel.com)

### Installation

1. From the directory where you want to install the app, clone the repo
```sh
git clone https://github.com/ismailshuaau/storyclash.git
```
2. Enter the project folder and rename env.example to .env
```sh
cp env-example .env
```
3. Install Laravel with
```sh
composer install
```
4. The next thing you should do after installing Laravel is set your application key 
```sh
php artisan key:generate to generate secure key in .env file
```
5. Set environment variables in the env to connect MySQL Server
```sh
    DB_CONNECTION = ?
    DB_DATABASE = ?
    DB_USERNAME = ?
    DB_PASSWORD= ?
```

6. Create database

Try to start the MySQL server:
```sh
    mysql.server start 
```


7. Logging into MySQL
```sh
    mysql -u root -p
```

8. Now you can create the database:
```sh
    mysql>  CREATE DATABASE storyclash;
```


9. This will create the database tables for the application
```sh
    php artisan migrate
```

<!-- CONTACT -->
## Contact

Ismail Shuaau - [@ismail_shuaau](https://twitter.com/ismail_shuaau) - ismailshuaau@gmail.com

Project Link: [Storyclash](https://github.com/ismailshuaau/storyclash)



<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements
* [Font Awesome](https://fontawesome.com)
