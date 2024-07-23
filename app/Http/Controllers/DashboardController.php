<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Address;
use App\Models\Payment;
use App\Models\Delivery;
use App\Models\Review;
use App\Models\Discount;
use App\Models\Notification;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::count(),
            'products' => Product::count(),
            'categories' => Category::count(),
            'orders' => Order::count(),
            'addresses' => Address::count(),
            'payments' => Payment::count(),
            'deliveries' => Delivery::count(),
            'reviews' => Review::count(),
            'offers' => Discount::count(),
            'notifications' => Notification::count(),
        ];

        return view('admin.dashboard', $data);
    }
}
