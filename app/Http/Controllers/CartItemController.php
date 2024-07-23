<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function index()
    {
        return CartItem::all();
    }

    public function show($id)
    {
        return CartItem::find($id);
    }

    public function store(Request $request)
    {
        return CartItem::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cartItem = CartItem::find($id);
        $cartItem->update($request->all());
        return $cartItem;
    }

    public function destroy($id)
    {
        return CartItem::destroy($id);
    }
}
