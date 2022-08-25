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

        return redirect('/appview/authors')->with('success','Author created sucessfully!');
    }

    public function update(Request $request){


        Author::where('id',$request->id)->update(([
            'fname' => $request->fname,
            'lname' => $request->lname, 
            'mname' => $request->mname, 
            'description' => $request->description
        ]));

        return redirect('/appview/authors')->with('success','Author updated sucessfully!');
    }

    public function delete(Request $request) {

       Author::where('id',$request->id)->delete();
       return redirect('/appview/authors')->with('success','Author deleted sucessfully!');
    }
}
