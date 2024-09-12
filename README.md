<<<<<<< HEAD
# [How to install this software / How to set up this project]

## Installation
## Step 1
![version](https://img.shields.io/badge/version-1.0.0-blue.svg)
1. In your terminal run composer install or comsposer update

2. Copy `.env.example` to `.env` and updated the configurations (mainly the database configuration)

3. In your terminal run `php artisan key:generate`

4. Run `php artisan migrate --seed` to create the database tables and seed the roles and users tables

5. Run `php artisan storage:link` to create the storage symlink (if you are using Vagrant with Homestead for development, remember to ssh into your virtual machine and run the command from there).

6. sample username & passwrod (`demo@gmail.com` and password `password`)

=======
# How to installation of this application
>>>>>>> 43a0f3a871d58c7c693afe8d19cc93d3dd9d9b04
