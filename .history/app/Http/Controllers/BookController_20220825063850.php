<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' =>['required', Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listings::create($formFields);

        return redirect('/')->with('message','Listing created sucessfully!');
}
