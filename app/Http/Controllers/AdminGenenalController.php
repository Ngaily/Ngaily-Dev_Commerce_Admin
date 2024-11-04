<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGenenalController extends Controller
{
    public function index()
    {
        return view('admin.genenal.index');
    }
}
