<?php

namespace App\Http\Controllers;

use App\Student;

class StudentsController extends Controller
{
    public function ajout()
    {
        return view('hello');
    }

    public function afficher()
    {
        $students = Student::all();


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
