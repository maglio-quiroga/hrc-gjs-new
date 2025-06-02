<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;
use App\Models\PostImage;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $categories = Category::pluck('id','title');
        //dd($categories);
        return view('dashboard.post.create',['post'=> new Post(),'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        Post::create($data);
        return to_route("post.index")->with('status','Información agregada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show',["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.post.edit',['post'=>$post,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)//,PostImage $postImage
    {
        
        $data = $request->validated();
        //dd($data);
        if (isset($data["image"])) {
            $data["image"] = $filename = time().".".$data["image"]->extension();
            $request->image->move(public_path("image/uploads/posts"),$filename);
        }
        
        $post->update($data);
        //return back()->with('status','Información actualizada');
        return to_route("post.index")->with('status','Información actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route("post.index")->with('status','Información eliminada');
    }

    public function PostsData()
    {
        $publishedCount = Post::where('posted', 'yes')->count();

        $draftCount = Post::where('posted', '')->count();

        $totalPosts = $publishedCount + $draftCount;

        $publishedPercentage = $totalPosts > 0 ? ($publishedCount / $totalPosts) * 100 : 0;
        $draftPercentage = $totalPosts > 0 ? ($draftCount / $totalPosts) * 100 : 0;

        return response()->json([
            'published' => $publishedPercentage,
            'draft' => $draftPercentage,
        ]);
    }
}
