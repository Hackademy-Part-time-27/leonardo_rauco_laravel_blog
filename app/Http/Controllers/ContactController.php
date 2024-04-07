<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller

{

    public function viewForm(){
        return view('pages.contacts');
    }


public function send(Request $request){
    //dd($request->all());

    //dd($request->email); 
    //dd($request->message);
    if ($request->email =='' || $request->message=='') {
    return redirect()->back()->with(['error' => 'i campi non possono essere vuoti ']);
    }
    /*
    if ($request->email == ''){
        return redirect()->back()->with(['error' => 'il campo email è vuoto']);
    }
    if ($request->messege == '') {
        return redirect()->back()->with(['error' => 'il campo messaggi è vuoto']);
        }
        */ 

        //return (new \App\Mail\ContactMail($request->email,$request->message))->render();
        // Elaborazione dati ...
        \Illuminate\Support\Facades\Mail::to('admin@example.com')->send(new \App\Mail\ContactMail($request->email, $request->message));

    return redirect()->back()->with(['success' => 'Richiesta inviata correttamente']);
}
}
