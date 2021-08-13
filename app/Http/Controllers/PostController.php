<?php

namespace App\Http\Controllers;

use App\Post;
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
                'max' => ":attribute độ dài ko quá 10 kí tự",
                'required' => ':attribute Không được để trống!'
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );
        // b1: lấy tất cả thông tin từ request lưu vào biến input 
        $input = $request->all();


        if ($request->hasFile('fileUpload')) {
            // b2: lấy thông tin file trong request gửi lên từ form lưu vào biến file
            $file = $request->file('fileUpload');


            //b3: lấy tên file gửi lên lưu vào biến fileName 
            $fileName =  $file->getClientOriginalName();

            // b4: lưu file vào thư mục chỉ định
            $file->move('public/uploads', $fileName);

            // b5: tạo địa chỉ file để chuẩn bị lưu lên database
            $thumnail = 'public/uploads/' . $fileName;

            // b6: lưu địa chỉ file vào thumnail 
            $input['thumnail'] = $thumnail;
        };
        // dd($input);
        // b7: tạo và gửi dữ liệu form lên server thông qua mảng dữ liệu lưu trong input 
        Post::create($input);

       

        // return view('post.show', compact('posts'));
    }

    function show (){
        $posts = Post::all();
        return view('post.show', compact('posts'));
    }
}
