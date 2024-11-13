<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\CategoriesBlog;
use App\Models\Post;


class AdminGenenalController extends Controller
{
    public function index()
    {
        // $userCount = User::count();
        $productCount = Products::count();
        $categoryCount = Categories::count();
        $categoryBlogCount = CategoriesBlog::count();
        $postCount = Post::count();
        // $commentCount = Comment::count();
        // $orderCount = Order::count();
        // $inventoryCount = Inventory::count();
        return view('admin.genenal.index', compact('productCount', 'categoryCount', 'categoryBlogCount', 'postCount'));
    }
}
