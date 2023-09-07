<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'count_products' => count(Product::all()),
            'orders' => Order::join('product', 'product.id', '=', 'order.id_product')
            ->join('customer', 'customer.id', '=', 'order.id_customer')
            ->orderBy('order.id','DESC')
            ->paginate(10)
        ]);
    }
}
