<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        return Delivery::all();
    }

    public function show($id)
    {
        return Delivery::find($id);
    }

    public function store(Request $request)
    {
        return Delivery::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $delivery = Delivery::find($id);
        $delivery->update($request->all());
        return $delivery;
    }

    public function destroy($id)
    {
        return Delivery::destroy($id);
    }
}
