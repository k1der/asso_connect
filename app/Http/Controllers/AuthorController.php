<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list( ) {
        $authors = Author::all();
        return json_encode($authors);
    }

    public function show( Author $author ) {
		return json_encode($author);
	}

    public function create(Request $request)
    {
        // We should check here the data inside the request
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        // We should check here the data inside the request
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }
}
