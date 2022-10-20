@extends('layouts.app')

@section('assets')

    <!--Newsletter window jquery-->
    <!-- <script type="text/javascript">
        $(window).on('load', function() {
        $('#modal').modal('show');
        });
    </script> -->
    
    <!-- end of Newsletter widow jquery-->
    <link rel="stylesheet" href="styles/filter.css">

                <!--Newletter window definition -->

                <div id="modal" class="modal fade hide">
            <div class="modal-dialog">
                <div class="modal-content p-3">
                    <div class="modal-header">
                        <h5 class="modal-title">Subscribe to our Newsletter</h5>
                        <button type="button" class="btn-close" onclick="$('#modal').modal('toggle'); " data-dismiss="modal" aria-label="Close">
                 </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                        <img src="images/We'arFamilyLogoSmall.png" class="img-responsive mb-4" alt="Wear Family Logo" />
                        <p>Subscribe to our mailing list and stay informed.</p>
                        </div>
                        <form action="">
                            <div class="form-group m-4">
                                <div class="input-group">
                                    <div class="input-group my-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">
                                            <img src="images/envelope.png" class="img-responsive center" alt="Responsive image" width="30" height="24" />
                                          </span>
                                        </div>
                                        <input class="form-control" id="email" name="email" type="text" placeholder="Email Address">
                                    </div>
                               </div>
                               <div class="buttonHolder text-center mt-3">
                                <button type="button" class="button btn-outline-primary shadow rounded" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="button btn-outline-primary shadow rounded" onclick="if (validateEmail()) {$('#modal').modal('hide')};">Subscribe</button>
                            </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')
        <!-- Carousel with 2 sets of pictures for different device sizes -->
        <div class="carousel">
            <div class="slides">
                <img class="carousel-img" src="images/Carousel1.jpg" alt="images/Carousel1.jpg">
                <div class = "slide-description text-center">
                    <h4>Dress your family as a unity.</h4>
                </div>
            </div>
            <div class="slides">
                <img class="carousel-img" src="images/Carousel2.jpg" alt="Carousel2.jpg">
                <div class = "slide-description text-center">
                    <h4>These matching dresses couldnt be more cute.</h4>
                </div>
            </div>
            <div class="slides">
                <img class="carousel-img" src="images/Carousel3.jpg" alt="Carousel31.jpg">
                <div class = "slide-description text-center">
                    <h4>Summer is coming, why not matching the family on the beach too?</h4>
                </div>
            </div>
            <div class="slides">
                <img class="carousel-img" src="images/Carousel4.jpg" alt="Carousel4.jpg">
                <div class = "slide-description text-center">
                    <h4>Mini daddy is so tiny and so cute.</h4>
                </div>
            </div>

            <!-- Left & right arrow on carousel -->
            <div class="left-arrow" onclick="previousSlide()">&#10094;</div>
            <div class="right-arrow" onclick="nextSlide()">&#10095;</div>

            <!-- Little dots to show which picture is being shown -->
            <div class="dots">
                <span class="dot" onclick="showSlide(0);"></span>
                <span class="dot" onclick="showSlide(1);"></span>
                <span class="dot" onclick="showSlide(2);"></span>
                <span class="dot" onclick="showSlide(3);"></span>
            </div>
        </div>
        <!-- Gallery for Flyers -->
        <div class="gallery-img d-md-block">
            <!-- Pajamas -->
            <div class="text-center flyerTitle">Pajamas!</div>
            <div class="row">
                <div class="gallery-img d-md-block">
                    <a href="index">
                        <img src="images/FlyerPJs.jpg" alt="Pajamas" class="border p-3 gallery-img">
                    </a>
                </div>
            </div> 

            <!-- Best Sellers -->
            <div class="text-center flyerTitle">Best Sellers!</div>
            <div class="row">
                <div class="gallery-img d-md-block">
                    <a href="index">
                        <img src="images/FlyerBest.jpg" alt="Best Sellers" class="border p-3 gallery-img">
                    </a>
                </div>
            </div>                
 
            <!-- Swimsuits -->
            <div class="text-center flyerTitle">Summer is coming!</div>
            <div class="row">
                <div class="gallery-img d-md-block">
                    <a href="index">
                        <img src="images/FlyerSwimsuits.jpg" alt="Swimsuits" class="border p-3 gallery-img">
                    </a>
                </div>
            </div>                
        </div> 
@endsection
