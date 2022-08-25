<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate(['book_name',
        'author' => 'required', 
        'description' 'required',
        'publication_date_n_time',
        'created_at',
        'updated_at']);

        Book::create($formFields);

        return redirect('/')->with('message','Listing created sucessfully!');
    }

}
