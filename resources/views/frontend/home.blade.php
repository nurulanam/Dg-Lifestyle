@extends('layouts.front')
@section('contents')

    <!-- Banner Section start  -->
    <section class="banner-section">
        <div class="container-fluid p-0">
            <div class="banner-inner row">
                <div class="banner-paste col-md-4"></div>
                <div class="col-md-8">
                    <div class="row banner-inner">
                        <div class="banner-gray col-4">

                        </div>
                        <div class="banner-door col-4">

                        </div>
                        <div class="banner-sofa col-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section end  -->

    <!-- Categories Section start  -->
    <section class="categories-section">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="ad d-flex flex-column">
                        <div class="wholesale d-flex align-items-center py-4 px-2">
                            <p class="text-white">wholesale</p>
                            <img src="{{ asset('frontend/img/DG-logo-white.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="villa"></div>
                    </div>
                </div>
                <div class="col-md-8 py-3">
                    <div class="swiper swiper-categories1">
                        <ul class="categories swiper-wrapper">
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Decor-Fans.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                        </ul>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper swiper-categories2">
                        <ul class="categories swiper-wrapper">
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Decor-Fans.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                            <li class="text-center swiper-slide">
                                <a href="#" class="text-decoration-none">
                                    <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                                    <h4>Colorful Faucets</h4>
                                </a>
                            </li>
                        </ul>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section end  -->

    <!-- Shop By Category Section start -->
    <section class="shop-by-category-section">
        <div class="container-fluid p-0">
            <div class="px-3 pb-4">
                <h2 class="h-outline">SHOP BY CATEGORY</h2>
            </div>
            <div class="featured-categories">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/featured-thumb/smart-mirror.jpg') }}" class="img-fluid w-100" alt="smart-mirror.jpg">
                            <div class="p-3">
                                <h4>Smart Mirrors</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/featured-thumb/European-Door.jpg') }}" class="img-fluid w-100" alt="smart-mirror.jpg">
                            <div class="p-3">
                                <h4>European Doors</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/featured-thumb/Living-room-Furniture.jpg') }}" class="img-fluid w-100" alt="smart-mirror.jpg">
                            <div class="p-3">
                                <h4>Living-room Furniture</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="all-categories pt-5 px-3">
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Decor-Fans.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Decor-Fans.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Decor-Fans.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3 col-xl-2 text-center pb-4">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('frontend/img/categories/Colorful-Faucets.jpg') }}" class="img-fluid" alt="">
                            <h4>Colorful Faucets</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop By Category Section end -->

    <!-- Insiration Section start   -->
    <section class="inspiration-section">
        <div class="container-fluid p-0">
            <div class="px-3 pb-4">
                <h2 class="h-outline">INSPIRATION + ADVICE</h2>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-md-6 p-0 order-0">
                    <img src="{{ asset('frontend/img/YLighting-Exclusive-Designs.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 px-4 px-lg-5 order-1">
                    <div class="max-w-620">
                        <h3 class="h-outline pt-3 pt-md-4 pt-lg-0">YLighting Exclusive Designs</h3>
                        <p class="py-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        <a href="#" class="btn btn-red fw-semibold p-0">Shop Now<span class="ms-1"><i class="fa-solid fa-angles-right fa-sm"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pb-3">
                <div class="col-md-6 px-4 px-lg-5 order-1 order-md-0">
                    <div class="max-w-620">
                        <h3 class="h-outline pt-3 pt-md-4 pt-lg-0">Fall Design Event: Rare Steals</h3>
                        <p class="py-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        <a href="#" class="btn btn-red fw-semibold p-0">Shop Now<span class="ms-1"><i class="fa-solid fa-angles-right fa-sm"></i></span></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 order-0 order-md-1">
                    <img src="{{ asset('frontend/img/Fall-Design-Event-Rare-Steals.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 p-0 order-0">
                    <img src="{{ asset('frontend/img/Award-Winning-Designs.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 px-4 px-lg-5 order-1">
                    <div class="max-w-620">
                        <h3 class="h-outline pt-3 pt-md-4 pt-lg-0">Award-Winning Designs</h3>
                        <p class="py-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        <a href="#" class="btn btn-red fw-semibold p-0">Shop Now<span class="ms-1"><i class="fa-solid fa-angles-right fa-sm"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Insiration Section end   -->

    <!-- New Arrivals Section start  -->
    <section class="new-arrivals-section">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('frontend/img/new-arrivals.jpg') }}" class="img-fluid w-100" alt="smart-mirror.jpg">
                <div class="p-3">
                    <h5>New Arrivals</h5>
                    <p class="py-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <a href="#" class="btn btn-red fw-semibold p-0">Shop Now<span class="ms-1"><i class="fa-solid fa-angles-right fa-sm"></i></span></a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('frontend/img/new-arrivals.jpg') }}" class="img-fluid w-100" alt="smart-mirror.jpg">
                <div class="p-3">
                    <h5>New Arrivals</h5>
                    <p class="py-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <a href="#" class="btn btn-red fw-semibold p-0">Shop Now<span class="ms-1"><i class="fa-solid fa-angles-right fa-sm"></i></span></a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('frontend/img/new-arrivals.jpg') }}" class="img-fluid w-100" alt="smart-mirror.jpg">
                <div class="p-3">
                    <h5>New Arrivals</h5>
                    <p class="py-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <a href="#" class="btn btn-red fw-semibold p-0">Shop Now<span class="ms-1"><i class="fa-solid fa-angles-right fa-sm"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrivals Section end  -->

@endsection
