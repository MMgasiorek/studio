@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <h2 class="text-center mt-2 mb-2">Orders</h2>
        <div class="table-responsive" style="height:350px;">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Surname</th>
              <th scope="col">Phone</th>
              <th scope="col">Email</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->name}}</td>
              <td>{{$order->surname}}</td>
              <td>{{$order->phone}}</td>
              <td>{{$order->email}}</td>
              <td>
              <a href="{{ URL::to('/order_delete' , [$order->id] )}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
              <a href="{{ URL::to('/order_edit' , [$order->id] )}}"><button type="button" class="btn btn-primary btn-sm">Details</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection('content')