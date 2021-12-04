<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        $titulo = 'Contact';
        
        return view('contact')->with('titulo', $titulo);
    }
}
