<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        return Discount::all();
    }

    public function show($id)
    {
        return Discount::find($id);
    }

    public function store(Request $request)
    {
        return Discount::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $discount = Discount::find($id);
        $discount->update($request->all());
        return $discount;
    }

    public function destroy($id)
    {
        return Discount::destroy($id);
    }
}
