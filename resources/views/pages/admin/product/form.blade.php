@extends('layouts.admin.content')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{$title}}</h1>
</div>
<form action="{{ $route }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$row->name ?? ''}}">
        @error('name')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
      <label for="stock" class="form-label">Stock</label>
      <input type="number" class="form-control" id="stock" name="stock" value="{{$row->stock ?? ''}}">
        @error('stock')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Example:10000" value="{{$row->price ?? ''}}">
        @error('price')
            <div class="text-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5">{{$row->description ?? ''}}</textarea>
        @error('description')
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
