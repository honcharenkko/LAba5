<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page','App\Http\Controllers\MyFirstController@index');

Route::get('/second_page', function () {
    return "This is second page";
});

Route::post('/submit-form', 'App\Http\Controllers\FormController@submit');
Route::get('/form', function () {
    return view('form');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/post','App\Http\Controllers\PostController@index');


Route::get('/user/{id}/{name}', function ($id, $name){
    return 'ID: '. $id.'.Name: '.$name;
});
