<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ex2Controller;
use App\Http\Controllers\Ex4Controller;

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

//Exercise 2
Route::prefix('/ex2')->group(function () {
    Route::get('/index', [Ex2Controller::class, 'index']);
    Route::get('/var-ex/{id}', [Ex2Controller::class, 'varEx'])->where('id', '[0-9]+');
    //Ex3
    Route::get('/multi-var', [Ex2Controller::class, 'multiVar']);
    //Ex3
});
//Exercise 2

//Exercise 4
Route::prefix('/ex4')->group(function () {
    Route::get('/get-posts', [Ex4Controller::class, 'getAllPosts']);
    Route::get('/get-post-by-id/{id}', [Ex4Controller::class, 'getPostById'])->where('id', '[0-9]+');
    Route::get('/insert-post', [Ex4Controller::class, 'insertPost']);
    Route::get('/update-post', [Ex4Controller::class, 'updatePost']);
    Route::get('/delete-post/{id}', [Ex4Controller::class, 'deletePost'])->where('id', '[0-9]+');
});
//Exercise 4
