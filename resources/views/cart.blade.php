@extends('layouts.app')

@section('assets')
    <script src="{{ asset('scripts/cart.js') }}" defer></script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- cart Form  -->
<form action="" onreset="location.reload();" onsubmit="">
    <div class="container ">
        <div class="row">
            <div class="col-8" >
                <!-- <h4 class="kaushan" style="color: var(--custom-blue)"> -->
                <h4>
                    Cart:
                </h4>
                <hr />
                <div class="col-12 px-1" id="cart">
                <label class = my-2></label>
                    <table id="tblProducts">
                        <input type="hidden" value="{{$cost=0}}"/>
                        <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td class="col=2" style ="text-align: left;" >
                                <a  href="#" >
                                <img class="img-thumbnail" href="#" style="width: 200px" src="/{{$item->image}}">
                                </a>
                            </td>
                            <td class="text col-7" style ="text-align: left;">
                                <h6>{{$item->name}}</h6>
                                <a>Siz: {{$item->size}}, Cat: {{$item->category}}, Col: {{$item->color}}, Mem: {{$item->member}}, Id: {{$item->product_id}} </a>
                                <p><a href="delete/{{$item->id}}">Remove</a></p>
                            </td>
                            <td class="col-1" style = "text-align: right;">
                                <input class="col-12 quantity" type="number" step="1" min="1" max="10" style = "text-align: center;" name="quantity" id="{{$item->product_id}}" size="1" value="{{$item->quantity}}"/>
                            </td>
                            <td><input type="hidden" class="price" value="{{$item->price}}" name="price"/></td>
                            <td><input type="hidden" class="product_id" id="product_id" name="product_id" value="{{$item->product_id}}"/></td>
                            <td class="col-1" style = "text-align: right;"></td>
                            <td class="col-1" style = "text-align: right;">
                                <input class="col-12 subtot" style = "text-align: right;" name="subtot" id="subtot" readonly="readonly" type="text" step="" value="{{$item->quantity*$item->price}}"/>
                            </td>    
                        </tr>
                        <input type="hidden" value="{{$cost=$cost+$item->quantity*$item->price;}}"/>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <!-- <h4 class="kaushan" style="color: var(--custom-blue)"> -->
                <h4>
                    Summary:
                </h4>
                <hr/>
                <table>
                    <tr>
                        <td colspan="2" class="" style = "width: 100%;">
                        <h6>Subtotal (CAD)</h6>
                        <small class="text-muted">Tota of Products</small>
                        </td>
                        <td class="" style = "text-align: right;">
                        <input class="grdtot" style = "text-align: right;" name="" id="grdtot" size="7" readonly="readonly"  value="{{$cost}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="" style = "width: 100%;"><h6>Shipping</h6>
                        <small class="text-muted">Standard Shiping (CAD)</small></td>
                        <td class="" style = "text-align: right;">
                        <input class="num" style = "text-align: right;" name="ship" id="txtShip" size="7" readonly="readonly" value="5.00" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="" style = "width: 100%;">
                        <h6>OrederTotal (CAD)</h6>
                        <small class="text-muted">Total Products + Shiping</small>
                    </td>
                        <td class="" style = "text-align: right;">
                            <input class="grdtotShip" style = "text-align: right;" name="" id="grdtotShip" size="7" readonly="readonly" value="{{$cost+5.00}}"/>
                        </td>
                    </tr>
                </table>
                <hr/>
                <div class="input-group">
                    <div class="col text-center">
                        <input type="Submit"  class="button btn-outline-primary shadow rounded addToOrder" value="Submit Order"></input>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

 @endsection