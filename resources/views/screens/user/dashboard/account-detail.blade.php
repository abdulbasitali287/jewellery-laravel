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
                                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
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
                                                        <input class="billing-detail-input"
                                                            value="{{ old('name',auth()->user()->name) }}" type="text" name="name"
                                                            id="">
                                                        @error('name')
                                                            <span class="text-danger fs-4 py-2">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="billing-address-fields">
                                                        <label class="billing-detail-label">Last name *</label>
                                                        <input class="billing-detail-input"
                                                            value="{{ old('last_name',auth()->user()->last_name) }}" type="text"
                                                            name="last_name" id="">
                                                        @error('last_name')
                                                            <span class="text-danger fs-4 py-2">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="billing-address-fields">
                                                        <label class="billing-detail-label">Email address *</label>
                                                        <input class="billing-detail-input" type="email"
                                                            value="{{ old('email',auth()->user()->email) }}" name="email" id="">
                                                        @error('email')
                                                            <span class="text-danger fs-4 py-2">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-12 ">
                                                    <div class="user-profile-area">
                                                        <div class="profile-img-area">
                                                            <img id="img-preview" class="img-fluid"
                                                                src="{{ auth()->user()->image }}" alt="">
                                                        </div>
                                                        <input id="upload-profile" class="d-none" type="file" name="image" />
                                                        <label for="upload-profile" class="profile-update-btn">Update
                                                            Picture</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="password-area">
                                                <label class="lable-hd">password change</label>
                                                <div class="billing-address-fields">
                                                    <label class="billing-detail-label">Current password</label>
                                                    <input class="billing-detail-input" type="password" name="old_password" >
                                                </div>
                                                <div class="billing-address-fields">
                                                    <label class="billing-detail-label">New password</label>
                                                    <input class="billing-detail-input" type="password" name="password" >
                                                    @error('password')
                                                        <span class="text-danger fs-4 py-2">{{ $message }}</span>
                                                    @enderror                                                </div>
                                                <div class="billing-address-fields">
                                                    <label class="billing-detail-label">Confirm new password</label>
                                                    <input class="billing-detail-input" type="password" name="password_confirmation" >
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="billing-address-fields">
                                                    <button class="save-add-btn py-4">save changes</button>
                                                    <a href="{{ url('dashboard/account') }}" class="save-add-btn text-decoration-none ms-2 py-4">Back</a>
                                                </div>
                                                {{-- <div class="billing-address-fields">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </form>
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
