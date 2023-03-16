<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Ex5Controller extends Controller
{
    public function index(){
        $string = Str::of('This is Exercise 5')->after('is');
        echo $string . '<br>';

        $string = Str::of('/home/simarminan/Desktop/laravel-studies/studies/app/Http/Controllers/Ex5Controller.php')->afterLast('/');
        echo $string . '<br>';

        $string = Str::of('Unappended string')->append('. Successfully appended the string!');
        echo $string . '<br>';

        $string = Str::of('THIS IS ME YELLING. CAN YOU HEAR ME?')->lower();
        echo $string . '<br>';

        $string = Str::of("An apple fell on Newton's head")->replace('apple', 'pear');
        echo $string . '<br>';

        $string = Str::of('this is a title')->title();
        echo $string . '<br>';

    }
}
