<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index()
    {
        $titulo = 'About';
        
        return view('about')->with('titulo', $titulo);
    }
}
