<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailController extends Controller
{
    public function getData(Request $req){
        $userDetails = [
            'name' => auth()->user()->username,
            'email' => auth()->user()->email,
        ];
        $formFields = $req->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required',
        ]);

        // Mail::to('test@mail.com')->send(new cartMail($formFields,$userDetails));
    }
}
