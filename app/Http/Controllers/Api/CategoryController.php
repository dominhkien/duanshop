<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
       $list= Category::select('ten_loai')->get();
       return response()->json(
        [
            'data'=>$list,
            'status_code'=> '200',
            'message'=>'success'
        ],
        200
    );
    }
    public function store(Request $request){
        $request->validate([
            'ten_loai'=>'bail|required||max:255|regex:/^[a-zA-Z]+$/'
        ]);
        $data=[
            'ten_loai'=>$request->ten_loai
        ];
        $newCate = Category::create($data);
        return response()->json(
            [
                'data'=>$newCate,
                'status_code'=> '200',
                'message'=>'success'
            ],
            200
        );
    }
    public function show(string $cate_id){
        $category = Category::select('ten_loai','id')->find($cate_id);
        return response()->json(
            [
                'data'=>$category,
                'status_code'=> '200',
                'message'=>'success'
            ],
            200
        );
    }
    public function update(Request $request){
        $request->validate([
            'ten_loai'=>'bail|required||max:255|regex:/^[a-zA-Z]+$/'
        ]);
        $data = [
            'ten_loai'=>$request->ten_loai
        ];
        $category = Category::find($request->id);
        $category->update($data);
        return response()->json(
            [
                'data'=>$category,
                'status_code'=> '200',
                'message'=>'success'
            ],
            200
        );
    }
    public function destroy(Request $request){
        Category::find($request->id)->delete();
        return response()->json(
            [
                
                'status_code'=> '200',
                'message'=>'success'
            ],
            200
        );
    }
}
