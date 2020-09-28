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

#### Make use of controller/service/repository pattern 
* app/Repository/Eloquent/BaseRepository.php
* app/Repository/EloquentRepositoryInterface.php
* app/Http/Controllers/ReportController.php
* app/Repository/Eloquent/ReportRepository.php
* app/Repository/ReportRepositoryInterface.php
* app/Providers/RepositoryServiceProvider.php
* app/Models/Report.php

#### Proper routes for ajax calls /page url
* routes/web.php
* app/Http/Middleware/AllowOnlyAjaxRequests.php
* app/Http/Kernel.php
* public/js/ajax.js

#### Implement the styling/colors/fonts as you can see them in the screenshots 
* resources/views/dashboard/index.blade.php
* resources/views/layouts/app.blade.php
* public/js/templates.js
* public/js/events.js
* public/css/app.css

### Built With
* [W3.CSS](https://www.w3schools.com/w3css)
* [jQuery](https://jquery.com)
* [Laravel](https://laravel.com)



<!-- GETTING STARTED -->
## Getting Started
### Prerequisites

For the Laravel backend to run, you will need a server (Apache or Nginx) and PHP. You can have these installed directly on your machine, or use a virtual environment. See instructions on the [Laravel](https://laravel.com)

### Installation

From the directory where you want to install the app, clone the repo
```sh
git clone https://github.com/ismailshuaau/storyclash.git
```
Enter the project folder and rename env.example to .env
```sh
cp .env.example .env
```
You must now install all of the project dependencies
```sh
composer install
```
The next thing you should do after installing Laravel is set your application key 
```sh
php artisan key:generate
```

Create an empty database for your project using the database tools you prefer. 
In our example we'll use a database called storyclash. 
Just create an empty database here, the exact steps will depend on your system setup.
``` sh
mysql -u root -p
mysql>  CREATE DATABASE storyclash;
```
In the .env file fill in the `DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME,` and `DB_PASSWORD` options to match the credentials of the database you just created
```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=storyclash
    DB_USERNAME=root
    DB_PASSWORD=

```
This will create the database tables for the application
```sh
php artisan migrate
```



<!-- USAGE EXAMPLES -->
## Usage
Run from the project route
```sh
php artisan serve
```
Then go to the URL
```sh
    http://127.0.0.1:8000/reports
```


<!-- CONTACT -->
## Contact
Ismail Shuaau - [@ismail_shuaau](https://twitter.com/ismail_shuaau) - ismailshuaau@gmail.com

Project Link: [Storyclash](https://github.com/ismailshuaau/storyclash)



<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements
* [Font Awesome](https://fontawesome.com)
