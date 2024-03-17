@extends('front.layouts.app')

@section('content')
    <main>
    	<div class="page-wrapper">
			<div class="page-content">
				<!--start breadcrumb-->
				<section class="py-3 border-bottom d-none d-md-flex">
					<div class="container">
						<div class="page-breadcrumb d-flex align-items-center">
							<h3 class="breadcrumb-title pe-3">{{ $product->title }}</h3>
							<div class="ms-auto">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb mb-0 p-0">
										<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:;">Shop</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">Product Details</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</section>
				<!--end breadcrumb-->
				<!--start product detail-->
				<section class="py-4">
					<div class="container">
						<div class="product-detail-card">
							<div class="product-detail-body">
								<div class="row g-0">
									<div class="col-12 col-lg-5">
										<div class="image-zoom-section">
											<div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
                                                @if (!empty($product->Product_Image))  
                                                @foreach ($product->Product_Image as $key => $productImage)
												<div class="item">
                                                  
													<img src="{{ asset('uploads/product/large/' . $productImage->image) }}" class="img-fluid" alt="">
                                                   
												</div> 
                                                @endforeach
                                                @endif
											</div>
											<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
                                                @if (!empty($product->Product_Image))  
                                                @foreach ($product->Product_Image as $key => $productImage)
												<button class="owl-thumb-item">
													<img src="{{ asset('uploads/product/large/' . $productImage->image) }}"" class="" alt="">
												</button>
                                                @endforeach
                                                @endif
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-7">
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
                                                @if ($product->compare_price > 0)
                                               <h5 class="mb-0 text-decoration-line-through text-light-3">${{ $product->compare_price }}</h5>
                                            @endif
												
												<h4 class="mb-0">${{ $product->price }}</h4>
											</div>
											<div class="mt-3">
												<h6>Discription :</h6>
												<p class="mb-0">  {!! $product->short_description !!}</p>
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
                                                @if ($product->qty > 0)
                                               
                                                    <a href="javascript:void(0)"  onclick="addToCart({{ $product->id }});" class="btn btn-white btn-ecomm">	<i class="bx bxs-cart-add"></i>Add to Cart</a>
                                            
                                            @else
                                                <a class="btn btn-dark" href="javascript:void(0)">
                                                    <i class="fa fa-shopping-cart"></i> &nbsp;Out of Stock
                                                </a>
                                            @endif
												 <a href="javascript:;" class="btn btn-light btn-ecomm"><i class="bx bx-heart"></i>Add to Wishlist</a>
											</div>
											<hr/>
											<div class="product-sharing">
												<ul class="list-inline">
													<li class="list-inline-item"> <a href="javascript:;"><i class='bx bxl-facebook'></i></a>
													</li>
													<li class="list-inline-item">	<a href="javascript:;"><i class='bx bxl-linkedin'></i></a>
													</li>
													<li class="list-inline-item">	<a href="javascript:;"><i class='bx bxl-twitter'></i></a>
													</li>
													<li class="list-inline-item">	<a href="javascript:;"><i class='bx bxl-instagram'></i></a>
													</li>
													<li class="list-inline-item">	<a href="javascript:;"><i class='bx bxl-google'></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--end row-->
							</div>
						</div>
					</div>
				</section>
				<!--end product detail-->
				<!--start product more info-->
				<section class="py-4">
					<div class="container">
						<div class="product-more-info">
							<ul class="nav nav-tabs mb-0" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" data-bs-toggle="tab" href="#discription" role="tab" aria-selected="true">
										<div class="d-flex align-items-center">
											<div class="tab-title text-uppercase fw-500">Description</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#more-info" role="tab" aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-title text-uppercase fw-500">More Info</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#tags" role="tab" aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-title text-uppercase fw-500">Tags</div>
										</div>
									</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab" aria-selected="false">
										<div class="d-flex align-items-center">
											<div class="tab-title text-uppercase fw-500">(3) Reviews</div>
										</div>
									</a>
								</li>
							</ul>
							<div class="tab-content pt-3">
								<div class="tab-pane fade show active" id="discription" role="tabpanel">
									<p>   {!! $product->description !!}</p>
								
									
								</div>
								<div class="tab-pane fade" id="more-info" role="tabpanel">
									<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
								</div>
								<div class="tab-pane fade" id="tags" role="tabpanel">
									<div class="tags-box w-50">	<a href="javascript:;" class="tag-link">Cloths</a>
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
								<div class="tab-pane fade" id="reviews" role="tabpanel">
									<div class="row">
										<div class="col col-lg-8">
											<div class="product-review">
												<h5 class="mb-4">3 Reviews For The Product</h5>
												<div class="review-list">
													<div class="d-flex align-items-start">
														<div class="review-user">
															<img src="assets/images/avatars/avatar-1.png" width="65" height="65" class="rounded-circle" alt="" />
														</div>
														<div class="review-content ms-3">
															<div class="rates cursor-pointer fs-6">	<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-light-4"></i>
															</div>
															<div class="d-flex align-items-center mb-2">
																<h6 class="mb-0">James Caviness</h6>
																<p class="mb-0 ms-auto">February 16, 2021</p>
															</div>
															<p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan</p>
														</div>
													</div>
													<hr/>
													<div class="d-flex align-items-start">
														<div class="review-user">
															<img src="assets/images/avatars/avatar-2.png" width="65" height="65" class="rounded-circle" alt="" />
														</div>
														<div class="review-content ms-3">
															<div class="rates cursor-pointer fs-6"> <i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-light-4"></i>
															</div>
															<div class="d-flex align-items-center mb-2">
																<h6 class="mb-0">David Buckley</h6>
																<p class="mb-0 ms-auto">February 22, 2021</p>
															</div>
															<p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan</p>
														</div>
													</div>
													<hr/>
													<div class="d-flex align-items-start">
														<div class="review-user">
															<img src="assets/images/avatars/avatar-3.png" width="65" height="65" class="rounded-circle" alt="" />
														</div>
														<div class="review-content ms-3">
															<div class="rates cursor-pointer fs-6">	<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-white"></i>
																<i class="bx bxs-star text-light-4"></i>
															</div>
															<div class="d-flex align-items-center mb-2">
																<h6 class="mb-0">Peter Costanzo</h6>
																<p class="mb-0 ms-auto">February 26, 2021</p>
															</div>
															<p>Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col col-lg-4">
											<div class="add-review bg-dark-1">
												<div class="form-body p-3">
													<h4 class="mb-4">Write a Review</h4>
													<div class="mb-3">
														<label class="form-label">Your Name</label>
														<input type="text" class="form-control rounded-0">
													</div>
													<div class="mb-3">
														<label class="form-label">Your Email</label>
														<input type="text" class="form-control rounded-0">
													</div>
													<div class="mb-3">
														<label class="form-label">Rating</label>
														<select class="form-select rounded-0">
															<option selected>Choose Rating</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="3">4</option>
															<option value="3">5</option>
														</select>
													</div>
													<div class="mb-3">
														<label class="form-label">Example textarea</label>
														<textarea class="form-control rounded-0" rows="3"></textarea>
													</div>
													<div class="d-grid">
														<button type="button" class="btn btn-light btn-ecomm">Submit a Review</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end row-->
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--end product more info-->
				<!--start similar products-->
				<section class="py-4">
					<div class="container">
						<div class="d-flex align-items-center">
							<h5 class="text-uppercase mb-0">Similar Products</h5>
							<div class="d-flex align-items-center gap-0 ms-auto">	<a href="javascript:;" class="owl_prev_item fs-2"><i class='bx bx-chevron-left'></i></a>
								<a href="javascript:;" class="owl_next_item fs-2"><i class='bx bx-chevron-right'></i></a>
							</div>
						</div>
						<hr/>
						<div class="product-grid">
							<div class="similar-products owl-carousel owl-theme">
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
										<img src="assets/images/similar-products/01.png" class="card-img-top" alt="...">
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-white"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
										<img src="assets/images/similar-products/02.png" class="card-img-top" alt="...">
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-white"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
										<img src="assets/images/similar-products/03.png" class="card-img-top" alt="...">
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<span>4.9</span>  <i class="bx bxs-star text-white"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
										<img src="assets/images/similar-products/04.png" class="card-img-top" alt="...">
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-white"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
										<img src="assets/images/similar-products/05.png" class="card-img-top" alt="...">
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<span>3.9</span>  <i class="bx bxs-star text-white"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
										<img src="assets/images/similar-products/06.png" class="card-img-top" alt="...">
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-white"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
										<img src="assets/images/similar-products/07.png" class="card-img-top" alt="...">
										<div class="card-body">
											<div class="product-info">
												<a href="javascript:;">
													<p class="product-catergory font-13 mb-1">Catergory Name</p>
												</a>
												<a href="javascript:;">
													<h6 class="product-name mb-2">Product Short Name</h6>
												</a>
												<div class="d-flex align-items-center">
													<div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">$99.00</span>
														<span class="text-white fs-5">$49.00</span>
													</div>
													<div class="cursor-pointer ms-auto">	<span>5.0</span>  <i class="bx bxs-star text-white"></i>
													</div>
												</div>
												<div class="product-action mt-2">
													<div class="d-grid gap-2">
														<a href="javascript:;" class="btn btn-light btn-ecomm"> <i class='bx bxs-cart-add'></i>Add to Cart</a> <a href="javascript:;" class="btn btn-link btn-ecomm"><i class='bx bx-zoom-in'></i>Quick View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--end similar products-->
			</div>
		</div>

        @if (!empty($relatedProducts))
            <section class="pt-5 section-8">
                <div class="container">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                    <div class="col-md-12">
                        <div id="related-products" class="carousel">

                            @foreach ($relatedProducts as $relatedProduct)
                                @php
                                    $productImage = $relatedProduct->product_image->first();
                                @endphp
                                <div class="card product-card">
                                    <div class="product-image position-relative">
                                        <a href="{{ route('front.product', $relatedProduct->slug) }}"
                                            class="product-img">
                                            @if (!empty($productImage->image))
                                                <img class="card-img-top"
                                                    src="{{ asset('uploads/product/small/' . $productImage->image) }}"
                                                    alt="">
                                            @else
                                                <img class="card-img-top"
                                                    src="{{ asset('admin-assets/img/no-image.png') }}" alt="">
                                            @endif
                                        </a>

                                        <a class="whishlist" href="222"><i class="far fa-heart"></i></a>

                                        <div class="product-action">
                                            {{-- product out of stock and add to cart --}}
                                            @if ($relatedProduct->qty > 0)
                                                <a class="btn btn-dark" href="javascript:void(0)"
                                                    onclick="addToCart({{ $relatedProduct->id }});">
                                                    <i class="fa fa-shopping-cart"></i> &nbsp;Add To Cart
                                                </a>
                                            @else
                                                <a class="btn btn-dark" href="javascript:void(0)">
                                                    <i class="fa fa-shopping-cart"></i> &nbsp;Out of Stock
                                                </a>
                                            @endif
                                            {{-- <a class="btn btn-dark" href="javascript:void(0)"
                                                onclick="addToCart({{ $relatedProduct->id }});">
                                                <i class="fa fa-shopping-cart"></i> Add To Cart
                                            </a> --}}
                                        </div>
                                    </div>
                                    <div class="card-body text-center mt-3">
                                        <a class="h6 link"
                                            href="{{ route('front.product', $relatedProduct->slug) }}">{{ $relatedProduct->title }}</a>
                                        <div class="price mt-2">
                                            <span class="h5"><strong>{{ $relatedProduct->price }}</strong></span>
                                            @if ($relatedProduct->compare_price)
                                                <span
                                                    class="h6 text-underline"><del>{{ $relatedProduct->compare_price }}</del></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection

@section('customJs')
    <script>
        $('#productRatingForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "",
                type: "post",
                data: $(this).serializeArray(),
                dataType: "json",
                success: function(response) {

                    let errors = response.errors;

                    if (response.status == false) {
                        // console.log(errors);
                        if (errors.name) {
                            $("#name").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.name);
                        } else{
                            $("#name").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html('');
                        }

                        if (errors.email) {
                            $("#email").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.email);
                        } else{
                            $("#email").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html('');
                        }

                        if (errors.comment) {
                            $("#comment").addClass("is-invalid").siblings("p").addClass("invalid-feedback").html(errors.comment);
                        } else{
                            $("#comment").removeClass("is-invalid").siblings("p").removeClass("invalid-feedback").html('');
                        }

                        if (errors.rating) {
                            $(".product-rating-error").html(errors.rating);
                        } else{
                            $(".product-rating-error").html('');
                        }

                    } else {
                        window.location.href="{{ route('front.product', $product->slug) }}";
                    }
                }
            });
        });
    </script>
@endsection