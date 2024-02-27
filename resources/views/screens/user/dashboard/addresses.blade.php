@extends('layouts.dashboard')
@section('dashboard-content')
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
                        <div class="dashboard-side">
                            <h3 class="dashboard-title">Address</h3>
                            <p class="dashbrd-top-para">The following addresses will be used on the checkout page by default.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="addresses-link-area">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="address-title">Billing address</h4>
                                    </div>
                                    <p class="address-discrip">You have not set up this type of address yet.</p>
                                </div>
                                <a class="address-link save-add-btn" href="{{ url('dashboard/shipping-address') }}">Show</a>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="addresses-link-area res-mb40px">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="address-title">Shipping address</h4>
                                        <a class="address-link" href="shipping-address.php">Add</a>
                                    </div>
                                    <p class="address-discrip">You have not set up this type of address yet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
