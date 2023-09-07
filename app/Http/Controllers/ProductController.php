<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.admin.product.product', [
            'products' => Product::orderBy('id', 'desc')->paginate(10)
        ]);
    }

    public function create()
    {
        return view('pages.admin.product.form', [
            'title' => 'Add Product',
            'action' => 'Save',
            'route' => route('products.store'),
        ]);
    }

    public function store(Request $request):RedirectResponse
    {
        $this->validation($request);

        $result = Product::create([
            'name'          => $request->name,
            'stock'         => $request->stock,
            'price'         => $request->price,
            'description'   => $request->description
        ]);

        if($result){
            return redirect()->route('products.index')->with(['success' => 'Data Saved Successfully!']);
        } else {
            return redirect()->route('products.index')->with(['error' => 'Data Failed to Save!']);
        }
    }

    public function show($id)
    {
        return view('pages.admin.product.form', [
            'title' => 'Update Product',
            'action' => 'Update',
            'route' => route('products.update',['id' => $id]),
            'row' => Product::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id):RedirectResponse
    {
        $this->validation($request);

        $product = Product::findOrFail($id);

        $result = $product->update([
            'name'          => $request->name,
            'stock'         => $request->stock,
            'price'         => $request->price,
            'description'   => $request->description
        ]);

        if($result){
            return redirect()->route('products.index')->with(['success' => 'Data Updated Successfully!']);
        } else {
            return redirect()->route('products.index')->with(['error' => 'Data Failed to Update!']);
        }
    }

    public function delete($id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $result = $product->delete();

        if($result){
            return redirect()->route('products.index')->with(['success' => 'Data Deleted Successfully!']);
        } else {
            return redirect()->route('products.index')->with(['error' => 'Data Failed to Delete!']);
        }
    }

    private function validation($request)
    {
        return $this->validate($request, [
            'name'          => 'required|min:5',
            'stock'         => 'numeric|min:1',
            'price'         => 'numeric|min:2',
            'description'   => 'required|min:10'
        ]);
    }
}
