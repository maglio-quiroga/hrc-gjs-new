<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\PostImage;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostImageController extends Controller
{

    public static $rules = [
        'post_id' => 'required|exists:posts,id',
        'image' => 'required|image|max:2048'
    ];


    public function index() {
        $postImages = PostImage::with('post')->get();
        return view('dashboard.post_images.index', compact('postImages'));
    }

    public function create() {
        $posts = Post::all();
        return view('dashboard.post_images.create', ['post_images' => new PostImage(), 'posts' => $posts]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'post_id' => 'required|exists:posts,id',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $destinationPath = public_path('image/uploads/post_images');

            $image->move($destinationPath, $filename);

            $imageUrl = 'image/uploads/post_images/' . $filename;

            dd($imageUrl); 
            PostImage::create([
                'post_id' => $request->post_id,
                'image' => $imageUrl, 
            ]);

            return redirect()->route('post_images.index')->with('success', 'Imagen guardada correctamente');
        }

        return redirect()->back()->with('error', 'No se pudo subir la imagen.');
    }



    public function show(Post $post)
    {
        return view('dashboard.post_images.show',["post"=>$post]);
    }


    public function edit(PostImage $postImage)
    {
        $posts = Post::all();
        return view('dashboard.post_images.edit', compact('postImage', 'posts'));
    }

    public function update(Request $request, PostImage $postImage)
    {
        $request->validate([
            'image' => 'required|string',
            'post_id' => 'required|exists:posts,id'
        ]);

        $postImage->update($request->all());

        return redirect()->route('post_images.index')->with('status', 'Imagen actualizada.');
    }

    public static function updateRules()
    {
        return [
            'post_id' => 'required|exists:posts,id',
            'image' => 'nullable|file|image|max:2048'
        ];
    }


    public function destroy(PostImage $postImage)
    {
        $postImage->delete();
        return redirect()->route('post_images.index')->with('status', 'Imagen eliminada.');
    }
}
