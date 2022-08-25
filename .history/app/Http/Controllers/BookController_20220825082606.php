<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request){
        $formFields = $request->validate([
        'book_name' => 'required',
        'author' => 'required', 
        'description' => 'required',
        'publication_date_n_time'=> 'required']);

        Book::create($formFields);

        return redirect('/appview/books')->with('success','Book created sucessfully!');
    }

    public function update(Request $request, Book $book){
        //dd($request->id);


        Book::where('id',$request->id)->update([
            'book_name' => $request->book_name,
            'author' => $request->author,
            'description' => $request->description,
            'publication_date_n_time' => $request->publication_date_n_time
        ]);

        return redirect('/appview/books')->with('success','Book updated sucessfully!');
    }

    public function delete(Request){

    }
    

}
