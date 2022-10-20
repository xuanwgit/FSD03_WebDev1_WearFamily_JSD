<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

    <title><?php echo e(config('app.name', 'Wear_Family'), false); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js'), false); ?>" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- Custom JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="scripts/custom.js"></script>


    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('styles/custom.css'), false); ?>" rel="stylesheet">


    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('/images/We\'arFamilyFavicon.png'), false); ?>">

    <!-- For the font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <?php echo $__env->yieldContent('assets'); ?>
</head>
<body>    
    <img id="scroll-top" title="Go to top" alt="go to top button" src="<?php echo e(asset('/images/to-top.png'), false); ?>"/>
    <div class="container-xl">
    <nav class="navbar navbar-expand-lg navbar-light bg-light my-3 py-1">
        <div class="userInfo navbar-collapse collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item m-1">
                            <img src="<?php echo e(asset('/images/login.png'), false); ?>" alt="login">
                        </li>
                            <?php if(Route::has('login')): ?>
                            <li class="nav-item m-1">
                                <a class="nav-link" href="<?php echo e(route('login'), false); ?>"><?php echo e(__('Login'), false); ?></a>
                            </li>
                            <?php endif; ?>
                            <li class="nav-item m-1">
                                <img src="<?php echo e(asset('/images/register.png'), false); ?>" alt="register">
                            </li>
                            <?php if(Route::has('register')): ?>
                            <li class="nav-item m-1">
                                <a class="nav-link" href="<?php echo e(route('register'), false); ?>"><?php echo e(__('Register'), false); ?></a>
                            </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item mt-2">
                                <img src="<?php echo e(asset('/images/logged.png'), false); ?>" alt="logged">
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-center" id="logoutDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->name, false); ?>

                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a href="<?php echo e(url('my-orders'), false); ?>" class="dropdown-item">
                                                My Orders
                                            </a>
                                        </li>
                                        <li>
                                            <a a class="dropdown-item" href="<?php echo e(route('logout'), false); ?>"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout'), false); ?>

                                            </a>                
                                            <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" class="d-none">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                    </ul>
                            </li>


                            <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart"><img src="<?php echo e(asset('/images/shoppingBag.png'), false); ?>" alt="shopping bag"></a>
                        </li>
                    </ul>
                </div>
    </nav>

        <!-- Header -->
        <div class="row">
            <img src="<?php echo e(asset('/images/We\'arFamilyLogo.png'), false); ?>" alt="Wear Family Logo" class="mt-5">
            <h2 class="text-center kaushan" id="WearTitle">We Wear as a Family!</h2>
        </div>

        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light my-3">
            <div class="container-xl">
                <a class="navbar-brand m-1" href="/index">
                    <img src="<?php echo e(asset('/images/We\'arFamilyLogoSmall.png'), false); ?>" alt="We'Ar Family Icon" height="50" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/category/Sets">Sets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/category/Swimsuits">Swimsuits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/category/Pajamas">Pajamas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/category/Dresses">Dresses</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Footer -->
        <nav class="navbar navbar-expand-md navbar-light flex-wrap bg-light mt-3 px-2">

            <!-- Categories 1 -->
            <div class="col-lg-4 col-6 p-sm-2">
                <ul class="nav flex-column">
                    <li><a class="nav-item nav-link" href="/category/Sets">Sets</a></li>
                    <li><a class="nav-item nav-link" href="/category/Swimsuits">Swimsuits</a></li>
                </ul>
            </div>
            <!-- Categories 2 -->
            <div class="col-lg-4 col-6 p-sm-2">
                <ul class="nav flex-column">
                    <li><a class="nav-item nav-link" href="/category/Pajamas">Pajamas</a></li>
                    <li><a class="nav-item nav-link" href="/category/Dresses">Dresses</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-12 px-4 pt-3 border">
                <p id="subscribe">Subscribe to Wear Family</p>
                <div class="input-group" id="subscribeBar">
                    <input class="form-control" type="text" placeholder="Email">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                          </svg>
                    </span>
                </div>   
                <p id="subscribePrivate">By signing up for newsletter, you agree to our Privacy Policy</p>
            </div>
        </nav>
        <!-- WF info column -->
        <div class="col-lg-12 col-12 p-sm-2">
            <div class="">
                <ul class="list-unstyled small text-muted text-center">
                    <li>
                        <a href="./index">
                            <img src="<?php echo e(asset('images/We\'arFamilyLogo.png'), false); ?>" alt="Wear Family logo" width="250" class="pb-3"/>
                        </a>
                    </li>
                    <li class="mx-3">
                    </li>
                    <li class="my-3 d-flex justify-content-center">
                        <div class="d-flex">
                            <img src="<?php echo e(asset('images/follow-us.png'), false); ?>" alt="Follow us" title="Follow Us" class="ps-2 pe-3">
                            <a href="#">
                                <img src="<?php echo e(asset('images/Instagram.png'), false); ?>" alt="Instagram" title="KTB Instagram" class="px-3">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('images/facebook.png'), false); ?>" alt="Facebook" title="KTB Facebook" class="px-3">
                            </a>
                            <a href="#">
                                <img src="<?php echo e(asset('images/pinterest.png'), false); ?>" alt="Pinterest" title="KTB Pinterest" class="px-3">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


</html><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/layouts/app.blade.php ENDPATH**/ ?>