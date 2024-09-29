<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index')->with('posts', $posts);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
    $request->validate([
        'modelname' => 'required|string',
        'vehiNo' => 'required|string',
        'NoOfPassanger' => 'required|integer',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        'price' => 'required|numeric',
        'about' => 'required|string',
    ]);

    // Get the authenticated user's ID
    $userId = Auth::id();

    // Upload and save the image
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('posts'), $imageName);

    // Create the post with the user ID
    Post::create([
        'modelname' => $request->modelname,
        'vehiNo' => $request->vehiNo,
        'NoOfPassanger' => $request->NoOfPassanger,
        'image' => $imageName,
        'price' => $request->price,
        'about' => $request->about,
        'user_id' => $userId, // Assign the user ID to the foreign key
    ]);

    return redirect('post')->with('flash_message', 'Post Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view ('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        
        return view('post.edit', compact('post')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $input=$request->all();

         // Check if the authenticated user owns the post
        if ($post->user_id !== Auth::id()) {
            return redirect()->route('post.index')->with('error_message', 'Unauthorized action');
        }

        $post->update($input);
        return redirect('post')->with('flash_message','Post Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        // Check if the authenticated user owns the post
        if ($post->user_id !== Auth::id()) {
            return redirect()->route('post.index')->with('error_message', 'Unauthorized action');
        }


        $post->delete();
        return redirect('post')->with('flash_message','Post Deleted!');
    }


   
}
