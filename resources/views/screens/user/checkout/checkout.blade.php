@extends('layouts.app')
@section('content')
<section class="checkout-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12">
                    <div class="banner-btm-area">
                        <a class="shop-banner-text" href="#">Home</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="shop-banner-text" href="#">Shop</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <span class="shop-banner-text color">checkout</span>
                    </div>
                    <div class="text-center mt-5 mb-5">
                        <h1 class="shop-banner-title">Checkout</h1>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="checkout-top-bar">
                    <i class="fa-solid fa-tag"></i>
                    <p class="checkout-top-para">Have a coupon? <span class="coupon-popup">Click here to enter your code</span></p>
                </div>
            </div>
            <div class="col-12">
                <form class="chk-coupn-form">
                    <div class="chk-coupn-area">
                        <p>If you have a coupon code, please apply it below.</p>
                        <input class="w-100 chk-coupn-input" type="text" name="" id="" placeholder="Coupon code">
                        <button class="chk-coupn-btn">Apply coupon</button>
                    </div>
                </form>
            </div>
            <div class="col-12">
                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{ session('success') }}
                                </div>
                            @endif
                    {{ Form::open(['route' => 'checkout' ,'class' => 'billing-detail-form']) }}
                    <div class="row">
                        <div class="col-lg-7 col-12">
                            <div class="billing-detail-area">
                                <h1 class="billing-detail-icon">Billing details</h1>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">First name *</label>
                                    <input class="billing-detail-input" type="text" value="{{ old('first_name',auth()->user()->first_name) }}" name="first_name" id="">
                                    @error('first_name')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Last name *</label>
                                    <input class="billing-detail-input" type="text" value="{{ old('last_name',auth()->user()->last_name) }}" name="last_name" id="">
                                    @error('last_name')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Company name (optional)</label>
                                    <input class="billing-detail-input" type="text" value="{{ old('company_name',auth()->user()->company_name) }}" name="company_name" id="">
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Country / Region *</label>
                                    <select class="form-select billing-detail-input" value="{{ old('country_or_region',auth()->user()->country_or_region) }}" name="country_or_region" aria-label="Default select example">
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Srilanka">Srilanka</option>
                                    </select>
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Street address *</label>
                                    <input class="billing-detail-input mb-1" type="text" value="{{ old('street_address',auth()->user()->street_address) }}" name="street_address" id="" placeholder="House number and street name">
                                    @error('street_address')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Town / City *</label>
                                    <input class="billing-detail-input" type="text" value="{{ old('town_or_city',auth()->user()->town_or_city) }}" name="town_or_city" id="">
                                    @error('town_or_city')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">State *</label>
                                    <input type="text" value="{{ old('state',auth()->user()->state) }}" name="state" class="billing-detail-input">
                                    {{-- <select class="form-select billing-detail-input" value="{{ old('state',auth()->user()->state) }}" name="state" aria-label="Default select example">
                                        <option selected>California </option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                    </select> --}}
                                    @error('state')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">ZIP Code *</label>
                                    <input class="billing-detail-input" type="text" value="{{ old('zip_code',auth()->user()->zip_code) }}" name="zip_code" id="">
                                    @error('zip_code')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Phone *</label>
                                    <input class="billing-detail-input" type="text" value="{{ old('phone',auth()->user()->phone) }}" name="phone" id="">
                                    @error('phone')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Email address *</label>
                                    <input class="billing-detail-input" type="text" value="{{ old('email_address',auth()->user()->email_address) }}" name="email_address" id="">
                                    @error('email_address')
                                        <span class="text-danger py-3 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <h1 class="billing-detail-icon">Additional information</h1>
                                <div class="billing-detail-fields">
                                    <label class="billing-detail-label">Order notes (optional)</label>
                                    <textarea class="billing-detail-input text-area" placeholder="Notes about your order, e.g. special notes for delivery." value="{{ old('description',auth()->user()->description) }}" name="description" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="your-order-area">
                                <h2 class="sub-total-title">Cart totals</h2>
                                <div class="sub-total-inner-area">
                                    <span class="">Product</span>
                                    <span class="">Subtotal</span>
                                </div>
                                @foreach ($cartData as $cart)
                                {{-- <input type="hidden" name="product_id[]" value="{{ $cart->id }}">
                                <input type="hidden" name="quantity[]" value="{{ $cart->quantity }}"> --}}
                                {{-- <input type="hidden" name="quantity[]" value="{{ Cart::session(auth()->id())->getTotalQuantity() }}"> --}}
                                <div class="sub-total-inner-area">
                                    <div class="d-flex align-items-center">
                                        @foreach ($cart->associatedModel->images as $images)
                                            <img class="img-fluid" src="/{{ $images->image }}" alt="">
                                        @endforeach
                                        <div class="d-flex align-items-center chkout-detail-area">
                                            <h2 class="chkout-pro-name">{{ $cart->name }}</h2>
                                            <span class="chkout-pro-qut ">× {{ $cart->quantity }}</span>
                                        </div>
                                    </div>
                                    <span class="">${{ $cart->price }}</span>
                                </div>
                                @endforeach
                                <div class="sub-total-inner-area">
                                    <span class="">Subtotal</span>
                                    <span class="">${{ Cart::gettotal() }}</span>
                                </div>
                                <div class="sub-total-inner-area">
                                    <span class="">Total</span>
                                    <span class="">${{ Cart::gettotal() }}</span>
                                    {{-- <span class=""><input type="text" name="amount_total" value="${{ Cart::gettotal() }}" readonly></span> --}}
                                </div>
                                <div class="mt-5">
                                    <h4 class="sub-total-title">PAYMENT METHOD</h4>
                                    <label class="d-flex align-items-center form-check-label payment-radio" for="flexRadioDefault1">
                                        <input class="form-check-input mt-0" type="checkbox" name="cash_on_delivery" id="flexRadioDefault1" onclick="toggleCardInput()">
                                        Cash on Delivery
                                    </label>
                                </div>
                                <div class="card-main-area">
                                    <div class="">
                                        <input type="text" class="billing-detail-input" name="card_no" placeholder="Card Number">
                                    </div>
                                    <div class="mb-2 card-input-area">
                                        <input type="text" class="billing-detail-input" name="month" placeholder="M M">
                                        <input type="text" class="billing-detail-input" name="year" placeholder="YY">
                                        <input type="text" class="billing-detail-input" name="cvc" placeholder="CVC">
                                    </div>
                                </div>
                                <p class="chkout-privacy-para">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy.php">privacy policy</a>.</p>
                                <button type="submit" class="place-order-btn">Place order</button>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>

<script>
    setTimeout(myStopFunction, 2000);

    function myStopFunction() {
        let message = document.getElementById('messages');
        message.remove();
    }
</script>
{{-- <script src="{{ asset('/assets/user/js/checkout.js') }}"></script> --}}

{{-- <script>
    function toggleCardInput() {
            var checkbox = document.getElementById("flexRadioDefault1");
            var cardInputArea = document.querySelector(".card-main-area");

            if (checkbox.checked) {
                cardInputArea.style.display = "none";
            } else {
                cardInputArea.style.display = "block";
            }
        }
</script> --}}
@endsection

