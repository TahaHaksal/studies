<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ex11Controller extends Controller
{
    public function __construct(){
        //
    }

    public function index(){
        //
    }

    public function storePost(){
        DB::table('posts')->insert([
            'title' => fake()->sentence(1),
            'body' => fake()->paragraph(4),
        ]);
        echo 'Value stored. Check db.';
    }

    public function getAllPosts(){
        $posts = DB::table('posts')->get();
        return view('posts', ['posts' => $posts]);
    }

    public function __destruct(){
        //
    }
}
