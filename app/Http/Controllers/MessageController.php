<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
    	//return request('email');devuelve una instancia de la calse iluminate http request
    	//return $request->get('email');
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
            'name.required' => __('I need your name')
        ]);

        Mail::to('elie.qc95@gmail.com')->queue(new MessageReceived($message)); //siempre usar queue en lugar de send



    	return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');
    }
}
