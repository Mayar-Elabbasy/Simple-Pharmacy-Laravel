<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Simple Pharmacy System

**It is a project that simulates an online pharmacy system with different roles ( Admin, Pharmacy Owner, Doctor, Client ) using Laravel.**

### Prerequisites

You should have `composer` installed. If you don't, install composer from [here](https://getcomposer.org/download/)
and for better understanding concerning how to setup the environment kindly watch (https://www.youtube.com/watch?v=QEZwOCCXask)

### Installation

1. Download the zipped file and unzip it or Clone it.
2. cd into the project.  
3.  Run this command to update composer packages
    ```sh
    composer update
    ```
4. Create a copy of your .env file
    ```sh
    cp .env.example .env
    ```
5. Generate an app encryption key
    ```sh
    php artisan key:generate
    ```
6. Create an empty database for our project
    Example: open mysql then run
    ```sh
    create database simple_pharmacy;
    ```
    OR you can create an empty database with a different name and then you must change DB_DATABASE field in .env file.
	
7. In the .env file, add database information like (DB_USERNAME,DB_PASSWORD) to allow Laravel to connect to the database.
8. Migrate the database
    ```sh
    php artisan migrate
    ```
9. Seed the database
    ```sh
    php artisan db:seed --class=PermissionsDoctorSeeder
    ```
10. Create symbolic link for images
    ```sh
    php artisan storage:link
    ```
11. Open up the server
    ```sh
    php artisan serve
    ```
12. Open your browser on this url ``` http://localhost:8000```

13. In our Project we have a requirment to remove the registration so the only way to create a new admin, you have to use command line and to Run
    php artisan create:admin that has 2 mandatory parameters "email" "password" & 1 optional parameter "name"
    Ex with the optional parameter: 
    ```sh
    php artisan create:admin mayarelabbasy2016@gmail.com 123456 --name="Mayar Elabbasy"
    ```

    Ex without the optional parameter:
    ```sh
    php artisan create:admin mayarelabbasy2016@gmail.com 123456
    ```

14. To generate random medicines you can Run
    ```sh
    php artisan tinker
    ```
    Then Run
    ```sh
    factory(App\Medicine::class, 100)->create();
    ```
    You can change the number to generate as many as you need for random medicines.


## Contributors

* Mayar Yasser Elabbasy.
* Ahmed Mamdouh.
* Ahmed Tawfieck.
* Mohamed Ahmed Ramadan.


## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
