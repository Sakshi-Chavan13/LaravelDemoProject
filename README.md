<h1>Restaurant reservation system using Laravel</h1>

<h3>1)created login register: using breeze</h3>
<br>
composer require laravel/breeze --dev
<br>
php artisan breeze:install
<br>
php artisan migrate
<br>
npm install
<br>
npm run dev
<br>
<br>


<h3>Admin :</h3>
<br>
is_admin(column) == 1 then login admin
<br>

1) seeded the admin data using the databaseseeders (seeders/admin.php)
 <br>
2)create a admin middleware - php artisan make:middleware Admin
<br>
3) for admin controller : run the following command:
<br>
php artisan make:controller Admin/AdminController
<br>
4)create route for admin using middleware and admin controller
<br>
5) creating side bar with alphine toolbox
<br>
 -go to alphinetoolbox.com
 <br>
-go to examples->nav->select the responsive navbaar->side bar(in readme)
<br>
