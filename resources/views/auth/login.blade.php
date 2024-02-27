@extends('layouts.guest')
@section('auth-content')

<section class="login-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="banner-btm-area">
                    <a class="shop-banner-text" href="#">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a class="shop-banner-text" href="#">Shop</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a class="shop-banner-text" href="user-dashboard/dashboard.php">My Account</a>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h1 class="shop-banner-title">My account</h1>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 col-md-9 col-12">
                <div class="login-area">
                    <h2 class="login-title text-center">Login</h2>
                    {!! Form::open(['route' => 'login']) !!}
                        <div class="">
                            {!! Form::label('email', 'Email *', ['class' => 'login-label']) !!}
                            {!! Form::email('email', null, ['class' => 'login-input']) !!}
                            @error('email')
                                <span class="text-danger py-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            {!! Form::label('password', 'Password *', ['class' => 'login-label']) !!}
                            {!! Form::password('password', ['class' => 'login-input']) !!}
                            @error('password')
                                <span class="text-danger py-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="">
                                <a class="login-label" href="lost-password.php">Lost your password?</a>
                            </div>
                        </div>
                        <button class="login-btn">log in</button>
                        <a class="login-label text-center mt-4" href="{{ url('/register') }}">New to Jeweldor? Register</a>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
