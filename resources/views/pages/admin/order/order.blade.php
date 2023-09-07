<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Orders</h1>
    <div class="ms-auto text-end mt-n1 col-auto">
        <div class="d-inline me-2 dropdown">
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-success" href="/order/create"><i class="bi bi-plus"></i>Add Data</a>
            <a class="btn btn-warning" href="/order/export"><i class="bi bi-box-arrow-down"></i> Export</a>
          </div>
    </div>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Customer</th>
        <th scope="col">Qty</th>
        <th scope="col">Date Order</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($orders as $key => $order)
    <tbody>
      <tr>
        <th>{{$key + $orders->firstItem()}}</th>
        <td>{{$order->name}}</td>
        <td>{{$order->full_name}}</td>
        <td>{{$order->qty}}</td>
        <td>{{ \Carbon\Carbon::parse($order->date)->format('d-m-Y')}}</td>
        <td>
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Action</button>
              <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href=""><i class="bi bi-pencil-square"></i> Update</a></li>
                <li><a class="dropdown-item" href="" onclick="return confirm('Are you sure you want to delete?')"><i class="bi bi-trash"></i> Delete</a></li>
              </ul>
            </div>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>