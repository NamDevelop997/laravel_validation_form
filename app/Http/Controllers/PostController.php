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

        $request->validate(
            [
                'title' => 'required|max:10',
                'content' => 'required',
            ],
            [
                'max'=> ":attribute độ dài ko quá 10 kí tự",
                'required' => 'Không được để trống!'
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );
        return $request->input();
    }
}
