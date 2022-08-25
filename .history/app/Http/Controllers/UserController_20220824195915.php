<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('appviews.index');
    }
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
            $request->session()->regenerate();
            return redirect('/app/books');
        }

        return back()->withErrors(['email' => 'Invalid email'])->onlyInput('email');
    }
}
