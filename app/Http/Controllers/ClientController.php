<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SizeProduct;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $product = Product::take(8)->get();
        return view('home',compact("product"));
    }
}
