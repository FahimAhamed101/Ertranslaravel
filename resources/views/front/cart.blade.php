@extends('front.layouts.app')

@section('content')
  
	<div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">Shop Cart</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop cart-->
            <section class="py-4">
                <div class="container">
                    <div class="shop-cart">
                        <div class="row">
                            @if (Cart::count() > 0)
                            <div class="col-12 col-xl-8"> 
                                <div class="shop-cart-list mb-3 p-3">
                                   @foreach ($cartContent as $item)
                                    <div class="row align-items-center g-3">
                                        <div class="col-12 col-lg-6">
                                            <div class="d-lg-flex align-items-center gap-2">
                                              
                                                <div class="cart-img text-center text-lg-start">
                                        @if (!empty($item->options->productImage->image))
                                                    <img src="{{ asset('uploads/product/large/' . $item->options->productImage->image) }}" width="130" alt="">
                                                    @else
                                                    <img src="{{ asset('admin-assets/img/no-image.png') }}"
                                                        width="50px" height="50px">
                                                @endif
                                                </div>
                                                <div class="cart-detail text-center text-lg-start">
                                                    <h6 class="mb-2">{{ $item->name }}</h6>
                                                    <h5 class="mb-0">$    {{ $item->price }}</h5>
                                                    <p class="mb-0">Size: <span>{{$item->options->productImage->image}}</span>
                                                    </p>
                                                    <p class="mb-2">Color: <span>White & Blue</span>
                                                    </p>
                                                   total: <h5 class="mb-0">$    {{ $item->price * $item->qty }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-sm btn-danger"
                                        onclick="deleteItem('{{ $item->rowId }}')"><i
                                            class="fa fa-times"></i></button>
                                        <div class="col-12 col-lg-3">
                                           
                                            <div class="cart-action    text-center">
                                                <td>
                                                    <div class="input-group quantity mx-auto d-flex justify-content-center" style="">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-sm btn-transparent btn-minus p-2 pt-1 pb-1  sub"
                                                                data-id="{{ $item->rowId }}">
                                                                <i class="text-white  bx bx-minus"></i>
                                                            </button>
                                                        </div>
                                                        <input type="text"
                                                            class="form-control form-control-sm  border-0 text-center"
                                                            value="{{ $item->qty }}">
                                                        <div class="input-group-btn">
                                                            <button  class="btn-transparent btn btn-sm  btn-plus p-2 pt-1 pb-1 add"
                                                                data-id="{{ $item->rowId }}">
                                                                <i class="text-white   bx bx-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <div class="text-center">
                                                <div class="d-flex gap-2 justify-content-center justify-content-lg-end"> <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-x-circle'></i> Remove</a>
                                                    <a href="javascript:;" class="btn btn-light rounded-0 btn-ecomm"><i class='bx bx-heart me-0'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach
                                    <div class="my-4 border-top"></div>
                                    <div class="d-lg-flex align-items-center gap-2">	<a href="javascript:;" class="btn btn-light btn-ecomm"><i class='bx bx-shopping-bag'></i> Continue Shoping</a>
                                        <a href="javascript:;" class="btn btn-light btn-ecomm ms-auto"><i class='bx bx-x-circle'></i> Clear Cart</a>
                                        <a href="javascript:;" class="btn btn-white btn-ecomm"><i class='bx bx-refresh'></i> Update Cart</a>
                                    </div> 
                                    
                                </div>
                            </div>
                            @else
                            empty cart
                            @endif
                            <div class="col-12 col-xl-4">
                                <div class="checkout-form p-3 bg-dark-1">
                                    <div class="card rounded-0 border bg-transparent shadow-none">
                                        <div class="card-body">
                                            <p class="fs-5 text-white">Apply Discount Code</p>
                                            <div class="input-group">
                                                <input type="text" class="form-control rounded-0" placeholder="Enter discount code">
                                                <button class="btn btn-light btn-ecomm" type="button">Apply Discount</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 border bg-transparent shadow-none">
                                        <div class="card-body">
                                            <p class="fs-5 text-white">Estimate Shipping and Tax</p>
                                            <div class="my-3 border-top"></div>
                                            <div class="mb-3">
                                                <label class="form-label">Country Name</label>
                                                <select class="form-select rounded-0">
                                                    <option selected>United States</option>
                                                    <option value="1">Australia</option>
                                                    <option value="2">India</option>
                                                    <option value="3">Canada</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">State/Province</label>
                                                <select class="form-select rounded-0">
                                                    <option selected>California</option>
                                                    <option value="1">Texas</option>
                                                    <option value="2">Canada</option>
                                                </select>
                                            </div>
                                            <div class="mb-0">
                                                <label class="form-label">Zip/Postal Code</label>
                                                <input type="email" class="form-control rounded-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card rounded-0 border bg-transparent mb-0 shadow-none">

                                        <div class="card-body">

                                            <p class="mb-2">Subtotal: <span class="float-end">${{ Cart::subtotal() }}</span>
                                            </p>
                                            <p class="mb-2">Shipping: <span class="float-end">--</span>
                                            </p>
                                            <p class="mb-2">Taxes: <span class="float-end">$0.00</span>
                                            </p>
                                            <p class="mb-0">Discount: <span class="float-end">--</span>
                                            </p>
                                            <div class="my-3 border-top"></div>
                                            <h5 class="mb-0">Order Total: <span class="float-end">{{ Cart::subtotal() }}</span></h5>
                                            <div class="my-4"></div>
                                            <div class="d-grid"> <a href="{{ route('fornt.checkout') }}" class="btn btn-white btn-ecomm">Proceed to Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </section>
            <!--end shop cart-->
        </div>
    </div>
 
@endsection

@section('customJs')
    <script>
        $('.add').click(function() {
            var qtyElement = $(this).parent().prev(); // Qty Input
            var qtyValue = parseInt(qtyElement.val());
            if (qtyValue < 5) {
                qtyElement.val(qtyValue + 1);

                var rowId = $(this).data('id');
                var newQty = qtyElement.val();
                updateCart(rowId, newQty)
            }
        });

        $('.sub').click(function() {
            var qtyElement = $(this).parent().next();
            var qtyValue = parseInt(qtyElement.val());
            if (qtyValue > 1) {
                qtyElement.val(qtyValue - 1);

                var rowId = $(this).data('id');
                var newQty = qtyElement.val();
                updateCart(rowId, newQty)
            }
        });

        function updateCart(rowId, qty) {
            $.ajax({
                url: "{{ route('front.updateCart') }}",
                type: "post",
                data: {
                    rowId: rowId,
                    qty: qty
                },
                dataType: "json",
                success: function(response) {
                    window.location.href = "{{ route('front.cart') }}"

                }
            });
        }

        //delete product form cart
        function deleteItem(rowId) {
            if (confirm("Are You Sure You Want to Delete?")) {
                $.ajax({
                    url: "{{ route('front.deleteProduct.cart') }}",
                    type: "post",
                    data: {
                        rowId: rowId
                    },
                    dataType: "json",
                    success: function(response) {
                        window.location.href = "{{ route('front.cart') }}"
                    }
                });
            }

        }
    </script>
@endsection