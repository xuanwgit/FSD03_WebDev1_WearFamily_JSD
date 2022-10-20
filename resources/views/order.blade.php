@extends('layouts.app')

@section('title') 
  My Orders
@endsection

@section('content')
  <div class ="container">
    <div class ="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>My Order</h4>
          </div>
          <div class="card-body">
          <table class="table table-bordered">
          <thead>
            <tr>
              <th>Order Number</th>
              <th>Total Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $item)
              <tr>
                <td>{{ $item-> id  }} </td>
                <td>{{ $item-> total }}</td>
                <td>{{ $item-> status }}</td>
                <td>
                  <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-primary">View</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        </div>
        </div>
        
      </div>
    </div>

  </div>
@endsection 