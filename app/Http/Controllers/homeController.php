<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::get();
        $titulo = 'Home';

        return view('home')
                ->with('home', $home)
                ->with('titulo', $titulo);
    }

    public function show($description)
    {

        return view('home');
    }
}