<?php

namespace App\Http\Controllers;

use App\Models\CategoriesBlog;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category_blog')->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = CategoriesBlog::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            $validateData = $request->validate([
                'title' => 'required|string',
                'image' => 'required|image',
                'description' => 'required',
                'content' => 'required',
                'category_id' => 'required|integer|exists:category_blogs,id'
            ]);
            $imagePath = '';
            $imagePath = $request->file('image')->store('post', 'public');
            Post::create([
                'title' => $validateData['title'],
                'image' => $imagePath,
                'description' => $validateData['description'],
                'content' => $validateData['content'],
                'category_id' => $validateData['category_id']

            ]);
            return redirect()->back()->with('success', 'Thêm bài viết thành công');
        } catch (\Throwable $e) {
            Storage::delete($imagePath);
            return redirect()->back()->withInput()->withErrors(['error' => 'Error']);
        }
    }

    public function edit(string $id)
    {
        $categories = CategoriesBlog::all();
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('categories', 'post'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $validateData = $request->validate([
                'title' => 'required|string',
                'image' => 'nullable|image',
                'description' => 'required',
                'content' => 'required',
                'category_id' => 'required|integer|exists:category_blogs,id'
            ]);
            $post = Post::findOrFail($id);
            $imageOld = $post['image'];
            $imagePath = '';
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('post', 'public');
            } else {
                $imagePath = $imageOld;
            }

            $post->update([
                'title' => $validateData['title'],
                'image' => $imagePath,
                'description' => $validateData['description'],
                'content' => $validateData['content'],
                'category_id' => $validateData['category_id']
            ]);
            return redirect()->route('posts.index');
        } catch (\Throwable $e) {
            Storage::delete($imagePath);
            return redirect()->back()->withInput()->withErrors(['error' => 'Error']);
        }
    }
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $imagePath = $post->image;
        $post->delete();
        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }

        return redirect()->route(route: 'posts.index');
    }
}