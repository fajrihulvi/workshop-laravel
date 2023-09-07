@extends('layouts.admin.content')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
    <div class="ms-auto text-end mt-n1 col-auto">
        <div class="d-inline me-2 dropdown">
            <a href="/products/create" class="btn btn-success"><i class="bi bi-plus"></i>Add Data</a>
        </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $key => $product)
      <tr>
        <th>{{$key + $products->firstItem()}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->stock}}</td>
        <td>Rp. {{number_format($product->price,0,',','.')}}</td>
        <td>{{ \Illuminate\Support\Str::words($product->description, 9,'....')}}</td>
        <td>
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Action</button>
              <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/products/show/{{$product->id}}"><i class="bi bi-pencil-square"></i> Update</a></li>
                <li><a class="dropdown-item" href="{{route('products.delete', $product->id)}}" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i> Delete</a></li>
              </ul>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex">
    {{ $products->links() }}
  </div>
@stop