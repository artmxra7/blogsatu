<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class BlogController extends Controller
{
    protected $limit = 3;
    public function index(){
        $post = Post::with('author')->latestFirst()->simplePaginate($this->limit);

        return view('blog.index', compact('post'));
    }


}
