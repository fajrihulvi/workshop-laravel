<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Customer</th>
        <th scope="col">Qty</th>
        <th scope="col">Date Order</th>
      </tr>
    </thead>
    @foreach ($orders as $key => $order)
    <tbody>
      <tr>
        <th>{{$key + 1}}</th>
        <td>{{$order->name}}</td>
        <td>{{$order->full_name}}</td>
        <td>{{$order->qty}}</td>
        <td>{{ \Carbon\Carbon::parse($order->date)->format('d-m-Y')}}</td>
      </tr>
    </tbody>
    @endforeach
</table>