@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{ asset('/styles/filter.css') }}">
    <script src="{{ asset('scripts/filter.js') }}" defer></script>
@endsection
    
@section('content')
<!--?php print_r($sets) ?-->
<div class="container">
    <div class="row">

        <!-- Left filter bar -->
        <div class="col-3">

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="Colors">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Colors
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            @foreach ($colors as $color)
                            <div class="form-check">
                                <input class="form-check-input chkColors" type="checkbox" value="" attr-name="{{$color->name}}" id="{{$color->id}}">
                                <label class="form-check-label" for="{{$color->id}}">
                                    {{$color->name}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="Sizes">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Sizes
                    </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            @foreach ($sizes as $size)
                            <div class="form-check">
                                <input class="form-check-input chkSizes" type="checkbox" value="" attr-name="{{$size->name}}" id="{{$size->id}}">
                                <label class="form-check-label" for="{{$size->id}}">
                                    {{$size->name}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of Left Filter bar -->

        <!-- Filtered results -->
        <div class="col-9">
            <h2 id="setCategory">{{$category}}</h2>
            <div class="row g-4 mt-3 ms-2" id="product-list">
                @foreach ($sets as $set)
                <div class="col-lg-4 col-md-6 bags">
                    <div class="produc-img">
                        <a href="/ensembles/{{$set->slug}}"><img src="/{{$set->image}}" alt="" class="d-block mx-auto img-fluid"></a>
                    </div>
                    <div class="product-content text-center py-3">
                        <span class="d-block fw-bold text-uppercase">{{$set->name}}</span>
                        <span class="d-block">{{$set->price}}</span>
                    </div>
                </div>
                @endforeach
            <div> <!-- end Filtered results -->              
        </div>
    </div>
</div>
@endsection

