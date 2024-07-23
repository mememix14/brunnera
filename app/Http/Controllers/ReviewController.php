<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function show($id)
    {
        return Review::find($id);
    }

    public function store(Request $request)
    {
        return Review::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->update($request->all());
        return $review;
    }

    public function destroy($id)
    {
        return Review::destroy($id);
    }
}
