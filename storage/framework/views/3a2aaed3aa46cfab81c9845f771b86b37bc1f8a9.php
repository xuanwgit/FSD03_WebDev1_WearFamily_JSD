

<?php $__env->startSection('content'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/index2.blade.php ENDPATH**/ ?>