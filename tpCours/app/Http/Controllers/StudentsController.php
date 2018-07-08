<?php

namespace App\Http\Controllers;

use App\Student;

class StudentsController extends Controller
{
    public function ajout()
    {
        return view('ajoutStudent');
    }

    public function afficher()
    {
        $students = Student::all();

        return view('students', [
            'students' => $students
        ]);
        return view('ajoutStudent');
    }

    public function traitementAjout()
    {
        $student = Student::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
        ]);
    
        return redirect('students');
    }
}
