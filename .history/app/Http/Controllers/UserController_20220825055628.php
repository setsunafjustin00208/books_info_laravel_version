<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){

        return view('appviews.index');
    }
    public function books(){

        return view('appviews.books',[
            'books' =>  Book::all(),
            'author'
        ]);
    }

    public function authors(){
        
        return view('appviews.authors');
    }


    public function authenticate(Request $request){

       $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/appview/books');
        }

        return back()->withErrors([
            'email' => 'invalid credentials',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        
        auth()->logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
