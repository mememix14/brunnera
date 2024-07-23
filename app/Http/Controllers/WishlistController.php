<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return Wishlist::all();
    }

    public function show($id)
    {
        return Wishlist::find($id);
    }

    public function store(Request $request)
    {
        return Wishlist::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->update($request->all());
        return $wishlist;
    }

    public function destroy($id)
    {
        return Wishlist::destroy($id);
    }
}

