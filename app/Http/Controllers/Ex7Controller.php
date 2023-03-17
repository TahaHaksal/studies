<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex7Controller extends Controller
{
    public function __construct(){
        //
    }

    public function index(){
        return view('login');
    }

    public function submit(Request $request){
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return view('submit', [
            'email' => $email,
            'password' => $password,
        ]);
    }
    public function __destruct(){
        //
    }
}
