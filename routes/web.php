<?php

use Illuminate\Http\Request;
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

//Exercise 1
Route::prefix('/ex1')->group(function () {
    Route::get('/', function () {
        echo('Hello world');
    });

    Route::get('/required/{name}', function ($name) {
        echo ('Hi ' . $name . '!');
    });

    Route::get('/optional/{name?}', function ($name = null) {
        if ($name)
            echo 'Hello ' . $name . '!';
        else
            echo 'Who are you?';
    });

    Route::get('/alphanumeric/{tag?}', function ($tag = null) {
        if ($tag)
            echo $tag . ' is alphanumeric!';
        else
            echo 'Please enter a tag';
    })->where('tag', '[a-zA-Z0-9]+');

    Route::match(['get', 'post'], '/match', function( Request $req) {
        return 'Requested method is ' . $req->method();
    });

    Route::any('/any-method', function (Request $req) {
        return 'Requested method is ' . $req->method();
    });
});
//Exercise 1
