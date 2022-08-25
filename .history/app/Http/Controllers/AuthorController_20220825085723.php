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

        return redirect('/appview/a')->with('success','Book created sucessfully!');
    }

    public function update(Request $request){


        Author::where('id',$request->id)->update(([
            'fname' => $request->fname,
            'lname' => $request->lname, 
            'mname' => $request->mname, 
            'description' => $request->description
        ]));

        return redirect('/appview/books')->with('success','Book updated sucessfully!');
    }

    public function delete(Request $request, Book $book) {

       Author::where('id',$request->id)->delete();
       return redirect('/appview/books')->with('success','Book Deleted sucessfully!');
    }
}
