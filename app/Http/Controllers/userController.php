<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function Signup(Request $req){
        $formFields = $req->validate([
            'name' => ['required','min:3'],
            'email' => ['required','email'],
            'password' => ['required','min:3'],
            'image' => ['required'],
        ]);
        $formFields['image'] = $req->file('image')->store('images','public');
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/home')->with('message','Welcome ' . auth()->user()->name);
    }

    public function SignOut(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        return redirect('/login')->with('Hope to see you soon!');
    }

    public function SignIn(Request $req){
        $formFields = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required',],
        ]);

        if(auth()->attempt($formFields)){
            $req->session()->regenerate();
            return redirect('/home')->with('message', 'Welcome Back' . auth()->user()->name);
        }else{
            return back();
        }
    }

}

?>