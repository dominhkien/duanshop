<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Size;
use \App\Models\SizeProduct;
class DashboardSizeController extends Controller
{
    public function index()
    {
        
        $size = Size::all();
        $sizeProduct = SizeProduct::join('san_pham','sanpham_kichco.id_sp','=','san_pham.id')
        ->join('kich_co','sanpham_kichco.id_kc','=','kich_co.id')
        ->select('sanpham_kichco.*','san_pham.ten as ten_sp','kich_co.kich_co as kc')
        ->get();
        return view('admin.product_size.index',compact('size','sizeProduct'));
    }
}
