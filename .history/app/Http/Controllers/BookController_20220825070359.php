<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate([
        'book_name' => req,
        'author' => 'required', 
        'description' => 'required',
        'publication_date_n_time'=> 'required',
        'created_at',
        'updated_at']);

        Book::create($formFields);

        return redirect('/appview/books')->with('success','Book created sucessfully!');
    }

}
