@extends('layouts.app')

@section('assets')
    <script src="{{ asset('scripts/checkout.js') }}" defer></script>
@endsection

@section('content')
<?php 
if (Auth::check()){
    $id = Auth::id();
} 
else {
    header("Location: /login");
    exit();
}
?>
  <div class="alert alert-danger alert-dismissible fade show" id="checkoutError" role="alert">
    <h5 id="checkoutErrorMsg"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <input type="hidden" value="{{$cost=0}}"/>
        <input type="hidden" value="{{$amount=0}}"/>
        @foreach($data as $item)
        <input type="hidden" value="{{$amount=$amount+$item->quantity;}}"/>
        <input type="hidden" value="{{$cost=$cost+$item->quantity*$item->price;}}"/>
        @endforeach
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Subtotal (CAD)</h6>
            <small class="text-muted">Tota of Products</small>
          </div>
          <input class="text-muted col-2" style = "text-align: right;" value="{{$cost}}"/>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Shipping (CAD)</h6>
              <small class="text-muted">Standard Shiping</small>
            </div>
            <input class="text-muted col-2" style = "text-align: right;" value="5.00"/>
          </li>
 
        <li class="list-group-item d-flex justify-content-between">
          <div>
          <h6>Total (CAD)</h6>
          <small class="text-muted">Total Products + Shiping</small>
          </div>
          <input class="text-muted col-2" style = "text-align: right;" id="total" name="total" value="{{$cost+5}}"/>
        </li>
      </ul>
      <form class="card p-2 needs-validation" action="" onreset="location.reload();" onsubmit="">
        <div class="input-group">

          <div class="col text-center">
                    <input type="Submit"  class="button btn-outline-primary shadow rounded addToCheckout" value="Checkout"></input>
          </div>
        </div>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Ship to</h4>
      <hr>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="fisrtname">First name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastname">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
            <label for="mobile">Mobile <span class="text-muted"></span></label>
            <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="xxx-xxx-xxxx" required>
            <div class="invalid-feedback">
              Please enter a valid mobile for shipping updates.
            </div>
          </div>
        

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Street name, Street No, Company name, Building" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country"  name="country" required>
              <option value="">Choose...</option>
              <option>Canada</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Region</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Choose...</option>
              <option>Quebec</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="city">City</label>
            <select class="custom-select d-block w-100" id="city" name="city" required>
              <option value="">Choose...</option>
              <option>Montreal</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Postal Code</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
            <div class="invalid-feedback">
              Postal code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc_name">Name on card</label>
            <input type="text" class="form-control" id="cc_name" name="cc_name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="account_no">Credit card number</label>
            <input type="text" class="form-control" id="account_no" name="account_no" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="expiry">Expiration (MM/YY)</label>
            <input type="text" class="form-control" id="expiry" name="expiry" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cvv">CVV</label>
            <input type="text" class="form-control" id="cvv" name="cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>

</div>
@endsection