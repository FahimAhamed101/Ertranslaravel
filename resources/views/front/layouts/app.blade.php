<!DOCTYPE html>
<html class="no-js" lang="en_AU" />

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset(  'assets/images/favicon-32x32.png')}}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset( 'assets/plugins/OwlCarousel/css/owl.carousel.min.css')}}" rel="stylesheet" />
	<link href="{{ asset( 'assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{ asset(  'assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{ asset(  'assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset(  'assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{ asset(  'assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset(  'assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset(  'assets/css/app.css')}}" rel="stylesheet">
	<link href="{{ asset(  'assets/css/icons.css')}}" rel="stylesheet">
	<title>eTrans - eCommerce HTML Template</title> <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
   



<body class="bg-theme bg-theme1">
	<b class="screen-overlay"></b>
	<!--wrapper-->
	<div class="wrapper">
		<div class="discount-alert bg-dark-1 d-none d-lg-block">
			<div class="alert alert-dismissible fade show shadow-none rounded-0 mb-0 border-bottom">
				<div class="d-lg-flex align-items-center gap-2 justify-content-center">
					<p class="mb-0 text-white">Get Up to <strong>40% OFF</strong> New-Season Styles</p>	<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Men</a>
					<a href="javascript:;" class="bg-dark text-white px-1 font-13 cursor-pointer">Women</a>
					<p class="mb-0 font-13 text-light-3">*Limited time only</p>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
		<!--start top header wrapper-->
		<div class="header-wrapper bg-dark-1">
			<div class="top-menu border-bottom">
				<div class="container">
					<nav class="navbar navbar-expand">
						<div class="shiping-title text-uppercase font-13 text-white d-none d-sm-flex">Welcome to our eTrans store!</div>
				
						<ul class="navbar-nav">
							<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">USD</a>
								<ul class="dropdown-menu dropdown-menu-lg-end">
									<li><a class="dropdown-item" href="#">USD</a>
									</li>
									<li><a class="dropdown-item" href="#">EUR</a>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
									<div class="lang d-flex gap-1">
										<div><i class="flag-icon flag-icon-um"></i>
										</div>
										<div><span>ENG</span>
										</div>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-lg-end">
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"> <i class="flag-icon flag-icon-de me-2"></i><span>German</span>
									</a>	<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-fr me-2"></i><span>French</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-um me-2"></i><span>English</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-in me-2"></i><span>Hindi</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
								class="flag-icon flag-icon-cn me-2"></i><span>Chinese</span></a>
									<a class="dropdown-item d-flex allign-items-center" href="javascript:;"><i
						        class="flag-icon flag-icon-ae me-2"></i><span>Arabic</span></a>
								</div>
							</li>
						</ul>
						<ul class="navbar-nav social-link ms-lg-2 ms-auto">
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-facebook'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-twitter'></i></a>
							</li>
							<li class="nav-item"> <a class="nav-link" href="javascript:;"><i class='bx bxl-linkedin'></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="header-content pb-3 pb-md-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col col-md-auto">
							<div class="d-flex align-items-center">
								<div class="mobile-toggle-menu d-lg-none px-lg-2" data-trigger="#navbar_main"><i class='bx bx-menu'></i>
								</div>
								<div class="logo d-none d-lg-flex">
									<a href="index-2.html">
										<img src="assets/images/logo-icon.png" class="logo-icon" alt="" />
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md order-4 order-md-2">
							<div class="input-group flex-nowrap px-xl-4">
								<input type="text" class="form-control w-100" placeholder="Search for Products">
								<span class="input-group-text cursor-pointer"><i class='bx bx-search'></i></span>
							</div>
						</div>
						<div class="col col-md-auto order-3 d-none d-xl-flex align-items-center">
							<div class="fs-1 text-white"><i class='bx bx-headphone'></i>
							</div>
							<div class="ms-2">
								<p class="mb-0 font-13">CALL US NOW</p>
								<h5 class="mb-0">+011 5827918</h5>
							</div>
						</div>
					
						<div class="col col-md-auto order-2 order-md-4">
							<div class="top-cart-icons">
								<nav class="navbar navbar-expand">
									<ul class="navbar-nav ms-auto">
									
										@if (Auth::user())
										<li class="nav-item"><a href="{{ route('account.profile') }}" class="nav-link "><i class='bx bx-user'></i>Dashboard</a>
										</li>
										<li class="nav-item"><a href="{{ route('account.logout') }}" class="nav-link ">Logout</a>
										</li>
									@else
									<ul class="navbar-nav">
							<li class="nav-item">	<a href="{{ route('account.login') }}" class="nav-link ">Login </a>
							</li>
					
							<li class="nav-item">		<a href="{{ route('account.register') }}" class="nav-link ">Register</a>
							</li>
							
						
						</ul>
									
									
									@endif
									
										<li class="nav-item">
											<a href="{{ route('front.cart') }}" class=" pt-2 e cart-link" >
												<i class='bx bx-shopping-bag'></i>
											</a>
									
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
			<div class="primary-menu border-top">
				<div class="container">
					<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg">
						<div class="offcanvas-header">
							<button class="btn-close float-end"></button>
							<h5 class="py-2 text-white">Navigation</h5>
						</div>
						<ul class="navbar-nav">
							<li class="nav-item active"> <a class="nav-link" href="/">Home </a> 
							</li>
					
					
							
						
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!--end top header wrapper-->
		<!--start slider section-->


		<section class="slider-section">
			<div class="first-slider">
				<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
					<ol class="carousel-indicators">
						<li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
						<li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
						<li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						@php
    $banner = App\Models\Banner::orderBy('banner_title','ASC')->limit(3)->get();
