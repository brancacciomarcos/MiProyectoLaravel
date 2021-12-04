<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $titulo = 'Mensaje-enviado';


        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        Mail::to('Pruebas@mails.com')->queue(new MessageReceived($message));


        return view('Mensaje-enviado')->with('titulo', $titulo);
    }

    public function index()
    {
        $titulo = 'Contact';
        
        return view('contact')->with('titulo', $titulo);
    }
}
