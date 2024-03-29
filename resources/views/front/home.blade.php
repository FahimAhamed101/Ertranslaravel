@extends('front.layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--start information-->
        <section class="py-3 border-top border-bottom">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
                    <div class="col p-3">
                        <div class="d-flex align-items-center">
                            <div class="fs-1 text-white">	<i class='bx bx-taxi'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">FREE SHIPPING &amp; RETURN</h6>
                                <p class="mb-0">Free shipping on all orders over $49</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="d-flex align-items-center">
                            <div class="fs-1 text-white">	<i class='bx bx-dollar-circle'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">MONEY BACK GUARANTEE</h6>
                                <p class="mb-0">100% money back guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                        <div class="d-flex align-items-center">
                            <div class="fs-1 text-white">	<i class='bx bx-support'></i>
                            </div>
                            <div class="info-box-content ps-3">
                                <h6 class="mb-0">ONLINE SUPPORT 24/7</h6>
                                <p class="mb-0">Awesome Support for 24/7 Days</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end information-->
        <!--start pramotion-->
        <section class="py-4">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col">
                        <div class="card rounded-0">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/promo/01.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Mens' Wear</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="javascript:;" class="btn btn-light btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/promo/02.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Womens' Wear</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="javascript:;" class="btn btn-light btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card rounded-0">
                            <div class="row g-0 align-items-center">
                                <div class="col">
                                    <img src="assets/images/promo/03.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase">Kids' Wear</h5>
                                        <p class="card-text text-uppercase">Starting at $9</p>	<a href="javascript:;" class="btn btn-light btn-ecomm">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end pramotion-->
        <!--start Featured product-->

        @if (count($featuredProducts) > 0)
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0">FEATURED PRODUCTS</h5>
                    <a href="javascript:;" class="btn btn-light ms-auto rounded-0">More Products<i class='bx bx-chevron-right'></i></a>
                </div>
                <hr/>
                <div class="product-grid">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                        @foreach ($featuredProducts as $featuredProduct)
                        <div class="col">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end gap-3">
                                        <a href="javascript:;">
                                            <div class="product-compare"><span><i class='bx bx-git-compare'></i> Compare</span>
                                            </div>
                                        </a>
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @php
                                $productImage = $featuredProduct->Product_Image->first();
                            @endphp
                                <a href="product-details.html">
                                    @if ($productImage != '')
                                    <img src="{{ asset('uploads/product/small/' . $productImage->image) }}" class="card-img-top" alt="...">
                                    @else
                                    <img class="card-img-top" src="{{ asset('admin-assets/img/no-image.png') }}"
                                        alt="">
                                @endif
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price">	<span class="me-1 text-decoration-line-through">$99.00</span>
                                                <span class="text-white fs-5">$49.00</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto">	<i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                                <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>	<a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        @endif
        <!--end Featured product-->
        <!--start New Arrivals-->
        @if (count($latestProducts) > 0)
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0">New Arrivals</h5>
                    <a href="javascript:;" class="btn btn-light ms-auto rounded-0">View All<i class='bx bx-chevron-right'></i></a>
                </div>
                <hr/>


                <div class="product-grid">


                    <div class="new-arrivals owl-carousel owl-theme">  
                        @foreach ($latestProducts as $latestProduct)
                        <div class="item">
                            <div class="card rounded-0 product-card">
                                <div class="card-header bg-transparent border-bottom-0">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <a href="javascript:;">
                                            <div class="product-wishlist"> <i class='bx bx-heart'></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                              
                                @php
                                $productImage = $latestProduct->Product_Image->first();
                            @endphp
                                <a href="{{ route('front.product', $latestProduct->slug) }}">

                                    @if ($productImage != '')
                                    <img class="card-img-top" src="{{ asset('uploads/product/small/' . $productImage->image) }}" alt="">
                                    @else
                                    <img class="card-img-top" src="{{ asset('admin-assets/img/no-image.png') }}"
                                    alt="">
                                    @endif
                                </a>
                                <div class="card-body">
                                    <div class="product-info">
                                        <a href="javascript:;">
                                            <p class="product-catergory font-13 mb-1">Catergory Name</p>
                                        </a>
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">Product Short Name</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price">    @if ($latestProduct->compare_price > 0) <span class="me-1 text-decoration-line-through">${{ $latestProduct->compare_price }}</span>  @endif
                                                <span class="text-white fs-5">${{ $latestProduct->price }}</span>
                                            </div>
                                            <div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-white"></i>
                                            </div>
                                        </div>
                                        <div class="product-action mt-2">
                                            <div class="d-grid gap-2">
                                                <a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm" data-bs-toggle="modal" data-bs-target="#QuickViewProduct"><i class='bx bx-zoom-in'></i>Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                   
                    </div>
                </div>
            </div>
        </section>
        @endif
        <!--end New Arrivals-->
        <!--start Advertise banners-->
        <section class="py-4">
            <div class="container">
                <div class="add-banner">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        <div class="col d-flex">
                            <div class="card rounded-0 w-100">
                                <img src="assets/images/promo/04.png" class="card-img-top" alt="...">
                                <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-10%</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Sunglasses Sale</h5>
                                    <p class="card-text">See all Sunglasses and get 10% off at all Sunglasses</p> <a href="javascript:;" class="btn btn-light btn-ecomm">SHOP BY GLASSES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex">
                            <div class="card rounded-0 w-100">
                                <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-80%</span>
                                </div>
                                <div class="card-body text-center mt-5">
                                    <h5 class="card-title">Cosmetics Sales</h5>
                                    <p class="card-text">Buy Cosmetics products and get 30% off at all Cosmetics</p> <a href="javascript:;" class="btn btn-light btn-ecomm">SHOP BY COSMETICS</a>
                                </div>
                                <img src="assets/images/promo/08.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col d-flex">
                            <div class="card rounded-0 w-100">
                                <img src="assets/images/promo/06.png" class="card-img h-100" alt="...">
                                <div class="card-img-overlay text-center top-20">
                                    <div class="border border-white border-3 py-3 bg-dark-3">
                                        <h5 class="card-title">Fashion Summer Sale</h5>
                                        <p class="card-text text-uppercase fs-1 text-white lh-1 mt-3 mb-2">Up to 80% off</p>
                                        <p class="card-text fs-5">On top Fashion Brands</p>	<a href="javascript:;" class="btn btn-white btn-ecomm">SHOP BY FASHION</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex">
                            <div class="card rounded-0 w-100">
                                <div class="position-absolute top-0 end-0 m-3 product-discount"><span class="">-50%</span>
                                </div>
                                <div class="card-body text-center">
                                    <img src="assets/images/promo/07.png" class="card-img-top" alt="...">
                                    <h5 class="card-title fs-1 text-uppercase">Super Sale</h5>
                                    <p class="card-text text-uppercase fs-4 text-white lh-1 mb-2">Up to 50% off</p>
                                    <p class="card-text">On All Electronic</p> <a href="javascript:;" class="btn btn-light btn-ecomm">HURRY UP!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
        <!--end Advertise banners-->
        <!--start categories-->
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0">Browse Catergory</h5>
                    <a href="shop-categories.html" class="btn btn-light ms-auto rounded-0">View All<i class='bx bx-chevron-right'></i></a>
                </div>
                <hr/>
                @if (count(getCategories()) > 0)
              
                <div class="product-grid">
                    <div class="browse-category owl-carousel owl-theme">
  @foreach (getCategories() as $category)
                        <div class="item">
                            <div class="card rounded-0 product-card border">
                                <div class="card-body">
                                    @if ($category->image != '')
                                    <img src="{{ asset('uploads/category/thumbnail/' . $category->image) }}" class="img-fluid" alt="...">
                                    @else
                                    <img src="{{ asset('admin-assets/img/no-image.png') }}" alt=""
                                        class="img-fluid">
                                @endif
                                </div>
                                <div class="card-footer text-center">
                                    <h6 class="mb-1 text-uppercase">{{ $category->name }}</h6>
                                    <p class="mb-0 font-12 text-uppercase"> Products</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </section>
        <!--end categories-->
        <!--start support info-->
        <section class="py-4 bg-dark-1">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group">
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50 text-white">	<i class='bx bx-cart'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Free delivery</h2>
                            <p class="text-capitalize">Free delivery over $199</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50 text-white">	<i class='bx bx-credit-card'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Secure payment</h2>
                            <p class="text-capitalize">We possess SSL / Secure сertificate</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50 text-white">	<i class='bx bx-dollar-circle'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Free returns</h2>
                            <p class="text-capitalize">We return money within 30 days</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <div class="font-50 text-white">	<i class='bx bx-support'></i>
                            </div>
                            <h2 class="fs-5 text-uppercase mb-0">Customer Support</h2>
                            <p class="text-capitalize">Friendly 24/7 customer support</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end support info-->
        <!--start News-->
        <section class="py-4">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h5 class="text-uppercase mb-0">Latest News</h5>
                    <a href="blog.html" class="btn btn-light ms-auto rounded-0">View All News<i class='bx bx-chevron-right'></i></a>
                </div>
                <hr/>
                <div class="product-grid">
                    <div class="latest-news owl-carousel owl-theme">
                        <div class="item">
                            <div class="card rounded-0 product-card border">
                                <div class="news-date">
                                    <div class="date-number">24</div>
                                    <div class="date-month">FEB</div>
                                </div>
                                <a href="javascript:;">
                                    <img src="assets/images/blogs/01.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="news-title">
                                        <a href="javascript:;">
                                            <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                        </a>
                                    </div>
                                    <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                </div>
                                <div class="card-footer border-top">
                                    <a href="javascript:;">
                                        <p class="mb-0"><small class="text-white">0 Comments</small>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card border">
                                <div class="news-date">
                                    <div class="date-number">24</div>
                                    <div class="date-month">FEB</div>
                                </div>
                                <a href="javascript:;">
                                    <img src="assets/images/blogs/02.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="news-title">
                                        <a href="javascript:;">
                                            <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                        </a>
                                    </div>
                                    <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                </div>
                                <div class="card-footer border-top">
                                    <a href="javascript:;">
                                        <p class="mb-0"><small class="text-white">0 Comments</small>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card border">
                                <div class="news-date">
                                    <div class="date-number">24</div>
                                    <div class="date-month">FEB</div>
                                </div>
                                <a href="javascript:;">
                                    <img src="assets/images/blogs/03.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="news-title">
                                        <a href="javascript:;">
                                            <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                        </a>
                                    </div>
                                    <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                </div>
                                <div class="card-footer border-top">
                                    <a href="javascript:;">
                                        <p class="mb-0"><small class="text-white">0 Comments</small>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card border">
                                <div class="news-date">
                                    <div class="date-number">24</div>
                                    <div class="date-month">FEB</div>
                                </div>
                                <a href="javascript:;">
                                    <img src="assets/images/blogs/04.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="news-title">
                                        <a href="javascript:;">
                                            <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                        </a>
                                    </div>
                                    <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                </div>
                                <div class="card-footer border-top">
                                    <a href="javascript:;">
                                        <p class="mb-0"><small class="text-white">0 Comments</small>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card border">
                                <div class="news-date">
                                    <div class="date-number">24</div>
                                    <div class="date-month">FEB</div>
                                </div>
                                <a href="javascript:;">
                                    <img src="assets/images/blogs/05.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="news-title">
                                        <a href="javascript:;">
                                            <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                        </a>
                                    </div>
                                    <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                </div>
                                <div class="card-footer border-top">
                                    <a href="javascript:;">
                                        <p class="mb-0"><small class="text-white">0 Comments</small>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card rounded-0 product-card border">
                                <div class="news-date">
                                    <div class="date-number">24</div>
                                    <div class="date-month">FEB</div>
                                </div>
                                <a href="javascript:;">
                                    <img src="assets/images/blogs/06.png" class="card-img-top border-bottom bg-dark-1" alt="...">
                                </a>
                                <div class="card-body">
                                    <div class="news-title">
                                        <a href="javascript:;">
                                            <h5 class="mb-3 text-capitalize">Blog Short Title</h5>
                                        </a>
                                    </div>
                                    <p class="news-content mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                                </div>
                                <div class="card-footer border-top">
                                    <a href="javascript:;">
                                        <p class="mb-0"><small class="text-white">0 Comments</small>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end News-->
        <!--start brands-->
        <section class="py-4">
            <div class="container">
                <h3 class="d-none">Brands</h3>
                <div class="brand-grid">
                    <div class="brands-shops owl-carousel owl-theme border">
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="assets/images/brands/01.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="assets/images/brands/02.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="assets/images/brands/03.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="assets/images/brands/04.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="assets/images/brands/05.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="assets/images/brands/06.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                        <div class="item border-end">
                            <div class="p-4">
                                <a href="javascript:;">
                                    <img src="assets/images/brands/07.png" class="img-fluid" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end brands-->
        <!--start bottom products section-->
        <section class="py-4 border-top">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="bestseller-list mb-3">
                            <h6 class="mb-3 text-uppercase">Best Selling Products</h6>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/01.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12">	<i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/02.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12">	<i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/03.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12">	<i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/04.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12">	<i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="featured-list mb-3">
                            <h6 class="mb-3 text-uppercase">Featured Products</h6>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/05.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/06.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/07.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/08.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="new-arrivals-list mb-3">
                            <h6 class="mb-3 text-uppercase">New arrivals</h6>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="jproduct-details.html">
                                        <img src="assets/images/products/09.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/10.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/11.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/12.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="top-rated-products-list mb-3">
                            <h6 class="mb-3 text-uppercase">Top rated Products</h6>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/13.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/14.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/15.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                            <hr/>
                            <div class="d-flex align-items-center">
                                <div class="bottom-product-img">
                                    <a href="product-details.html">
                                        <img src="assets/images/products/16.png" width="100" alt="">
                                    </a>
                                </div>
                                <div class="ms-0">
                                    <h6 class="mb-0 fw-light mb-1">Product Short Name</h6>
                                    <div class="rating font-12"> <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                        <i class="bx bxs-star text-white"></i>
                                    </div>
                                    <p class="mb-0 text-white"><strong>$59.00</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end bottom products section-->
    </div>
</div>
<!--end page wrapper -->
<!--start footer section-->

<!--end footer section-->
<!--start quick view product-->
<!-- Modal -->
<div class="modal fade" id="QuickViewProduct">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xl-down">
        <div class="modal-content bg-dark-4 rounded-0 border-0">
            <div class="modal-body">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                <div class="row g-0">
                    <div class="col-12 col-lg-6">
                        <div class="image-zoom-section">
                            <div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                <div class="item">
                                    <img src="assets/images/product-gallery/01.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/product-gallery/02.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/product-gallery/03.png" class="img-fluid" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/images/product-gallery/04.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                <button class="owl-thumb-item">
                                    <img src="assets/images/product-gallery/01.png" class="" alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="assets/images/product-gallery/02.png" class="" alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="assets/images/product-gallery/03.png" class="" alt="">
                                </button>
                                <button class="owl-thumb-item">
                                    <img src="assets/images/product-gallery/04.png" class="" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="product-info-section p-3">
                            <h3 class="mt-3 mt-lg-0 mb-0">Allen Solly Men's Polo T-Shirt</h3>
                            <div class="product-rating d-flex align-items-center mt-2">
                                <div class="rates cursor-pointer font-13">	<i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-warning"></i>
                                    <i class="bx bxs-star text-light-4"></i>
                                </div>
                                <div class="ms-1">
                                    <p class="mb-0">(24 Ratings)</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3 gap-2">
                                <h5 class="mb-0 text-decoration-line-through text-light-3">$98.00</h5>
                                <h4 class="mb-0">$49.00</h4>
                            </div>
                            <div class="mt-3">
                                <h6>Discription :</h6>
                                <p class="mb-0">Virgil Abloh’s Off-White is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown Odsy-1000 low-top sneakers.</p>
                            </div>
                            <dl class="row mt-3">	<dt class="col-sm-3">Product id</dt>
                                <dd class="col-sm-9">#BHU5879</dd>	<dt class="col-sm-3">Delivery</dt>
                                <dd class="col-sm-9">Russia, USA, and Europe</dd>
                            </dl>
                            <div class="row row-cols-auto align-items-center mt-3">
                                <div class="col">
                                    <label class="form-label">Quantity</label>
                                    <select class="form-select form-select-sm">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Size</label>
                                    <select class="form-select form-select-sm">
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XS</option>
                                        <option>XL</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="form-label">Colors</label>
                                    <div class="color-indigators d-flex align-items-center gap-2">
                                        <div class="color-indigator-item bg-primary"></div>
                                        <div class="color-indigator-item bg-danger"></div>
                                        <div class="color-indigator-item bg-success"></div>
                                        <div class="color-indigator-item bg-warning"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                            <div class="d-flex gap-2 mt-3">
                                <a href="javascript:;" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
<!--end quick view product-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
</div>
<div class="switcher-body">
    <div class="d-flex align-items-center">
        <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
        <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
    </div>
    <hr/>
    <p class="mb-0">Gaussian Texture</p>
    <hr>
    <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
    </ul>
    <hr>
    <p class="mb-0">Gradient Background</p>
    <hr>
    <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
        <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
    </ul>
</div>
</div>
<!--end switcher-->
@endsection