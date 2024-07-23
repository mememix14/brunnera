<?php

namespace App\Http\Controllers;

use App\Models\WishlistItem;
use Illuminate\Http\Request;

class WishlistItemController extends Controller
{
    public function index()
    {
        return WishlistItem::all();
    }

    public function show($id)
    {
        return WishlistItem::find($id);
    }

    public function store(Request $request)
    {
        return WishlistItem::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $wishlistItem = WishlistItem::find($id);
        $wishlistItem->update($request->all());
        return $wishlistItem;
    }

    public function destroy($id)
    {
        return WishlistItem::destroy($id);
    }
}

