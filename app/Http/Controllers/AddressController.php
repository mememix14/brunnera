<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return Address::all();
    }

    public function show($id)
    {
        return Address::find($id);
    }

    public function store(Request $request)
    {
        return Address::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $address = Address::find($id);
        $address->update($request->all());
        return $address;
    }

    public function destroy($id)
    {
        return Address::destroy($id);
    }
}

