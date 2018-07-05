<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class monController extends Controller
{
    public function accueil()
    {
        return view('hello');
    }
}
