@extends('front.layouts.app')

@section('content')
    <main>
		
		
          
  
        <div class="page-wrapper">
			<div class="page-content">
			
				<!--start product detail-->
				<section class="py-4">
					<div class="container">
						<div class="product-detail-card">
							<div class="product-detail-body">
								<div class="row g-0">
								<input type="hidden" id="product_id" value="{{$product->id}}" />
									<div class="col-12 col-lg-5">
										<div class="image-zoom-section">
											<div class="product-gallery owl-carousel owl-theme border mb-3 p-3" data-slider-id="1">
										
												@if (!empty($product->Product_Image))
                                    @foreach ($product->Product_Image as $key => $productImage)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img class="w-100 h-100"
                                                src="{{ asset('uploads/product/large/' . $productImage->image) }}"
                                                alt="Image">
                                        </div>
                                    @endforeach
                                    {{-- @else --}}
                                    <img class="w-100 h-100" src="{{ asset('admin-assets/img/no-image.png') }}"
                                        alt="Image">
                                @endif
												
											
											</div>
										
										</div>
									</div>
									<div class="col-12 col-lg-7">
										<div class="product-info-section p-3">
										    <h1 class="mt-3 mt-lg-0 mb-0" id="pname">{{ $product->title }}</h1>
											<div class="product-rating d-flex align-items-center mt-2">
												<div class="rates cursor-pointer font-13">	
												@if (count($product->product_rating) > 0)
                                            @foreach ($product->product_rating as $rating)
                                            @php
                                                $rating_per = ($rating->rating*100)/5;
                                            @endphp
                                                <div class="rating-group mb-4">
                                                    <span> <strong>{{ $rating->username }} </strong></span>
                                                    <div class="star-rating mt-2" title="">
                                                        <div class="back-stars">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>

                                                            <div class="front-stars" style="width: {{ $rating_per }}%">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="my-3">
                                                        <p>{{ $rating->comment }}</p>
                                                    </div>
                                            </div>
                                            @endforeach
                                        @endif
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
												<p class="mb-0"> {!! $product->short_description !!}</p>
											</div>
										
											<div class="row row-cols-auto align-items-center mt-3">
												<div class="col">
													<label class="form-label">Quantity</label>
													<select id="qty" name="qty" class="form-select form-select-sm">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</div>
												<div class="col">
													<label class="form-label">Size</label>
													@if ($product->product_size == null)
						@else
							<div class="attr-detail attr-size mb-30">
								<strong class="mr-10" style="width: 50px">Size : </strong>
								<select class="form-control unicase-form-controle"  id="dsize">
									<option selected="" disabled="">--Choose Size--</option>
									@foreach ($product_size as $size)
										<option value="{{ $size }}">{{ ucwords($size) }}</option> {{--ucwords use than ,  --}}
									</div>
									@endforeach
								</select>
							</div>
						@endif
												
												</div>
												<div class="col">
													<label class="form-label">Colors</label>
													@if ($product->product_color == null)
						@else
							<div class="attr-detail attr-size mb-30">
								<strong class="mr-10" style="width: 55px">Color : </strong>
								<select class="form-control unicase-form-controle" id="dcolor">
									<option selected="" disabled="">--Choose Color--</option>
									@foreach ($product_color as $color)
										<option value="{{ $color }}">{{ ucwords($color) }}</option> {{--ucwords use than ,  --}}
									@endforeach
								</select>
							</div>
						@endif
												</div>
											</div>
											<!--end row-->

											<div class="d-flex gap-2 mt-3">
										
												
											 {{-- product out of stock and add to cart --}}
                            @if ($product->qty > 0)
                            <button type="submit"  class="button button-add-to-cart" onclick="addToCart()"><i
                                class="fi-rs-shopping-cart" ></i>Add to cart</button>
                            @else
                                <a class="btn btn-dark" href="javascript:void(0)">
                                    <i class="fa fa-shopping-cart"></i> &nbsp;Out of Stock
                                </a>
                            @endif		

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
		
				<!--end product more info-->
				<!--start similar products-->
		
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
 $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
function addToCart(){
            var product_name = $('#pname').text();
            var id = $('#product_id').val();
            
            var color = $('#dcolor option:selected').text();
            var size = $('#dsize option:selected').text();
            var quantity = $('#qty').val();

            $.ajax({
                type : "POST",
                dataType : 'json',
                data:{
                    product_name:product_name, color:color, size:size, quantity:quantity,
                },
                url: '/add-to-cart/'+id,
                success:function(data){
					window.location.href = "/cart";
                    console.log("done")
                }
            });
        } // End Add to cart


        $('#productRatingForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('fornt.saveRating', $product->id) }}",
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