<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class master extends Controller
{
   public function index()
    {
        return view('dashboard.dashboard');
    }
}
