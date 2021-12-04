<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {
        $titulo = 'Projects';
        
        return view('projects')->with('titulo', $titulo);
    }
}
