@extends('frontend.layouts.modern-fashion')
@section('title')
    Modern Fashion
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="modern-fashion-home bg-warning-subtle overflow-hidden">
        <div class="font-effect position-absolute ff-fancy text-warning fw-normal text-uppercase">
            New Arrivals FASHION
        </div>
        <div class="container-fluid container-custom">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <p class="fs-18">👕 Find Your Style 👚</p>
                    <h1 class="text-capitalize display-5 fw-medium lh-base mb-3">Unleash your <span
                            class="ff-secondary">Street</span> with our new collection</h1>
                    <p class="text-muted lead fw-normal mb-4">A fashion collection is a curated series of garments and
                        accessories that customers can wear together. Yours may consist of traditional pieces, such as tops
                        and outerwear single product available in multiple colorways.</p>
                    <a href="product-grid-sidebar-banner" class="link-effect link-warning fs-17">Shop Now <i
                            class="bi bi-arrow-right align-baseline ms-1"></i></a>
                </div>
                <!--end col-->
                <div class="col-lg-6 ms-auto">
                    <div class="text-center main-home-img">
                        <img src="{{ URL::asset('build/images/fashion/img-1.png') }}" alt="">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end home-->

    <section class="py-5 border-bottom">
        <div class="container-fluid container-custom">
            <div class="row g-3">
                <div class="col-lg-3">
                    <div class="card bg-success-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-success bg-opacity-10 text-success rounded fs-22">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">Fast & Free Shipping</h6>
                                <p class="text-muted mb-0">Free Shipping for orders over $100</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card bg-primary-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-primary bg-opacity-10 text-primary rounded fs-22">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">Payment Security</h6>
                                <p class="text-muted mb-0">Within 1 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card bg-danger-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-danger bg-opacity-10 text-danger rounded fs-22">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">Products Quality</h6>
                                <p class="text-muted mb-0">Free Shipping for orders over $100</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card bg-secondary-subtle border-0 mb-0">
                        <div class="card-body d-flex align-items-center gap-3">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-secondary bg-opacity-10 text-secondary rounded fs-22">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="fs-16">24/7 Support</h6>
                                <p class="text-muted mb-0">24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="section">
        <div class="container-fluid container-custom">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <h2 class="title text-capitalize fw-medium lh-base mb-3"><b>Trending Outfit</b> of the day</h2>
                    <a href="product-grid-right" class="btn btn-outline-warning btn-hover">View All <i
                            class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-10">
                    <!-- Swiper -->
                    <div class="swiper category-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="category-widgets-main card border-0 shadow-none bg-light">
                                    <div class="effect">
                                        <img src="{{ URL::asset('build/images/fashion/product/img-11.png') }}" alt=""
                                            class="img-fluid">
                                        <div class="widgets-wrapper position-absolute text-center">
                                            <a href="product-grid-right"
                                                class="btn btn-primary w-md rounded-0 stretched-link">Polo Shirt</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-widgets-main card border-0 shadow-none bg-light">
                                    <div class="effect">
                                        <img src="{{ URL::asset('build/images/fashion/product/img-17.png') }}" alt=""
                                            class="img-fluid">
                                        <div class="widgets-wrapper position-absolute text-center">
                                            <a href="product-grid-right"
                                                class="btn btn-primary w-md rounded-0 stretched-link">Oxford Shirts</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-widgets-main card border-0 shadow-none bg-light">
                                    <div class="effect">
                                        <img src="{{ URL::asset('build/images/fashion/product/img-15.png') }}" alt=""
                                            class="img-fluid">
                                        <div class="widgets-wrapper position-absolute text-center">
                                            <a href="product-grid-right"
                                                class="btn btn-primary w-md rounded-0 stretched-link">Dramatic Tops</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-widgets-main card border-0 shadow-none bg-light">
                                    <div class="effect">
                                        <img src="{{ URL::asset('build/images/fashion/product/img-13.png') }}" alt=""
                                            class="img-fluid">
                                        <div class="widgets-wrapper position-absolute text-center">
                                            <a href="product-grid-right"
                                                class="btn btn-primary w-md rounded-0 stretched-link">Elegant Chic</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="category-widgets-main card border-0 shadow-none bg-light">
                                    <div class="effect">
                                        <img src="{{ URL::asset('build/images/fashion/product/img-12.png') }}" alt=""
                                            class="img-fluid">
                                        <div class="widgets-wrapper position-absolute text-center">
                                            <a href="product-grid-right"
                                                class="btn btn-primary w-md rounded-0 stretched-link">Sweater</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <h2 class="title fw-normal text-capitalize mb-3"><b>Trending</b> Products</h2>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-2 row-cols-1" id="productList">
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-02.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-17.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">URBAN Men Winter Stylish Jacket</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$87.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Success" data-bs-original-title="Success">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate ribbon-box">
                        <div class="ribbon ribbon-danger round-shape fw-normal fs-14">10% Off</div>
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-05.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-01.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Elanhood Full Sleeve Solid Women Jacket
                                    </h6>
                                </a>
                                <h6 class="fw-normal mb-3">$120.32 <small
                                        class="text-decoration-line-through fs-14 text-muted">$348.24</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-03.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-08.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">American Tourists Blue Polyester
                                        Backpack</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$64.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Red" data-bs-original-title="Red">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 ribbon-box card-animate">
                        <div class="ribbon ribbon-info round-shape fw-normal fs-14">Trending</div>
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-18.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-17.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Nike MAG Back to the Future</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$149.57</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light opacity-75">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-08.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-18.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Girls Printed Shorts</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$124.64</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Green" data-bs-original-title="Green">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Purple" data-bs-original-title="Purple">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 ribbon-box card-animate">
                        <div class="ribbon ribbon-danger round-shape fw-normal fs-14">Up to 15% Off</div>
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-12.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-09.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Stylish Collar Full Sleeve T-shirt</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$241.99 <small
                                        class="text-decoration-line-through fs-14 text-muted">119.99</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Success" data-bs-original-title="Success">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-11.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-13.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Style Women A-line dark Blue Dress</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$120.32</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-body opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Cyan" data-bs-original-title="Cyan">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-secondary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-13.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-11.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Imported Fabulous Women Top And Bottom
                                        Set</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$59.99 <small
                                        class="text-decoration-line-through fs-14 text-muted">$249.99</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Red" data-bs-original-title="Red">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Yellow" data-bs-original-title="Yellow">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-warning opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-15.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-14.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Urbanic Women Fit And Flare Black Dress
                                    </h6>
                                </a>
                                <h6 class="fw-normal mb-3">$97.49 <small
                                        class="text-decoration-line-through fs-14 text-muted">265.37</small></h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Gray" data-bs-original-title="Gray">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-light opacity-75">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Green" data-bs-original-title="Green">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-success opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col item">
                    <div class="card product-widget border-0 card-animate">
                        <div class="card-body p-2">
                            <div class="position-relative p-4 bg-light">
                                <img src="{{ URL::asset('build/images/fashion/product/img-09.png') }}" alt=""
                                    class="img-fluid product-img-main">
                                <img src="{{ URL::asset('build/images/fashion/product/img-13.png') }}" alt=""
                                    class="img-fluid product-img-2">
                                <ul class="product-menu list-unstyled">
                                    <li class="mb-2">
                                        <a href="#!" class="rounded-circle bookmark" data-bs-toggle="button"><i
                                                class="bi bi-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="product-details" class="rounded-circle"><i
                                                class="bi bi-eye"></i></a>
                                    </li>
                                </ul>
                                <div class="product-btn mx-auto">
                                    <a href="shop-cart" class="btn btn-warning w-100"><i
                                            class="bi bi-bag align-baseline me-1"></i> Buy Now</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="product-details">
                                    <h6 class="text-capitalize fs-17 text-truncate">Like Style Women pink Shoulder Bag</h6>
                                </a>
                                <h6 class="fw-normal mb-3">$249.99</h6>
                                <div class="d-flex flex-wrap gap-1">
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Pink" data-bs-original-title="Pink">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-danger opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                    <div data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
                                        aria-label="Blue" data-bs-original-title="Blue">
                                        <button type="button"
                                            class="btn avatar-xs p-0 d-flex align-items-center justify-content-center border rounded-circle fs-20 text-primary opacity-50">
                                            <i class="ri-checkbox-blank-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="text-center mt-4">
                <a href="product-grid-sidebar-banner" type="button" class="btn btn-warning btn-hover">
                    View All Products <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end product-->

    <!--start CTA-->
    <section class="cta-section bg-light" style="background-image: url('build/images/fashion/cta-2.jpeg');">
        <div class="container-fluid container-custom">
            <div class="row align-items-center">
                <div class="col-lg-6 ms-auto text-center">
                    <p class="fs-19 mb-4">Deal of the day</p>
                    <h1 class="display-6 text-capitalize mb-4">New Collection in this <span class="fw-medium">Winter
                            Season</span> Sales</h1>
                    <p id="done"></p>
                    <ul
                        class="countdown d-flex justify-content-center gap-2 flex-wrap gap-lg-5 list-unstyled text-center fs-17">
                        <li><span class="fs-36 fw-medium" id="days">0</span> Days</li>
                        <li><span class="fs-36 fw-medium" id="hours">0</span> Hours</li>
                        <li><span class="fs-36 fw-medium" id="minutes">0</span> Minutes</li>
                        <li><span class="fs-36 fw-medium" id="seconds">0</span> Seconds</li>
                    </ul>
                    <div class="mt-4 pt-3">
                        <button type="button" class="btn btn-light rounded-0 btn-hover">Get 15% Off <i
                                class="bi bi-arrow-right align-baseline ms-1"></i></button>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end CTA-->

    <section class="section">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <h2 class="title fw-normal">Our <span class="fw-semibold">Featured</span> Products</h2>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-md-2 row-cols-1">
                <div class="col product-item">
                    <div class="card card-animate border-warning-subtle shadow overflow-hidden">
                        <div class="card-body">
                            <ul class="list-unstyled position-absolute end-0 top-0 p-3">
                                <li class="mb-2">
                                    <a href="#!" class="btn btn-icon btn-soft-secondary active btn-sm rounded-circle"
                                        data-bs-toggle="button" aria-pressed="true"><i class="bi bi-star"></i></a>
                                </li>
                                <li>
                                    <a href="product-details"
                                        class="btn btn-soft-dark btn-icon btn-sm rounded-circle"><i
                                            class="bi bi-eye align-middle"></i></a>
                                </li>
                            </ul>
                            <img src="{{ URL::asset('build/images/fashion/product/img-02.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body bg-warning-subtle">
                            <h6>$154.67</h6>
                            <h6 class="fs-17 fw-medium mb-0 text-truncate"><a href="product-details"
                                    class="text-warning">Style Women A-Line Dark Blue Dress</a></h6>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col product-item">
                    <div class="card card-animate border-danger-subtle shadow overflow-hidden">
                        <div class="card-body">
                            <ul class="list-unstyled position-absolute end-0 top-0 p-3">
                                <li class="mb-2">
                                    <a href="#!" class="btn btn-icon btn-soft-secondary btn-sm rounded-circle"
                                        data-bs-toggle="button" aria-pressed="true"><i class="bi bi-star"></i></a>
                                </li>
                                <li>
                                    <a href="product-details"
                                        class="btn btn-soft-dark btn-icon btn-sm rounded-circle"><i
                                            class="bi bi-eye align-middle"></i></a>
                                </li>
                            </ul>
                            <img src="{{ URL::asset('build/images/fashion/product/img-05.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body bg-danger-subtle">
                            <h6>$120.32 <small class="text-decoration-line-through fs-14 text-muted">$348.24</small></h6>
                            <h6 class="fs-17 fw-medium mb-0 text-truncate"><a href="product-details"
                                    class="text-danger">Elanhood Full Sleeve Solid Women Jacket</a></h6>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col product-item">
                    <div class="card card-animate border-info-subtle shadow overflow-hidden">
                        <div class="card-body">
                            <ul class="list-unstyled position-absolute end-0 top-0 p-3">
                                <li class="mb-2">
                                    <a href="#!" class="btn btn-icon btn-soft-secondary btn-sm rounded-circle"
                                        data-bs-toggle="button" aria-pressed="true"><i class="bi bi-star"></i></a>
                                </li>
                                <li>
                                    <a href="product-details"
                                        class="btn btn-soft-dark btn-icon btn-sm rounded-circle"><i
                                            class="bi bi-eye align-middle"></i></a>
                                </li>
                            </ul>
                            <img src="{{ URL::asset('build/images/fashion/product/img-14.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body bg-info-subtle">
                            <h6>$59.99 <small class="text-decoration-line-through fs-14 text-muted">$249.99</small></h6>
                            <h6 class="fs-17 fw-medium mb-0 text-truncate"><a href="product-details"
                                    class="text-info">Imported Fabulous Women Top And Bottom Set</a></h6>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col product-item">
                    <div class="card card-animate border-success-subtle shadow overflow-hidden">
                        <div class="card-body">
                            <ul class="list-unstyled position-absolute end-0 top-0 p-3">
                                <li class="mb-2">
                                    <a href="#!" class="btn btn-icon btn-soft-secondary btn-sm rounded-circle"
                                        data-bs-toggle="button" aria-pressed="true"><i class="bi bi-star"></i></a>
                                </li>
                                <li>
                                    <a href="product-details"
                                        class="btn btn-soft-dark btn-icon btn-sm rounded-circle"><i
                                            class="bi bi-eye align-middle"></i></a>
                                </li>
                            </ul>
                            <img src="{{ URL::asset('build/images/fashion/product/img-08.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body bg-success-subtle">
                            <h6>$124.64</h6>
                            <h6 class="fs-17 fw-medium mb-0 text-truncate"><a href="product-details"
                                    class="text-success">Girls Printed Shorts</a></h6>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col product-item">
                    <div class="card card-animate border-dark-subtle shadow overflow-hidden">
                        <div class="card-body">
                            <ul class="list-unstyled position-absolute end-0 top-0 p-3">
                                <li class="mb-2">
                                    <a href="#!" class="btn btn-icon btn-soft-secondary btn-sm active rounded-circle"
                                        data-bs-toggle="button" aria-pressed="true"><i class="bi bi-star"></i></a>
                                </li>
                                <li>
                                    <a href="product-details"
                                        class="btn btn-soft-dark btn-icon btn-sm rounded-circle"><i
                                            class="bi bi-eye align-middle"></i></a>
                                </li>
                            </ul>
                            <img src="{{ URL::asset('build/images/fashion/product/img-11.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="card-body bg-dark-subtle">
                            <h6>$249.99</h6>
                            <h6 class="fs-17 fw-medium mb-0 text-truncate"><a href="product-details"
                                    class="text-body">Stylish Collar Full Sleeve T-shirt</a></h6>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>

    <!--start why Choose-->
    <section class="section py-0">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5 pb-3">
                        <h2 class="title fw-normal"><span>Why <span class="fw-semibold">Shop</span> with us?</h2>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                            </div>
                            <h5>Products Quality</h5>
                            <p class="text-muted mb-0">Product quality refers to how well a product satisfies customer
                                needs, serves its purpose and meets industry standards. </p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <h5>Fast & Free Shipping</h5>
                            <p class="text-muted mb-0">The cheapest way to ship a package will depend on factors such as
                                package size and weight, as well as distance and delivery speed.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                            </div>
                            <h5>Payment Security</h5>
                            <p class="text-muted mb-0">Payment security refers to providing rules, regulations, and
                                security measures to protect a customer or partner's privacy.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-3">
                    <div class="card border-0 text-center">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-light text-reset fs-2 rounded">
                                    <i class="bi bi-house-door"></i>
                                </div>
                            </div>
                            <h5>Global Warehouse</h5>
                            <p class="text-muted mb-0">An international warehouse is a warehouse that's set up
                                internationally, typically located in a global trade Houston, or Hong Kong.</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end why Choose-->

    <!--end newsletter-->
    <section class="section">
        <div class="container-fluid container-custom">
            <div class="card border-0 overflow-hidden">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <img src="{{ URL::asset('build/images/fashion/cta.png') }}" alt=""
                            class="img-fluid h-100 object-fit-cover">
                    </div>
                    <!--end col-->
                    <div class="col-lg-7">
                        <div class="card-body bg-dark h-100 p-xxl-5">
                            <div class="p-4">
                                <p class="text-white opacity-75 text-uppercase fs-15" style="letter-spacing: 2px;">Limited
                                    Offers</p>
                                <h1 class="lh-base text-capitalize text-white mb-3">Subscribe to our newsletter to get
                                    updates to our latest Collection</h1>
                                <p class="text-white-50 mb-4 pb-2">A newsletter introduction should tell the reader what
                                    they'll get out of reading the rest of the email or linked article.</p>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <form action="#!">
                                            <div class="subscribe-input position-relative">
                                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                                    placeholder="Enter your email">
                                                <button type="submit" class="btn btn-primary">Subscribe Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-->
        </div>
        <!--end container-fluid-->
    </section>
    <!--end newsletter-->

    <section class="section pt-0">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <h2 class="fw-normal mb-2"><span>Instagram Shop by <span class="fw-semibold">@toner</span></h2>
                        <p class="text-muted fs-16 mb-0">Shop your favorites styles from Instagram.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row g-3">
                <div class="col-xxl-2 col-lg-3 col-md-6 d-none d-xxl-block">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Women Fashion"
                            data-bs-content="One or two brand names can look classy, but too many can detract from the sophistication you're going for.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('build/images/instgram/img-01.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Unique Fashion"
                            data-bs-content="A capsule collection is essentially a condensed version of a designer's vision">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('build/images/instgram/img-02.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Men'swear"
                            data-bs-content="Yours may consist of traditional pieces, such as tops, bottoms, and outerwear, or focus on a single product">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('build/images/instgram/img-03.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6 d-none d-xxl-block">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Sportwear"
                            data-bs-content="Typical sport-specific garments include tracksuits, shorts, T-shirts and polo shirts.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('build/images/instgram/img-04.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Women Fashion"
                            data-bs-content="One or two brand names can look classy, but too many can detract from the sophistication you're going for.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('build/images/instgram/img-05.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-2 col-lg-3 col-md-6">
                    <div class="position-relative">
                        <a href="#!"
                            class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3"
                            data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Footwear"
                            data-bs-content="Footwear refers to garments worn on the feet, which typically serves the purpose of protection against adversities.">
                            <i class="ph-plus-bold"></i>
                        </a>
                        <img src="{{ URL::asset('build/images/instgram/img-06.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>
@endsection
@section('scripts')
    <!-- Swiper Js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main Dem init js-->
    <script src="{{ URL::asset('build/js/frontend/modern-fashion.init.js') }}"></script>

    <!-- menu init js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
