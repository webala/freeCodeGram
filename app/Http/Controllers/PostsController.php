<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Models\Post;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function index() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'caption'=>'required|max:255'
        ]);
        if ($request->hasFile('file')) {

            $this->validate($request, [
                'image'=>'required|image'
            ]);

       
            
            $imagePath = $request->file->store('posts', 'public');
            $image = Image::make(public_path('storage/{$imagePath}'))->fit(1200, 1200);
            $image->save();

            $post = new Post([
                'caption'=>$request->caption,
                'photo'=>$imagePath,
                'user_id'=>auth()->user()->id
            ]);

            $post->save();
        }
        return back()->with('status', 'Post created successfully');
    }
}
 