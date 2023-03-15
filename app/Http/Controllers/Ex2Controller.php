<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex2Controller extends Controller
{
    public function index () {
        return view('test');
    }

    public function varEx($id){
        return view('test2', ['id' => $id]);
    }
}
