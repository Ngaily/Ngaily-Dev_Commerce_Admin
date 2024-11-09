<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category_blog')->get();
        return view('admin.post.index', compact('posts'));
    }
}