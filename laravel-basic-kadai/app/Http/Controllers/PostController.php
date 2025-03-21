<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use App\Models\Post;
=======
>>>>>>> c3213fed4b46b6290d4ae089d7c5c4ab997e1e17

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
<<<<<<< HEAD
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
=======
>>>>>>> c3213fed4b46b6290d4ae089d7c5c4ab997e1e17
    }
}
