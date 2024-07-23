<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'sku' => 'required|string|unique:products,sku',
            'quantity' => 'required|integer',
            'weight' => 'nullable|numeric',
            'discount' => 'nullable|numeric',
            'is_active' => 'required|boolean',
            'available_from' => 'nullable|date',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::create($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('product_images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_path' => $imagePath,
                ]);
            }
        }

        return redirect()->route('products.create')->with('success', 'Product created successfully');
    }

    public function edit(Product $product)
{
    $categories = Category::all();
    return view('admin.products.edit', compact('product', 'categories'));
}

public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'sku' => 'required|string|unique:products,sku,' . $product->id,
        'quantity' => 'required|integer',
        'weight' => 'nullable|numeric',
        'discount' => 'nullable|numeric',
        'is_active' => 'required|boolean',
        'available_from' => 'nullable|date',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $product->update($validated);

    if ($request->hasFile('images')) {
        // Delete existing images
        foreach ($product->images as $image) {
            \Storage::delete('public/' . $image->image_path);
            $image->delete();
        }

        // Upload new images
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('product_images', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $imagePath,
            ]);
        }
    }

    return redirect()->route('products.index')->with('success', 'Product updated successfully');
}

    public function destroy($id)
    {
        $product = Product::find($id);

        if ($product) {
            // Delete product images
            foreach ($product->images as $image) {
                \Storage::delete('public/' . $image->image_path);
                $image->delete();
            }

            $product->delete();
        }

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