@endphp


					
@foreach ($banner as $banner)
						<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
							<div class="row d-flex align-items-center">
								<div class="col d-none d-lg-flex justify-content-center">
									<div class="">
										<h3 class="h3 fw-light">  {{ $banner->banner_title }}</h3>
									<!--start slider section	<h1 class="h1">Women Sportswear Sale</h1>
										<p class="pb-3">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p>-->
										<div class=""> <a class="btn btn-white btn-ecomm" href="{{ $banner->banner_url }}">Shop Now <i class='bx bx-chevron-right'></i></a>
										</div>
									</div>
								</div>
								<div class="col">
									<img src="{{ asset($banner->banner_image) }}" class="img-fluid" alt="...">
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</a>
				</div>
			</div>
		</section>

    <main>
        @yield('content')
    </main>

    <footer>
        <section class="py-4 bg-dark-1">
            <div class="container">
        
                <!--end         <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                    <div class="col">
                        <div class="footer-section1 mb-3">
                            <h6 class="mb-3 text-uppercase">Contact Info</h6>
                            <div class="address mb-3">
                                <p class="mb-0 text-uppercase text-white">Address</p>
                                <p class="mb-0 font-12">123 Street Name, City, Australia</p>
                            </div>
                            <div class="phone mb-3">
                                <p class="mb-0 text-uppercase text-white">Phone</p>
                                <p class="mb-0 font-13">Toll Free (123) 472-796</p>
                                <p class="mb-0 font-13">Mobile : +91-9910XXXX</p>
                            </div>
                            <div class="email mb-3">
                                <p class="mb-0 text-uppercase text-white">Email</p>
                                <p class="mb-0 font-13">mail@example.com</p>
                            </div>
                            <div class="working-days mb-3">
                                <p class="mb-0 text-uppercase text-white">WORKING DAYS</p>
                                <p class="mb-0 font-13">Mon - FRI / 9:30 AM - 6:30 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-section2 mb-3">
                            <h6 class="mb-3 text-uppercase">Shop Categories</h6>
                            <ul class="list-unstyled">
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Jeans</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> T-Shirts</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sports</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Shirts & Tops</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Clogs & Mules</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sunglasses</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Bags & Wallets</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Sneakers & Athletic</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Electronis</a>
                                </li>
                                <li class="mb-1"><a href="javascript:;"><i class='bx bx-chevron-right'></i> Furniture</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-section3 mb-3">
                            <h6 class="mb-3 text-uppercase">Popular Tags</h6>
                            <div class="tags-box"> <a href="javascript:;" class="tag-link">Cloths</a>
                                <a href="javascript:;" class="tag-link">Electronis</a>
                                <a href="javascript:;" class="tag-link">Furniture</a>
                                <a href="javascript:;" class="tag-link">Sports</a>
                                <a href="javascript:;" class="tag-link">Men Wear</a>
                                <a href="javascript:;" class="tag-link">Women Wear</a>
                                <a href="javascript:;" class="tag-link">Laptops</a>
                                <a href="javascript:;" class="tag-link">Formal Shirts</a>
                                <a href="javascript:;" class="tag-link">Topwear</a>
                                <a href="javascript:;" class="tag-link">Headphones</a>
                                <a href="javascript:;" class="tag-link">Bottom Wear</a>
                                <a href="javascript:;" class="tag-link">Bags</a>
                                <a href="javascript:;" class="tag-link">Sofa</a>
                                <a href="javascript:;" class="tag-link">Shoes</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-section4 mb-3">
                            <h6 class="mb-3 text-uppercase">Stay informed</h6>
                            <div class="subscribe">
                                <input type="text" class="form-control radius-30" placeholder="Enter Your Email" />
                                <div class="mt-2 d-grid">	<a href="javascript:;" class="btn btn-white btn-ecomm radius-30">Subscribe</a>
                                </div>
                                <p class="mt-2 mb-0 font-13">Subscribe to our newsletter to receive early discount offers, updates and new products info.</p>
                            </div>
                            <div class="download-app mt-3">
                                <h6 class="mb-3 text-uppercase">Download our app</h6>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:;">
                                        <img src="assets/images/icons/apple-store.png" class="" width="160" alt="" />
                                    </a>
                                    <a href="javascript:;">
                                        <img src="assets/images/icons/play-store.png" class="" width="160" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>row-->
                <hr/>
                <div class="row row-cols-1 row-cols-md-2 align-items-center">
                    <div class="col">
                        <p class="mb-0">Copyright © 2021. All right reserved.</p>
                    </div>
                    <div class="col text-end">
                        <div class="payment-icon">
                            <div class="row row-cols-auto g-2 justify-content-end">
                                <div class="col">
                                    <img src="assets/images/icons/visa.png" alt="" />
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/paypal.png" alt="" />
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/mastercard.png" alt="" />
                                </div>
                                <div class="col">
                                    <img src="assets/images/icons/american-express.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
    </footer>

    <!--WishList Modal -->
    <div class="modal fade" id="wishlistModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </div>

  	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset( 'assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{ asset( 'assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset( 'assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{ asset( 'assets/plugins/OwlCarousel/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset( 'assets/plugins/OwlCarousel/js/owl.carousel2.thumbs.min.js')}}"></script>
	<script src="{{ asset( 'assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{ asset( 'assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<!--app JS-->
	<script src="{{ asset( 'assets/js/app.js')}}"></script>
	<script src="{{ asset( 'assets/js/index.js')}}"></script>
    <script>
       

        // ajax token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

		


        //code for Add to Wishlist
        function addToWishList(id){
            $.ajax({
                url: "{{ route('fornt.addToWishList') }}",
                type: "post",
                data: {id:id},
                dataType: "json",
                success: function (response) {
                    if (response.status == true) {
                        $("#wishlistModal .modal-body").html(response.message);
                        $("#wishlistModal").modal('show');
                    } else {
                        window.location.href="{{ route('account.login') }}";
                    }
                }
            });
        }

    </script>
    @yield('customJs')
</body>

</html>