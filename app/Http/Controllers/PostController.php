<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function add()
    {
        return view('post.add');
    }

    function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:10',
            'content' => 'required',
        ]);
        return $request->input();
    }
}
