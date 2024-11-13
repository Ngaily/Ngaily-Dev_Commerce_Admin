<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminImageController extends Controller
{
    public function create(string $id)
    {
        $product = Products::findOrFail($id);
        $images = Image::where('product_id', $id)->get();
        return view('admin.products.image', compact('images', 'product'));
    }

    public function store(Request $request, string $id)
    {
        $imagePath = '';
        try {
            // validate
            $validateData = $request->validate([
                'image' => 'required|image'
            ]);
            // upload
            $imagePath = $request->file('image')->store('image-more', 'public');
            // create image
            Image::create([
                'product_id' => $id,
                'image' => $imagePath
            ]);
            return redirect()->back()->with('success', 'Thêm ảnh thành công');
        } catch (\Throwable $e) {
            Storage::delete($imagePath);
            return redirect()->back()->withInput()->withErrors(['error' => 'Error']);
        }
    }


    public function destroy(string $id)
    {
        $image = Image::findOrFail($id);
        $imagePath = $image->image;
        $image->delete();
        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }

        return redirect()->back();
    }
}
