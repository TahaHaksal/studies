<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct(){
        //
    }

    public function getStudents(){
        $request = Student::all();
        return $request;
    }

    public function getStudent ($id){
        $query = Student::where('id', $id)->get();
        return $query;
    }

    public function getStudentsinBetween($id1, $id2){
        $query = Student::whereBetween('id', [($id1 > $id2) ? $id2 : $id1, ($id1 < $id2) ? $id2 : $id1])->orderBy('id', 'DESC')->get();
        return $query;
    }

    public function __destruct(){
        //
    }
}
