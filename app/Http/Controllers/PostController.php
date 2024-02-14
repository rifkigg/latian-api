<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostDetailResource;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //          
        return PostResource::collection($posts); //menggunakan php resource(bisa memilih data yang ingin di tampilkan)
    }

    public function show($id) {
        $post = Post::with("writer:id,username")->findOrfail($id); //mengatur apa saja yang akan muncul di relationship
        /* diatas ini setelah koma tidak boleh sepasi maka akan eror dan harus ada primary key nya biar tidak null*/
        // return response()->json(['data' => $post]);
        return new PostDetailResource($post); //menggunakan php resource(bisa memilih data yang ingin di tampilkan)
    }

    // public function show2($id) {
    //     $post = Post::findOrFail($id);
    //     return new PostDetailResource($post);
    // }
}
