<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        return OrderItem::all();
    }

    public function show($id)
    {
        return OrderItem::find($id);
    }

    public function store(Request $request)
    {
        return OrderItem::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $orderItem = OrderItem::find($id);
        $orderItem->update($request->all());
        return $orderItem;
    }

    public function destroy($id)
    {
        return OrderItem::destroy($id);
    }
}
