<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function create()
    {
        return view('pages.admin.order.form', [
            'title' => 'Add Order',
            'action' => 'Save',
            'route' => route('order.store'),
            'customers' => Customer::all(),
            'produtcs' => Product::all()
        ]);
    }

    public function store(Request $request):RedirectResponse
    {
        $this->validation($request);

        $result = Order::create([
            'id_customer'   => $request->id_customer,
            'id_product'     => $request->id_product,
            'date'          => $request->date,
            'qty'           => $request->qty
        ]);

        if($result){
            return redirect()->route('dashboard.index')->with(['success' => 'Data Saved Successfully!']);
        } else {
            return redirect()->route('dashboard.index')->with(['error' => 'Data Failed to Save!']);
        }
    }

    public function export() 
    {
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=laporan.xls");

        return view('pages.admin.order.export', [
            'orders' => Order::join('product', 'product.id', '=', 'order.id_product')
            ->join('customer', 'customer.id', '=', 'order.id_customer')
            ->orderBy('order.id','DESC')
            ->get()
        ]);
    }

    private function validation($request)
    {
        return $this->validate($request, [
            'id_customer'   => 'required',
            'id_product'   => 'required',
            'qty'   => 'numeric',
            'date'   => 'required'
        ]);
    }
}
