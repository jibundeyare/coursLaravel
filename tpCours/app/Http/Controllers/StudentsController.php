<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function ajout()
    {
        return view('hello');
    }

    public function voir()
    {
        $students = App\Student::all();


        return view('students', [
            'students' => $students
        ]);
    }
/*
    public function traitement()
    {
        $student = new App\Student;
        $student = App\Student::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
        ]);
    
        return 'prénom ' . request('firstname') . ' nom ' . request('lastname') . '.';
    }
*/
}
