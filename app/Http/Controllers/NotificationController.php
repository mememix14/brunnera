<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        return Notification::all();
    }

    public function show($id)
    {
        return Notification::find($id);
    }

    public function store(Request $request)
    {
        return Notification::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $notification = Notification::find($id);
        $notification->update($request->all());
        return $notification;
    }

    public function destroy($id)
    {
        return Notification::destroy($id);
    }
}
