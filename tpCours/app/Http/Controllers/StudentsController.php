<?php

namespace App\Http\Controllers;

use App\Student;

class StudentsController extends Controller
{
    public function ajout()
    {
        return view('ajoutStudent');
    }

    public function traitementAjout()
    {
        request()->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
        ]);
        
        $student = Student::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
        ]);
    
        return redirect('students');
    }

    public function afficher()
    {
        $students = Student::all();

        return view('students', [
            'students' => $students
        ]);
        return view('ajoutStudent');
    }

}
