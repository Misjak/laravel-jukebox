<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{ 

    public function create() {
    return view('admin.author.index');


    }
     // displays the form to create a new author
    public function create() {

        // create a new object author
        $author =  new Author;

        // compact('author') === ['author' => $author]
        $view = view('admin.author.edit', compact('author'));



        // resourcer/view/admin/author/edit.blade.php
        // $view = view ('admin.author.edit');

        return $view;
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required'
        ]);


        // create a new object Author
        $author = new Author;

        //fill the new object from  the request
        // $request = request(); // another way of getting the Request object

        $author->name = $request->input('name');

        // store the filled object into the database into table 'authors'
        $author->save();

        session()->flash('succes_message', 'Success!');

        //redirect somewhere
        return redirect('author/'.$author->id.'/edit');

    }

    // display the form to edit an existing author record
    public function edit($id){

        $author = Author::findOrFail($id);

        //dd($author);

        return view('admin.author.edit', compact('author'));
    }


    // updates an existing authro record in the database
    public function update(Request $request, $id) {

        $this->validate($request, [
            'name' => 'required'
        ]);


        $author = Author::findOrFail($id);

        $author->name = $request->input('name');

        $author->save();

        session()->flash('success_message', 'Success!');

        return redirect ('author/'.$author->id.'/edit');

    }
}
