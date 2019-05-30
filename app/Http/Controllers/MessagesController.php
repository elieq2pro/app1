<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
    	//return request('email');devuelve una instancia de la calse iluminate http request
    	//return $request->get('email');
    	request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
            'name.required' => __('I need your name')
        ]);

    	return 'Datos validados';
    }
}
