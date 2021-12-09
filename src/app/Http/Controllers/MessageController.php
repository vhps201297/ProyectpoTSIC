<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){

        //return $request->get('email'); cuando se tiene el parámetro $request
        //return Request('subject');

        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5'
        ],[
            'subject.required' => 'Coloca un asunto' // Mensaje de validación personalizado 
        ]);

        Mail::to('vhps201297@gmail.com')->queue(new MessageReceived($message));
        //return new MessageReceived($message);
        return back()->with('status', 'Se enviaron los datos con éxito');
    }
    
}
