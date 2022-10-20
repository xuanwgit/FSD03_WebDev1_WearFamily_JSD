@extends('layouts.app')

@section('title') 
  My Orders / View
@endsection

@section('content')
  <div class ="container">
    <div class ="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Order View
              <a href="{{ url('my-orders')}}" class ="btn btn-warning text-white float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
          @foreach ($orders as $item)
            <div class="row">
              <div class="col-md-4 ">
                <h4>Shippping Details</h4>
                <hr>
                <label class="fw-bolder" for="">First Name</label>
                <div class="border p-2"> {{ $item-> firstname }}</div>
                <label class="fw-bolder" for="">Last Name</label>
                <div class="border p-2"> {{ $item-> lastname }}</div>
                <label class="fw-bolder" for="">Shipping Address</label>
                <div class="border p-2"> 
                  {{ $item-> address }}, </br>
                  {{ $item-> city }},</br>
                  {{ $item-> state }},</br>
                  {{ $item-> country }}</br>
                </div>
                <label class="fw-bolder" for="">Telephone</label>
                <div class="border p-2"> {{ $item-> mobile }}</div>
                <label class="fw-bolder" for="">Postal Code</label>
                <div class="border p-2"> {{ $item-> zip }}</div>
              </div>  
              <div class="col-md-8">
              <h4>Order Details</h4>
              <hr>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Order Number</th>
                    <th>Image</th>
                    <th>Set</th>
                    <th>Product Number</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($item -> OrderItems as $value)
                    <tr>
                      <td>{{ $item-> id }}</td>
                      <td><img src="/{{ $value->products -> sets -> image}}" alt="{{$value -> products -> sets -> name}}" width="100px"/></td>
                      <td>{{ $value -> products -> sets -> name }} </td>
                      <td>{{ $value -> product_id }} </td>
                      <td>{{ $value -> quantity }} </td>
                      <td>${{ $value -> products -> price }} </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <h4 class="px-2">Grand Total: <span class="float-end">${{ $item -> total }}</span> </h4>
              </div>
            </div>
            @endforeach  
        </div>
      </div>       
    </div>
  </div>
@endsection 
