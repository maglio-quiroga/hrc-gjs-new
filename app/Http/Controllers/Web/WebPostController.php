<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebPostController extends Controller
{
    public function index()
    {
        $posts = Post::where("posted","yes")->paginate(10);
        return view("web.post.index",compact("posts"));
    }
    public function new()
    {
        $posts = Post::where("posted", "yes")->take(10)->get();
        //dd($posts);
        return view('webpage', compact("posts"));
    }
    public function show(Post $post)
    {
        return view("web.post.show",compact("post"));
    }
}
