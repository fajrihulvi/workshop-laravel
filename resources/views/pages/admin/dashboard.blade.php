@extends('layouts.admin.content')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>
<div class="row g-3 mb-3">
    <div class="col-md-6 col-xxl-3">
      <div class="card">
        <div class="card-header bg-primary">
          <h6 class="mb-0 mt-2 d-flex align-items-center text-white">Product</h6>
        </div>
        <div class="card-body d-flex flex-column justify-content-end">
          <div class="row">
            <div class="col">
              <h3>{{ $count_products }}</h3>
            </div>
            <div class="col-auto ps-0">
                <h3><div class="bi bi-cart"></div></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card">
          <div class="card-header bg-primary">
            <h6 class="mb-0 mt-2 d-flex align-items-center text-white">Customer</h6>
          </div>
          <div class="card-body d-flex flex-column justify-content-end">
            <div class="row">
              <div class="col">
                <h3>0</h3>
              </div>
              <div class="col-auto ps-0">
                  <h3><i class="bi bi-people"></i></h3>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3">
        <div class="card">
          <div class="card-header bg-primary">
            <h6 class="mb-0 mt-2 d-flex align-items-center text-white">Order</h6>
          </div>
          <div class="card-body d-flex flex-column justify-content-end">
            <div class="row">
              <div class="col">
                <h3>0</h3>
              </div>
              <div class="col-auto ps-0">
                  <h3><i class="bi bi-person-lines-fill"></i></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xxl-3">
        <div class="card">
          <div class="card-header bg-primary">
            <h6 class="mb-0 mt-2 d-flex align-items-center text-white">Users</h6>
          </div>
          <div class="card-body d-flex flex-column justify-content-end">
            <div class="row">
              <div class="col">
                <h3>0</h3>
              </div>
              <div class="col-auto ps-0">
                  <h3><i class="bi bi-people"></i></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@include('pages.admin.order.order')
@stop