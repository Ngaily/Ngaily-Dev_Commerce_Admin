<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Products::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Categories::all();
        return view('admin.products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        try {
            $imagePath = '';
            $validateData = $request->validate([
                'product_name' => 'required|string',
                'image' => 'required|image',
                'price' => 'required|numeric',
                'description' => 'required',
                'category_id' => 'required|exists:categories,id',
            ]);


            $imagePath = $request->file('image')->store('products', 'public');
            Products::create([
                'product_name' => $validateData['product_name'],
                'image' => $imagePath,
                'price' => $validateData['price'],
                'description' => $validateData['description'],
                'status' => 0,
                'category_id' => $validateData['category_id'],
            ]);
            return redirect()->route('product.index')->with('success', 'Thêm sản phẩm thành công');
        } catch (\Throwable $e) {
            Storage::delete($imagePath);
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['error' => 'Error']);
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
            $product = Products::findOrFail($id);
            $product->update([
                'status' => $newStatus
            ]);
            return redirect()->route('product.index');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Error']);
        }
    }
    public function destroy(string $id)
    {
        $product = Products::findOrFail($id);
        $imagePath = $product->image;
        $product->delete();
        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }

        return redirect()->route(route: 'product.index')->with('success', 'Xoá sản phẩm thành công');
    }
}
