<?php

namespace App\Http\Controllers;

use App\Models\SizeProduct;
use App\Http\Requests\StoreSizeProductRequest;
use App\Http\Requests\UpdateSizeProductRequest;

class SizeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizeProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SizeProduct $sizeProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SizeProduct $sizeProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSizeProductRequest $request, SizeProduct $sizeProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SizeProduct $sizeProduct)
    {
        //
    }
}
