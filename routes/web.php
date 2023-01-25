<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Variable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/amongus', function () {
    return view('amongus');
});

Route::get('/test', function () {
    return 'amongus ඞ';
});

Route::get('/testarr', function () {
    return ['cero'=>'$amongus ඞ',
    'uno'=>'$amongus ඞ',
    'dos'=>'$amongus ඞ',
    'tres'=>'$amongus ඞ',
    'cuatro'=>'$amongus ඞ',
    'cinco'=>'$amongus ඞ',
    'seis'=>'$amongus ඞ',
    'siete'=>'$amongus ඞ',
    'ocho'=>'$amongus ඞ',
    'nueve'=>'$amongus ඞ',];
});


Route::resource('/expense_amongus', 'App\Http\Controllers\expense_amongus_reports_controller');

Route::get('/all', function () {
    // $var []= null;
    // $var []=   ['mysql' => [
    //     'driver' => 'mysql',
    //     'url' => env('DATABASE_URL'),
    //     'host' => env('DB_HOST', '127.0.0.1'),
    //     'port' => env('DB_PORT', '3306'),
    //     'database' => env('DB_DATABASE', 'forge'),
    //     'username' => env('DB_USERNAME', 'forge'),
    //     'password' => env('DB_PASSWORD', ''),
    //     'unix_socket' => env('DB_SOCKET', ''),
    //     'charset' => 'utf8mb4',
    //     'collation' => 'utf8mb4_unicode_ci',
    //     'prefix' => '',
    //     'prefix_indexes' => true,
    //     'strict' => true,
    //     'engine' => null, 
    // ]];
    // $var[]= $_ENV;
    // $var[]= env("APP_NAME");
    // $var[]= env("SESSION_DRIVER");
    
    // $var[]= env("*");

    $var[]=env("LARAVEL_PORT_NUMBER");
    $var[]=env("LARAVEL_SKIP_COMPOSER_UPDATE");
    $var[]=env("LARAVEL_SKIP_DATABASE");
    $var[]=env("LARAVEL_DATABASE_TYPE");
    $var[]=env("LARAVEL_DATABASE_HOST");
    $var[]=env("LARAVEL_DATABASE_PORT_NUMBER");
    $var[]=env("LARAVEL_DATABASE_NAME");
    $var[]=env("LARAVEL_DATABASE_USER");
    $var[]=env("LARAVEL_DATABASE_PASSWORD");
    $var[]=env("SKIP_COMPOSER_UPDATE");
    $var[]=env("DB_CONNECTION");
    $var[]=env("DB_HOST");
    $var[]=env("DB_PORT");
    $var[]=env("DB_DATABASE");
    $var[]=env("DB_USERNAME");
    $var[]=env("DB_PASSWORD");
    


    return $var;
});