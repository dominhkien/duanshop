<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.genre_brand.index', compact('brands', 'categories'));
    }
    public function home(){
        return view('admin.index');
    }
}

