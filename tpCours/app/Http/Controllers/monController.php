<?php

namespace App\Http\Controllers;

use App\Student;

class monController extends Controller
{
    public function accueil()
    {
        return view('hello');
    }
/*
    public function nouveau()
    {
        $student = App\Student::create([
            $student->email = request('firstname'),
            $student->mot_de_passe = request('lastname'),
        ]);
        
        return 'Bien joué';
        //return view('hello');
    }
*/
}
