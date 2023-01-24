<?php

use Illuminate\Support\Facades\Route;

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

