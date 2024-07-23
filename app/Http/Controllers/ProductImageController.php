<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    public function index()
    {
        return ProductImage::all();
    }

    public function show($id)
    {
        return ProductImage::find($id);
    }

    public function store(Request $request)
    {
        return ProductImage::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $productImage = ProductImage::find($id);
        $productImage->update($request->all());
        return $productImage;
    }

    public function destroy($id)
    {
        return ProductImage::destroy($id);
    }
}
