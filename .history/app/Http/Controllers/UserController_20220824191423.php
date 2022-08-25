<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function c()
    {
        return view('listings.create');
    }
    public function login(Request $request){
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields))
        {
            $request->session()->regenerate();

            return redirect('/app/books');
        }
    }
}
