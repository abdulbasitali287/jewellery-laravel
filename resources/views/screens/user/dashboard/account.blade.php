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
                                        <div class="">
                                            <h4 class="address-title mb-4">My account</h4>
                                            <p class="dashbrd-top-para">Edit your account details or change your password
                                            </p>
                                            <div id="messages">
                                                @if (session('failed'))
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Failed!</strong>{{ session('failed') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-7 col-md-6 col-12 res-ordr-1">
                                                    <div class="billing-address-fields">
                                                        <label class="billing-detail-label">First name *</label>
                                                        <input class="billing-detail-input" value="{{ auth()->user()->name }}" @disabled(auth()->user()->name) type="text" name="name" >
                                                        @error('name')
                                                            <span class="text-danger fs-4 py-2">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="billing-address-fields">
                                                        <label class="billing-detail-label">Last name *</label>
                                                        <input class="billing-detail-input" value="{{ auth()->user()->last_name }}" @disabled(auth()->user()->last_name) type="text" name="last_name">
                                                        @error('last_name')
                                                            <span class="text-danger fs-4 py-2">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="billing-address-fields">
                                                        <label class="billing-detail-label">Email address *</label>
                                                        <input class="billing-detail-input" type="email"
                                                            value="{{ auth()->user()->email }}" @disabled(auth()->user()->email) name="email" id="">
                                                        @error('email')
                                                            <span class="text-danger fs-4 py-2">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-address-fields">
                                                <a href="{{ url('dashboard/profile') }}" class="save-add-btn text-decoration-none">Edit changes</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        setTimeout(myStopFunction, 10000);

        function myStopFunction() {
            let message = document.getElementById('messages');
            message.remove();
        }
    </script>
    <script>
        let noimage = "./assets/images/user-profile-img.png";

        function readURL(input) {
            console.log(input.files);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#img-preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                $("#img-preview").attr("src", noimage);
            }
        }
    </script>
@endsection
