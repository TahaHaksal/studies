<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Ex16Controller extends Controller
{
    public function __construct(){
        //
    }

    public function pagination(){
        $users = User::paginate(5);
        return view('users', compact('users'));
    }

    public function __destruct(){
    }
}
