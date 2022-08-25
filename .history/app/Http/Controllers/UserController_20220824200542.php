<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

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

       

        return back()->withErrors(['email' => 'Invalid email'])->onlyInput('email');
    }
}
