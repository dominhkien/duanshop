<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSizeProductRequest;
use App\Http\Requests\UpdateSizeProductRequest;
use \App\Models\Size;
use \App\Models\SizeProduct;
class DashboardSizeController extends Controller
{
    public function index()
    {
        
        $size = Size::all();
        $sizeProduct = SizeProduct::join('san_pham','sanpham_kichco.id_sp','=','san_pham.id')
        ->join('kich_co','sanpham_kichco.id_kc','=','kich_co.id')
        ->select('sanpham_kichco.*','san_pham.ten as ten_sp','kich_co.kich_co as kc','san_pham.id as id_sp')
        ->get();
        return view('admin.product_size.index',compact('size','sizeProduct'));
    }
    public function create(string $id){
        $product = Product::where('id',$id)->select('ten','id')->first();
        $size = Size::all();
        
        return view('admin.product_size.size_product.create',compact('size','product'));
    }
    public function store(StoreSizeProductRequest $request){
        $data = [
            'id_sp'=>$request->id_sp,
            'id_kc'=> $request->size,
            'so_luong'=> $request->quatity,
            'gia'=> $request->price,
        ];
        
        SizeProduct::create($data);
        return redirect()->route('dashboardsize.index')->with("success","Successfully");
    }
    public function destroy(string $id){
       
        SizeProduct::where('id',$id)->delete();
        return back()->with("success","Successfully");
    }
    public function swap(){

    }
    public function edit(string $id,string $id_sp){
        $size = Size::all();
        $variant = SizeProduct::where('id',$id)->first();
        $product = Product::where('id',$id_sp)->select('ten','id')->first();
        return view('admin.product_size.size_product.edit',compact('size','product','variant'));
    }
    public function update(string $id , UpdateSizeProductRequest $request){
        $data = [
            'id_sp'=>$request->id_sp,
            'id_kc'=> $request->size,
            'so_luong'=> $request->quatity,
            'gia'=> $request->price,
        ];
        
       $update= SizeProduct::where('id',$id)->update($data);
       if($update){
        return redirect()->route('dashboardsize.index')->with("success","Successfully");
       }else{
        return back()->with('error','Error');
       }
        
    }
}
