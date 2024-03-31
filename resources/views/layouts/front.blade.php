<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" href="img/favicon.png" sizes="32x32" />
<link rel="icon" href="img/favicon.png" sizes="192x192" />
<link rel="apple-touch-icon" href="img/favicon.png" />
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <!-- Bootstrap css  -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper-bundle.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>
    <!-- header section start  -->
    <header class="sticky-top">
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg bg-white py-3">
                <div class="container-fluid flex-wrap ">
                    <a class="navbar-brand order-0" href="#">
                        <img src="{{ asset('frontend/img/DGLifestyles-Logo.png') }}" class="header-logo img-fluid" alt="DGLifestyles-Logo.png">
                    </a>
                    <button class="navbar-toggler order-1 order-md-2 order-lg-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="header-search d-flex flex-grow-1 flex-md-grow-0 order-2 order-md-1 order-lg-0 w-100" role="search">
                        <input class="search-input form-control border-2 border-secondary-subtle rounded-0" type="search" placeholder="Search for the best in modern lighting" aria-label="Search">
                        <button class="search-btn btn btn-secondary rounded-0 px-4" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                    <div class="collapse navbar-collapse justify-content-center w-100 order-3" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-nav-red m-auto mb-2 mb-lg-0 gap-2">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Fans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Fences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Railings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Interior-doors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Entrance-doors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Showers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bathroom-access</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sinks</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header section end  -->
    @yield('contents')

    <!-- Footer start  -->
    <footer>
        <div class="container">
            <div class="footer-top pb-4">
                <div class="row text-center text-md-start">
                    <div class="col-md-6">
                        <h4>Sign Up Now</h4>
                        <p class="py-3">Find out about special offers, sales, exclusive promotions, and more.</p>
                        <form class="d-flex" role="search">
                            <input class="form-control py-2 border-2 border-secondary rounded-0" type="email" placeholder="Enter your email" aria-label="email">
                            <button class="btn btn-secondary flex-shrink-0 rounded-0 px-4" type="submit">SIGN ME UP</button>
                        </form>
                    </div>
                    <div class="col-md-6 pt-4 pt-md-0">
                        <h4>Contact With Us</h4>
                        <p class="py-3">Find out about special offers, sales, exclusive promotions, and more.</p>
                        <ul class="social-links list-group list-group-horizontal justify-content-center justify-content-md-start list-unstyled gap-3">
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-google"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-mid py-4 text-center text-md-start">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3 pb-4 pb-lg-0">
                        <h4>Quick Links</h4>
                        <div class="line my-3"></div>
                        <ul class="list-group list-unstyled footer-list">
                            <li>
                                <a href="#" class="text-decoration-none">Contact Us</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Track Your Order</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Warehouse Sale</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">View All Promotions</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Shop All Sale</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Become an Affiliate Partner</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Contract Services</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Design Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-4 pb-lg-0">
                        <h4>Shop With Confidence</h4>
                        <div class="line my-3"></div>
                        <ul class="list-group list-unstyled footer-list">
                            <li>
                                <a href="#" class="text-decoration-none">YLighting Customer Service</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Shipping + Delivery</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Price Gurantee</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Returns + Cancellations</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">FAQs</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Privacy Policy / Your Privacy Rights</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Accessiblity Policy</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Terms + Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-4 pb-lg-0">
                        <h4>About Us</h4>
                        <div class="line my-3"></div>
                        <ul class="list-group list-unstyled footer-list">
                            <li>
                                <a href="#" class="text-decoration-none">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">In the News</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Careers</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Partner With Us</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 pb-4 pb-lg-0">
                        <h4>DG Ideas</h4>
                        <div class="line my-3"></div>
                        <ul class="list-group list-unstyled footer-list">
                            <li>
                                <a href="#" class="text-decoration-none">Ideas by Room</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Ideas by Category</a>
                            </li>
                            <li>
                                <a href="#" class="text-decoration-none">Latest + Greatest</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-center">
                <div class="line"></div>
                <p class="pt-3">Copyright © 2024 DG Lifestyle</p>
            </div>
        </div>
    </footer>
    <!-- Footer end  -->

    <!-- Bootstrap Js  -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Font Awesome Js  -->
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <!-- Swiper Js  -->
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <!-- jQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <!-- App Js  -->
    <script src="{{ asset('frontend/js/app.js') }}"></script>
</body>
</html>
