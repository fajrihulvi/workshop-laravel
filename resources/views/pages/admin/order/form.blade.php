@extends('layouts.admin.content')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{$title}}</h1>
</div>
<form action="{{ $route }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Customer</label>
      <select class="form-control" id="id_customer" name="id_customer">
        <option value="">Choose</option>
        @foreach ($customers as $customer)
        <option value="{{ $customer->id }}">{{ $customer->full_name }}</option>
        @endforeach
      </select>
        @error('id_customer')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Product</label>
        <select class="form-control" id="id_product" name="id_product">
          <option value="">Choose</option>
          @foreach ($produtcs as $product)
          <option value="{{ $product->id }}">{{ $product->name }}</option>
          @endforeach
        </select>
          @error('id_product')
              <div class="text-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Order Date</label>
        <input type="date" class="form-control" id="date" name="date" value="{{$row->date ?? ''}}">
          @error('date')
              <div class="text-danger mt-2">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-3">
      <label for="stock" class="form-label">Qty</label>
      <input type="number" class="form-control" id="qty" name="qty" value="{{$row->qty ?? ''}}">
        @error('qty')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">{{$action}}</button>
    </div>
  </form>
@stop
