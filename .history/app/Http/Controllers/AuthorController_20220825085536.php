<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
        'fname' => 'required',
        'lname' => 'required', 
        'mname' => 'required', 
        'description' => 'required']);

        Author::create($formFields);

        return redirect('/appview/books')->with('success','Book created sucessfully!');
    }

    public function update(Request $request, Book $book){


        Author::where('id',$request->id)->update(([
            'fname' => 'required',
            'lname' => 'required', 
            'mname' => 'required', 
            'description' => 'required'])
        ]);

        return redirect('/appview/books')->with('success','Book updated sucessfully!');
    }

    public function delete(Request $request, Book $book) {

       Book::where('id',$request->id)->delete();
       return redirect('/appview/books')->with('success','Book Deleted sucessfully!');
    }
}
