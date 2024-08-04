<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $product = Product::join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
            ->select('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->groupBy('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->take(8)
            ->get();
        $category = Category::all();
        $id = 0;

        return view('home', compact("product", "category", "id"));
    }

    public function productcate(Request $request, $id = null)
    {
        $id = $id ?? 0;

        $product = Product::query()
            ->join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
            ->select('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia');

        if ($id != 0) {
            $product = $product->where('id_the_loai', $id);
        }

        if ($request->has('sort') && $request->sort == 'price_low') {
            $product = $product->orderBy('sanpham_kichco.gia', 'asc');
        } elseif ($request->has('sort') && $request->sort == 'price_high') {
            $product = $product->orderBy('sanpham_kichco.gia', 'desc');
        }

        $product = $product->groupBy('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->take(12)
            ->get();
        $category = Category::all();

        return view('home', compact("product", "category", "id"));
    }

    public function pricelow()
    {
        $product = Product::join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
            ->select('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->groupBy('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->orderBy('sanpham_kichco.gia', 'asc')
            ->take(12)
            ->get();
        $category = Category::all();
        return view('home', compact("product", "category"));
    }

    public function pricehigh()
    {
        $product = Product::join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
            ->select('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->groupBy('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->orderBy('sanpham_kichco.gia', 'desc')
            ->take(12)
            ->get();
        $category = Category::all();
        return view('home', compact("product", "category"));
    }
    // public function loadmore(){
        
    // }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $product = Product::where('ten', 'LIKE', "%{$keyword}%")
            ->join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
            ->select('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->groupBy('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
            ->get();
        $category = Category::all();
        $id = 0;

        return view('home', compact("product", "category", "id"));
    }
}
