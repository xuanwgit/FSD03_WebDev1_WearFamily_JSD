<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wear Family</title>
    <meta name="description" content="Apparel  ">
    <meta name="author" content="Quynh Ly, Marcelo, Xuan & Vivien">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="https://flatlogic.github.io/awesome-bootstrap-checkbox/demo/build.css" />

    <!-- Custom CSS -->
    <link href="styles/custom.css" rel="stylesheet">
    <!-- Custom JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="scripts/custom.js"></script>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="<?php echo e(asset('/images/We\'arFamilyFavicon.png'), false); ?>">

    <!-- For the font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

    <!-- end of Newsletter widow jquery-->
</head>

<body>
    <img id="scroll-top" title="Go to top" alt="go to top button" src="<?php echo e(asset('/images/to-top.png'), false); ?>"/>
    <div class="container-xl">
        <div class="userInfo text-end pt-3">
            <img src="<?php echo e(asset('/images/login.png'), false); ?>" alt="login">
            <a class="me-3" href="#">Sign In</a>
            <img src="<?php echo e(asset('/images/shoppingBag.png'), false); ?>" alt="shopping bag">
            <a href="#">Shopping Bag</a>
        </div>
        <!-- Header -->
        <div class="row">
            <img src="<?php echo e(asset('/images/We\'arFamilyLogo.png'), false); ?>" alt="Wear Family Logo" class="mt-5">
            <h2 class="text-center kaushan" id="WearTitle">We Wear as a Family!</h2>
        </div>

        <!-- Search bar for smaller devices only -->
        <div class="input-group d-lg-none mt-3" id="smSearchBar">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <span class="input-group-text searchButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
            </span>
        </div> 
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light my-3">
            <div class="container-xl">
                <a class="navbar-brand m-1" href="./index')}}">
                    <img src="images/We'arFamilyLogoSmall.png" alt="We'Ar Family Icon" height="50" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown m-1">
                            <a class="nav-link dropdown-toggle" href="#" id="setsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sets
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="setsDropdown">
                                <li><img src="images/sets.jpg" class="navPictures" alt="Baby picture"></li>
                                <li>Baby</li>
                                <li>Kids</li>
                                <li>Women</li>
                                <li>Men</li>
                            </ul>  
                        </li>   
                        <li class="nav-item dropdown m-1">
                            <a class="nav-link dropdown-toggle" href="#" id="dressDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dresses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dressDropdown">
                                <li><img src="images/dresses.webp" class="navPictures" alt="Toddler picture"></li>
                                <li>Baby girls</li>
                                <li>Girls</li>
                                <li>Women</li>
                            </ul>  
                        </li>   
                        <li class="nav-item dropdown m-1">
                            <a class="nav-link dropdown-toggle" href="#" id="swimDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Swimsuits
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="swimDropdown">
                                <li><img src="images/swimsuits.jpg" class="navPictures" alt="Kids picture"></li>
                                <li>Baby</li>
                                <li>Kids</li>
                                <li>Women</li>
                                <li>Men</li>                           
                            </ul>  
                        </li>   
                        <li class="nav-item dropdown m-1">
                            <a class="nav-link dropdown-toggle" href="#" id="topsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tops
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="topsDropdown">
                                <li><img src="images/tops.jpg" class="navPictures" alt="Teens picture"></li>
                                <li>Baby</li>
                                <li>Kids</li>
                                <li>Women</li>
                                <li>Men</li>                              
                            </ul>  
                        </li>   
                        <li class="nav-item dropdown m-1">
                            <a class="nav-link dropdown-toggle" href="#" id="bottomsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Bottoms
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="bottomsDropdown">
                                <li><img src="images/bottoms.jpg" class="navPictures" alt="Women picture"></li>
                                <li>Baby</li>
                                <li>Kids</li>
                                <li>Women</li>
                                <li>Men</li>                              
                            </ul>   
                        </li>  
                        <li class="nav-item dropdown m-1">
                            <a class="nav-link dropdown-toggle" href="#" id="pjDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pajamas
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="pjDropdown">
                                <li><img src="images/pajamas.jpg" class="navPictures" alt="Kids picture"></li>
                                <li>Baby</li>
                                <li>Kids</li>
                                <li>Women</li>
                                <li>Men</li>                              
                              </ul>  
                        </li>   
                        <li class="nav-item m-1">
                            <a class="nav-link " aria-current="page" href="./index">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="input-group d-none d-lg-flex" id="menuSearchBar">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <span class="input-group-text searchButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </span>
                </div> 
            </div>
        </nav>

        <!-- cart Form  -->
        <form action="" onreset="location.reload();" onsubmit="">
        <div class="container ">
            <div class="row">
                <div class="col-6" >
                    <h4 class="kaushan" style="color: var(--custom-blue)">
                        Cart:
                    </h4>
                    <hr />
                    <div class=col-12 px-5id="cart">
                        <label class = my-3></label>
                        <table id="cartTable" class="mt-2 border"></table>
                    </div>
                  
                    <h4 class="kaushan" style="color: var(--custom-blue)">
                        Promo Code / Voucher:
                    </h4>
                    <hr />
                    <div class="my-2">
                            <label for="promo" class="form-label">Promo Code Voucher</label>
                            <input type="text" id="promo" class="form-control"  maxlength="30" placeholder="Enter Promo Code">
                    </div>
                </div>
                    
                <div class="col-6">
                    <h4 class="kaushan" style="color: var(--custom-blue)">
                        Summary:
                    </h4>
                    <hr />
                    <table>
                    <tr>
                        <td colspan="2" class="" style = "width: 100%;">Product Total</td>
                        <td class="" style = "text-align: right;">
                            <input class="num" style = "text-align: right;" name="txtSubtotal" id="txtSubtotal" size="7" value="0.00" readonly="readonly" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="" style = "width: 100%;">Shipping</td>
                        <td class="" style = "text-align: right;">
                            <input class="num" style = "text-align: right;" name="txtShip" id="txtShip" size="7" value="0.00" readonly="readonly" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="" style = "width: 100%;">Order Total</td>
                        <td class="" style = "text-align: right;">
                            <input class="num" style = "text-align: right;" name="txtGrandTotal" id="txtGrandTotal" size="7" value="0.00" readonly="readonly" />
                        </td>
                    </tr>
                    </table>
                    <div class="col text-center">
                        <input type="Submit" class="button btn-outline-primary shadow rounded" value="Submit Order">
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Footer -->
        <nav class="navbar navbar-expand-md navbar-light flex-wrap bg-light mt-3 px-2">

            <!-- Categories 1 -->
            <div class="col-lg-3 col-4 p-sm-2">
                <ul class="nav flex-column">
                    <li><a class="nav-item nav-link" href="#">Sets</a></li>
                    <li><a class="nav-item nav-link" href="#">Dresses</a></li>
                    <li><a class="nav-item nav-link" href="#">Swimsuits</a></li>
                </ul>
            </div>
            <!-- Categories 2 -->
            <div class="col-lg-3 col-4 p-sm-2">
                <ul class="nav flex-column">
                    <li><a class="nav-item nav-link" href="#">Tops</a></li>
                    <li><a class="nav-item nav-link" href="#">Bottoms</a></li>
                    <li><a class="nav-item nav-link" href="#">Pajamas</a></li>
                </ul>
            </div>
            <!-- About -->
            <div class="col-lg-3 col-4 p-sm-2">
                <ul class="nav flex-column">
                    <li><a class="nav-item nav-link" href="#">About Us</a></li>
                    <li><a class="nav-item nav-link" href="#">Contact Us</a></li>
                    <li><a class="nav-item nav-link" href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-12 px-4 pt-3 border">
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
                            <img src="images/We'arFamilyLogo.png" alt="Wear Family logo" width="250" class="pb-3"/>
                        </a>
                    </li>
                    <li class="mx-3">
                        Designed and developed to share all the love to your family from
                        <a href="./about-us">Wear Family</a>.
                    </li>
                    <li class="my-3 d-flex justify-content-center">
                        <div class="d-flex">
                            <img src="images/follow-us.png" alt="Follow us" title="Follow Us" class="ps-2 pe-3">
                            <a href="#">
                                <img src="images/Instagram.png" alt="Instagram" title="KTB Instagram" class="px-3">
                            </a>
                            <a href="#">
                                <img src="images/facebook.png" alt="Facebook" title="KTB Facebook" class="px-3">
                            </a>
                            <a href="#">
                                <img src="images/pinterest.png" alt="Pinterest" title="KTB Pinterest" class="px-3">
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
</html><?php /**PATH C:\xampp\htdocs\WearFamily\resources\views/payment.blade.php ENDPATH**/ ?>