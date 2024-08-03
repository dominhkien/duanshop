<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::join('the_loai','san_pham.id_the_loai','=','the_loai.id')
        ->join('thuong_hieu','san_pham.id_thuong_hieu','=','thuong_hieu.id')
        ->select('san_pham.*','the_loai.ten_loai as ten_tl','thuong_hieu.ten_thuong_hieu as ten_th')
        ->get();
        return view("admin.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = Brand::all();
        $category = Category::all();
        return view("admin.products.create",compact('category','brand'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        
        $data = $request->all();
        if ($request->hasFile("anh")) {
            $file = $request->anh;
            $ext = $file->getClientOriginalExtension();
            $file_name = time() . "." . $ext;
            $file->storeAs("public", $file_name);
        }

        $data["anh"] = $file_name;
        $is_insert = Product::insert(
            [
                "anh" => $data["anh"],
                "ten" => $data["ten"],
                "mo_ta" => $data["mo_ta"],
                "id_the_loai" => $data["tl"],
                "id_thuong_hieu" => $data["th"]
            ]
        );
        if( $is_insert ){
            return redirect()->route('product.index')->with('success','Successfully');
        }
        else{
            return back()->with('error','ERROR');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brand = Brand::all();
        $category = Category::all();
        $product = Product::join('the_loai','san_pham.id_the_loai','=','the_loai.id')
        ->join('thuong_hieu','san_pham.id_thuong_hieu','=','thuong_hieu.id')
        ->select('san_pham.*','the_loai.ten_loai as ten_tl','thuong_hieu.ten_thuong_hieu as ten_th','the_loai.id as id_tl','thuong_hieu.id as id_th')
        ->where('san_pham.id',$product->id)
        ->first();
        return view('admin.products.edit',compact('product','category','brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();
        if ($request->hasFile("anh")) {
            $file = $request->anh;
            $ext = $file->getClientOriginalExtension();
            $file_name = time() . "." . $ext;
            $file->storeAs("public", $file_name);
            $data["anh"] = $file_name;
        }
        else{
            $data["anh"] = $product->anh;                             
        }
       // dd($data);
        $is_update = Product::where('id',$product->id)->update(
            [
                "anh" => $data["anh"],
                "ten" => $data["ten"],
                "mo_ta" => $data["mo_ta"],
                "id_the_loai" => $data["tl"],
                "id_thuong_hieu" => $data["th"]
            ]
        );
        if( $is_update ){
            return redirect()->route('product.index')->with('success','Successfully');
        }
        else{
            return back()->with('error','ERROR');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success','Successfully');
    }
}
