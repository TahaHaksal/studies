<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex10Controller extends Controller
{
    public function __construct(){
        //
    }

    public function getSession(Request $request){
        if ($request->session()->has('name')){
            echo $request->session()->get('name');
        } else {
            echo 'No data in the session.';
        }
    }

    public function storeSessionData(Request $request){
        $request->session()->put('name', 'John');
        echo 'Data has been added to the session';
    }

    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo 'Data has been deleted from the session';
    }

    public function __destruct(){
        //
    }
}
