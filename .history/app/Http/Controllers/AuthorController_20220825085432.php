<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
        'fname' => 'required',
        'lname' => 'required', 
        'mname' => 'required', 
        'description' => 'required']);

        Book::create($formFields);

        return redirect('/appview/books')->with('success','Book created sucessfully!');
    }

    public function update(Request $request, Book $book){


        Book::where('id',$request->id)->update([
            'book_name' => $request->book_name,
            'author' => $request->author,
            'description' => $request->description,
            'publication_date_n_time' => $request->publication_date_n_time
        ]);

        return redirect('/appview/books')->with('success','Book updated sucessfully!');
    }

    public function delete(Request $request, Book $book) {

       Book::where('id',$request->id)->delete();
       return redirect('/appview/books')->with('success','Book Deleted sucessfully!');
    }
}
