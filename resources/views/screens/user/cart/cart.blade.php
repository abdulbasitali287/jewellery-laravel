@extends('layouts.app')
@section('content')
    <section class="cart-section">
        <div class="container">
            @if (count(\Cart::session(auth()->id())->getContent()) > 0)
                <div class="row">
                    <div class="col-12">
                        <div class="banner-btm-area">
                            <a class="shop-banner-text" href="#">Home</a>
                            <i class="fa-solid fa-angle-right"></i>
                            <a class="shop-banner-text" href="#">Shop</a>
                            <i class="fa-solid fa-angle-right"></i>
                            <span class="shop-banner-text color">Cart</span>
                        </div>
                        <div class="text-center mt-5 mb-5">
                            <h1 class="shop-banner-title">Cart</h1>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="my-table">
                            <table class="cart-table">
                                <tr>
                                    <th></th>
                                    <th class=""></th>
                                    <th class=""></th>
                                    <th class="">PRODUCT</th>
                                    <th class="">VARIANT</th>
                                    <th class="">PRICE</th>
                                    <th class="">ADDON PRICE</th>
                                    <th class="">INC.VAL</th>
                                    <th class="">QUANTITY</th>
                                    <th class="">SUBTOTAL</th>
                                </tr>

                                {{-- {{ Form::open(['id' => 'updateCart']) }} --}}
                                @foreach ($cartItems as $cart)
                                    {{-- @dd($cart) --}}
                                    <tr class="tableData">
                                        <td>

                                        </td>
                                        <td class="">
                                            {{-- <a class="product-detail-btn"><i class="fa-solid fa-xmark"></i></a> --}}
                                            <a href="{{ url('/remove-to-cart') . '/' . $cart->id }}">clear</a>
                                        </td>
                                        <td class="">
                                            @foreach ($cart->associatedModel->images as $image)
                                                <img class="img-fluid cart-img" src="/{{ $image->image }}" alt="">
                                            @endforeach
                                        </td>
                                        <td class="product-name">{{ $cart->name }}</td>
                                        <td class="product-name">
                                            @foreach ($cart->attributes->variants as $variant)
                                                {{ $loop->iteration . ') ' . $variant }}
                                            @endforeach
                                        </td>
                                        <td class="product-price"> {{ $cart->associatedModel->price }} </td>
                                        {{-- <td class="product-price"> <input id="productPrice" data-incl="{{ $cart->attributes->addonPrice }}" type="value" value="{{ $cart->associatedModel->price }}"> </td> --}}
                                        <td class="product-price" data-incl="{{ $cart->attributes->addonPrice }}">
                                            ${{ $cart->attributes->addonPrice }}</td>
                                        <td class="product-price" data-incl="{{ $cart->price }}">${{ $cart->price }}</td>
                                        <td class="">
                                            <div id="main" class="px-2">
                                                {{-- <button id="decrement" class="minus plus-minus">_</button> --}}
                                                <input type="number" id="displayCounter" name="quantity"
                                                    data-id="{{ $cart->id }}" value="{{ $cart->quantity }}"
                                                    class="overflow-auto border-0 ps-5">
                                                {{-- <button id="increment" class=" plus-minus">+</button> --}}
                                            </div>
                                        </td>
                                        <td class="product-price subPrice"
                                            data-subPrice="{{ $cart->attributes['subTotal'] }}" id="subTotal">
                                            {{ $cart->attributes['subTotal'] * $cart->quantity }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <form class="coupon-form">
                            <div class="d-flex align-items-center">
                                <div class="coupon-input-field">
                                    <input type="text" name="" id="" placeholder="Coupon code">
                                </div>
                                <div class="coupon-btn">
                                    <button>Apply coupon</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sub-total-area">
                            <h2 class="sub-total-title">Cart totals</h2>
                            <div class="sub-total-inner-area">
                                <span class="">Subtotal</span>
                                <span class="finalPrice"></span>
                            </div>
                            {{-- <div class="sub-total-inner-area">
                            <span class="">Subtotal</span>
                            <span class="">$0.00</span>
                        </div> --}}
                            <div class="proc-check-btn">
                                <a href="{{ url('/checkout') . '/' . $cart->id }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="cart-section">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-btm-area">
                            <a class="shop-banner-text" href="#">Home</a>
                            <i class="fa-solid fa-angle-right"></i>
                            <a class="shop-banner-text" href="#">Shop</a>
                            <i class="fa-solid fa-angle-right"></i>
                            <span class="shop-banner-text color">Cart</span>
                        </div>
                        <div class="text-center mt-5 mb-5">
                            <h1 class="shop-banner-title">Cart</h1>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <h3> BNo items in catr</h3>
                    </div>
                </div>
        </div>
    </section>
    {{-- <script src="./assets/js/cart.js"></script> --}}
    <script>
        $(document).ready(function() {
            // final price or sub total function
            const subTotalChange = () => {
                let sum = 0,
                    finalPrice = $('.finalPrice');
                $('.subPrice').each(function() {
                    const subprice = parseInt($(this).text());
                    sum += subprice;
                });
                finalPrice.text(sum);
            }
            subTotalChange();

            $(document).on("change", "input[name='quantity']", function() {
                var pE = $(this).closest(".tableData");
                let quantity = $(this).val();
                let productId = $(this).data("id");
                let subTotal = $('#subTotal').attr('data-subPrice');
                let price = (parseInt(quantity) * subTotal);
                let finalPrice = $('.finalPrice');
                $.ajax({
                    type: "get",
                    url: "{{ route('update.cart') }}",
                    data: {
                        productId: productId,
                        quantity: quantity,
                        subTotal: subTotal,
                    },
                    success: function(response) {
                        pE.find("#subTotal").text((response.price));
                        subTotalChange();
                    }
                });
            });

            // $(document).on('submit', '#updateCart' , function (e) {
            //     e.preventDefault();
            //     let formDt = $(this).serialize();
            //   {{-- let product = {{ Js::from($product->id) }}; --}}
            //     $.ajax({
            //         type: "GET",
            //         url: "{{ route('update.cart', '') }}/" + product,
            //         data: formDt,
            //         success: function (response) {
            //             // console.log(response.success)
            //             console.log(response.cartData);
            //         }
            //     });
            // });

            // $(document).on('click', '#decrement' , function (e) {
            //     // let inputValue = $(this).next().parseInt(val());
            //     let formSubmit = $('#updateCart').submit();
            //     formSubmit.preventDefault();
            //     let formDt = formSubmit.serialize();
            //   {{--  let product = {{ Js::from($product->id) }}; --}}
            //     // if (parseInt(inputValue.val()) > 1) {
            //     //     let newDecVal = inputValue.val() - 1;
            //     //     inputValue.val(newDecVal);
            //     //     let subTotal = parseInt($('#subTotal').val());
            //     //     let finalSubTotal = subTotal
            //     // }
            // });

            $(document).on('click', '#increment', function(e) {
                let inputValue = $(this).prev();
                if (inputValue.val() != 0) {
                    let newDecVal = parseInt(inputValue.val()) + 1;
                    inputValue.val(newDecVal);
                }
            });
        });
    </script>
@endsection
