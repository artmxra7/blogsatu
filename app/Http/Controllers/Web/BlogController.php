<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    //
    public function index(){
        $post = Post::all();
        return view('blog.index', compact('post'));
    }
}
