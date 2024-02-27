@extends('layouts.dashboard')
@section('dashboard-content')
<div class="overflow-table">
    <section class="dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-btm-area">
                        <a class="shop-banner-text" href="../index.php">Home</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="shop-banner-text" href="../shop.php">Shop</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <span class="shop-banner-text color">My Account</span>
                    </div>
                    <button class="dsh-sidebar-btn"><i class="fa-solid fa-bars"></i></button>
                    <div class="text-center mt-5 mb-5">
                        <h1 class="shop-banner-title">My account</h1>
                    </div>
                </div>
                <div class="dashboard-main-area">
                    @include('screens.user.dashboard.Side-bar')
                    <div class="dashboard-right-area">
                        <div class="row">
                            <div class="col-12">
                                {{-- <form action="{{ route('shipping.address.update') }}" method="POST">
                                    @csrf --}}
                                    <div class="">
                                        <h4 class="address-title">Billing address</h4>
                                        <div class="billing-address-fields">
                                            <label class="billing-detail-label">First name *</label>
                                            <input class="billing-detail-input" type="text" value="{{ old('name',auth()->user()->name) }}" @disabled(auth()->user()) name="name" id="">
                                            @error('name')
                                                <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="billing-address-fields">
                                            <label class="billing-detail-label">Last name *</label>
                                            <input class="billing-detail-input" type="text" value="{{ old('last_name',auth()->user()->last_name) }}" @disabled(auth()->user()) name="last_name" id="">
                                            @error('last_name')
                                                <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="billing-address-fields">
                                            <label class="billing-detail-label">Company name (optional)</label>
                                            <input class="billing-detail-input" type="text" value="{{ old('company_name',auth()->user()->company_name) }}" @disabled(auth()->user()) name="company_name" id="">
                                            @error('company_name')
                                                <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="billing-address-fields">
                                            <label class="billing-detail-label">Country / Region *</label>
                                            <select class="form-select billing-detail-input" aria-label="Default select example">
                                                <option selected>Select a country region...</option>
                                                <option value="1">Exmaple</option>
                                                <option value="2">Exmaple</option>
                                                <option value="3">Exmaple</option>
                                            </select>
                                        </div> --}}
                                        <div class="billing-address-fields">
                                            <label class="billing-detail-label">Street address *</label>
                                            <input class="billing-detail-input mb-1" type="text" value="{{ old('street_address',auth()->user()->street_address) }}" @disabled(auth()->user()) name="street_address" id="" placeholder="House number and street name">
                                            @error('street_address')
                                                <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                            @enderror
                                            {{-- <input class="billing-detail-input" type="text" name="" id="" placeholder="Apartment, suite, unit, etc. (optional)"> --}}
                                        </div>
                                        <div class="billing-address-fields">
                                            <label class="billing-detail-label">Town / City *</label>
                                            <input class="billing-detail-input" type="text" value="{{ old('city',auth()->user()->city) }}" @disabled(auth()->user()) name="city" id="">
                                            @error('city')
                                            <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="billing-address-fields">
                                            <label class="billing-detail-label">State *</label>
                                            <input class="billing-detail-input" type="text" value="{{ old('state',auth()->user()->state) }}" @disabled(auth()->user()) name="state" id="">
                                            {{-- <select class="form-select billing-detail-input" value="{{ old('state',auth()->user()->state) }}" name="state" aria-label="Default select example">
                                                <option selected>Select an option</option>
                                                <option value="1">Exmaple</option>
                                                <option value="2">Exmaple</option>
                                                <option value="3">Exmaple</option>
                                            </select> --}}
                                            @error('state')
                                                <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="billing-address-fields">
                                            <label class="billing-detail-label">ZIP Code *</label>
                                            <input class="billing-detail-input" type="text" value="{{ old('zip_code',auth()->user()->zip_code) }}" @disabled(auth()->user()) name="zip_code" id="">
                                            @error('zip_code')
                                                <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="billing-address-fields">
                                            <a href="{{ url('dashboard/edit-shipping-address') }}" class="save-add-btn text-decoration-none">Edit Address</a>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
