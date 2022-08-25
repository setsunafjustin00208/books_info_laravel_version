<?php

namespace App\Http\Controllers;

use App\Models\User;
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

       $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (aattempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'invalid credentials',
        ])->onlyInput('email');
    }
}