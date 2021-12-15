<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokeApiController extends Controller
{
    public function index()
    {
        $PokeApi = PokeApi::get();
        $titulo = 'PokeApi';

        return view('PokeApi')
                ->with('PokeApi', $PokeApi)
                ->with('titulo', $titulo);
    }

    public function getpokemon()
    {
        PokeApi::PokemonList()
    }
}
