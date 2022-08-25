<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function books()
    {
        return view('appviews.books');
    }

    public function authors()
    {
        return view('appviews.authors');
    }
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required','email'],
            'password' => 'required'
        ]);

        if(Auth::attempt($formFields))
        {
            Auth::login($formFields);
            $request->session()->regenerate();

            return redirect('/app/books');
        }

        return back()->withErrors(['username' => 'Invalid username'])->onlyInput('username');
    }
}
