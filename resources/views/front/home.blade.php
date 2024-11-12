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
                                <a href="{{ route('front.product', $featuredProduct->slug) }}">
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
                                            <h6 class="product-name mb-2">{{ $featuredProduct->title }}</h6>
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <div class="mb-1 product-price">
                                                <span class="text-white fs-5">${{ $featuredProduct->price }}</span>
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
                                                <a href="{{ route('front.product', $featuredProduct->slug) }}" class="btn btn-light btn-ecomm">	<i class='bx bxs-cart-add'></i>Add to Cart</a>
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
         /* <section class="py-4">
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
  =
                                        <a href="javascript:;">
                                            <h6 class="product-name mb-2">{{ $featuredProduct->title }}</h6>
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
                                                <a href="{{ route('front.product', $latestProduct->slug) }}" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> 
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
        </section>*/
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