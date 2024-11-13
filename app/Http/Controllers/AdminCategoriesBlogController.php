<?php

namespace App\Http\Controllers;

use App\Models\CategoriesBlog;
use Illuminate\Http\Request;

class AdminCategoriesBlogController extends Controller
{
    public function index()
    {
        $blogs = CategoriesBlog::all();
        return view('admin.categories_blog.index', compact('blogs'));
    }
    public function create()
    {
        return view('admin.categories_blog.create');
    }
    public function store(Request $request)
    {
        try {

            $validateData = $request->validate([
                'category_name' => 'required|string',

            ]);

            CategoriesBlog::create([
                'category_name' => $validateData['category_name'],
            ]);

            // return
            return redirect()->back()->with('success', 'Thêm danh mục thành công');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Error']);
        }
    }

    public function edit(string $id)
    {
        $blog = CategoriesBlog::findOrFail($id);
        return view('admin.categories_blog.edit', compact('blog'));
    }
    public function update(Request $request, string $id)
    {
        try {
            $validateData = $request->validate([
                'category_name' => 'required|string'
            ]);
            $blog = CategoriesBlog::findOrFail($id);
            $blog->update([
                'category_name' => $validateData['category_name']
            ]);
            return redirect()->route('categories_blog.index');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Error']);
        }
    }
    public function destroy(string $id)
    {
        $blogs = CategoriesBlog::findOrFail($id);
        $blogs->delete();
        return redirect()->route(route: 'categories_blog.index')->with('success', 'Xoá danh mục thành công');
    }
}