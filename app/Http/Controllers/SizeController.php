<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $size =Size::all();
        // return view("dashboardsize.index", compact("size"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.product_size.size.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizeRequest $request)
    {
        $size = Size::create($request->all());
        return redirect()->route("dashboardsize.index")->with("success","Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view("admin.product_size.size.edit", compact("size"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSizeRequest $request, Size $size)
    {
        $size->update($request->all());
        return redirect()->route("dashboardsize.index")->with("success","Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        $size->delete();
        return redirect()->route("dashboardsize.index")->with("success","Successfully");
    }
}
