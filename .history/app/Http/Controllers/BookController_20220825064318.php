<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate(['book_name',
        'author',
        'description',
        'publication_date_n_time',
        'created_at',
        'updated_at']);

        Li::create($formFields);

        return redirect('/')->with('message','Listing created sucessfully!');
    }

}
