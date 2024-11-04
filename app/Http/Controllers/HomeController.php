<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Categories::where('status', 1)->get();
        return view('user.home', compact('categories'));
    }
}
