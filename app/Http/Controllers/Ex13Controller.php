<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ex13Controller extends Controller
{
    public function __construct(){
        //
    }

    public function index(){
        //
    }

    public function innerJoinClause(){
        $request = DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->select('users.name', 'posts.title', 'posts.body')
            ->get();
        return $request;
    }

    public function leftJoin(){
        $request = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $request;
    }

    public function rightJoin(){
        $request = DB::table('users')
            ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $request;
    }

    public function __destruct(){
        //
    }
}
