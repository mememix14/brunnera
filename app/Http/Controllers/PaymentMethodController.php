<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        return PaymentMethod::all();
    }

    public function show($id)
    {
        return PaymentMethod::find($id);
    }

    public function store(Request $request)
    {
        return PaymentMethod::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $paymentMethod = PaymentMethod::find($id);
        $paymentMethod->update($request->all());
        return $paymentMethod;
    }

    public function destroy($id)
    {
        return PaymentMethod::destroy($id);
    }
}
