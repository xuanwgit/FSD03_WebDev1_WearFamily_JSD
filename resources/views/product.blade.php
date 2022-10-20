@extends('layouts.app')

@section('assets')
    <script src="{{ asset('scripts/shopping.js') }}" defer></script>
@endsection


@section('content')
<div class="alert alert-warning alert-dismissible fade show" id="cartError" role="alert">
  <h5 id="cartErrorMsg"></h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="alert alert-success alert-dismissible fade show" id="cartUpdated" role="alert">
  <h5 id="cartUpdatedMsg"></h5>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img id="item-display" class="img-fluid" src="/{{$set_image}}" alt="{{$set_name}}" />
                </div>
                <div class="col-md-8">
                    <h4 class="my-2"> 
                        {{$set_name}}
                    </h4>
                    <hr>

                    <form action="#" method="post" class="form" id="form">
                        <label class="fw-bold product-price"> Color </label>
                        @foreach ($colors as $color)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input radioColor" type="radio" name="allColors" id="{{$color->id}}">
                                <label for="{{$color->name}}">{{$color->name}}</label>
                            </div>
                        @endforeach
                        <hr>
                        <label class="fw-bold product-price"> Size </label>
                        @foreach ($allProducts as $key=>$value)
                            <div class="product-title">
                                {{$key}}
                            </div>

                            @foreach ($value as $size)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input sizes" type="radio" name="size" id="{{$size->id}}" value="{{$size->price}}"/>                           
                                <label for="{{$size->name}}">{{$size->name}}</label>
                            </div>
                            @endforeach
                            <br>
                        @endforeach
                        <hr>

                        <label class="fw-bold product-price">Price $ </label>
                        <input id="price" type="text"  name="total" class="num fw-bold" readonly="readonly" style="font-size: 20px" ></input>
                        <hr>

                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label class="fw-bold product-price">Quantity </label>
                                <div class="input-group text-center mb3">
                                    
                                    <input type="number" step="1" min="1" max="10" value="1" style="text-align: center;" name="quantity" id="quantity" class="form-control"/>
                                    
                                </div>
                            </div>   
                        
                            <div class="col-md-10">
                                </br>
                                <button type="button" style="text-align: center;" class="btn btn-success me-2 float-start addToCart">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div>
                        <label class="fw-bold product-price"> Description </label>
                        <p>
                            {{$set_description}}
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>   
        @endsection