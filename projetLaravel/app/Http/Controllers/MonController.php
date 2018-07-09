<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonController extends Controller
{
    public function accueil()
    {
        return view('hello');
    }
}
