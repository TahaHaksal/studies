<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex2Controller extends Controller
{
    public function index () {
        return view('test');
    }

    public function varEx($id){
        return view('test2', [
            'id' => $id,
            'friends' => [
                1 => 'Brad',
                2 => 'James',
                3 => 'Robert'
            ],
        ]);
    }

    //Ex3
    public function multiVar(){
        return view('test3', [
            'user' => [
                'name' => 'John',
                'surname' => 'Miller',
                'title' => 'Doctor',
                'age' => 32,
            ],
            'amount' => 189,
            // 'name' => 'TestJohn', => Doesn't affect component's name var
        ]);
    }
    //Ex3
}
