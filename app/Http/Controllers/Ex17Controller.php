<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ex17Controller extends Controller
{
    public function __construct(){
        //
    }

    public function uploadForm(){
        return view('upload');
    }

    public function uploadFile(Request $request){
        $request->file->store('public');
        return "File has been uploaded!\n";
    }

    public function __destruct(){
        //
    }
}
