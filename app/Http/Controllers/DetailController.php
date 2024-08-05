<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SizeProduct;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(string $id)
    {
        // $product = Product::where('san_pham.id', $id)
        //     ->join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
        //     ->select('san_pham.*', 'sanpham_kichco.gia')
        //     ->first();
        $product = Product::where('san_pham.id', $id)
            ->join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
            ->select('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai','san_pham.id_thuong_hieu','sanpham_kichco.id_sp','sanpham_kichco.id_kc','sanpham_kichco.so_luong', 'sanpham_kichco.gia')
            ->groupBy('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai','san_pham.id_thuong_hieu','sanpham_kichco.id_sp','sanpham_kichco.id_kc','sanpham_kichco.so_luong', 'sanpham_kichco.gia')
            ->first();

        $variant_product = SizeProduct::where('id_sp', $product->id)
            ->join('kich_co', 'kich_co.id', '=', 'sanpham_kichco.id_kc')
            ->select('sanpham_kichco.id as id_size', 'sanpham_kichco.id_kc', 'sanpham_kichco.gia', 'sanpham_kichco.so_luong', 'kich_co.kich_co')
            ->get()
            ->sortBy('kich_co');
        $variant_img = Product::where('san_pham.id_the_loai','=', $product->id_the_loai)
        ->join('sanpham_kichco', 'sanpham_kichco.id_sp', '=', 'san_pham.id')
        ->select('san_pham.*','sanpham_kichco.gia')
        ->groupBy('san_pham.id', 'san_pham.ten', 'san_pham.anh', 'san_pham.mo_ta', 'san_pham.id_the_loai', 'sanpham_kichco.gia')
        ->take(8)
        ->get();
        
    // dd($variant_img->toArray());
       // dd($variant_product->toArray());
       // dd($product->toArray());
        return view('client.product_detail.index', compact('product', 'variant_product','variant_img'));
    }
}
