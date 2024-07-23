<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return Cart::all();
    }

    public function show($id)
    {
        return Cart::find($id);
    }

    public function store(Request $request)
    {
        return Cart::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->update($request->all());
        return $cart;
    }

    public function destroy($id)
    {
        return Cart::destroy($id);
    }
}
