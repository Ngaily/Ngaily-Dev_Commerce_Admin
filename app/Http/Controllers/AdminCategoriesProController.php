<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoriesProController extends Controller
{
    public function index()
    {
        $category = Categories::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.categories.index', compact('category'));
    }
    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $imagePath = '';
        try {
            // validate
            $validateData = $request->validate([
                'category_name' => 'required|string',
                'image' => 'image|required',
            ]);

            // upload image
            $imagePath = $request->file('image')->store('categories', 'public');

            // create category
            Categories::create([
                'category_name' => $validateData['category_name'],
                'image' => $imagePath,
                'status' => 0
            ]);

            // return
            return redirect()->back()->with('success', 'Thêm danh mục thành công');
        } catch (\Throwable $e) {
            Storage::delete($imagePath);
            return redirect()->back()->withInput()->withErrors(['error' => 'Error']);
        }
    }

    public function updateStatus(Request $request, string $id)
    {
        try {
            $validateData = $request->validate([
                'status' => 'required|numeric',
            ]);
            $status = $validateData['status'];
            if ($status == 0) {
                $newStatus = 1;
            } else {
                $newStatus = 0;
            }
            $category = Categories::findOrFail($id);
            $category->update([
                'status' => $newStatus
            ]);
            return redirect()->route('categories.index');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Error']);
        }
    }

    public function destroy(string $id)
    {
        $category = Categories::findOrFail($id);
        $imagePath = $category->image;
        $category->delete();
        if ($imagePath) {
            Storage::delete('public/' . $imagePath);
        }
        $category->delete();
        return redirect()->route(route: 'categories.index')->with('success', 'Deleted category successfully');
    }
}
