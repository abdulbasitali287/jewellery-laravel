@extends('layouts.guest')
@section('auth-content')
<section class="login-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="banner-btm-area">
                    <a class="shop-banner-text" href="index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a class="shop-banner-text" href="shop.php">Shop</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span class="shop-banner-text color">My Account</span>
                </div>
                <div class="text-center mt-5 mb-5">
                    <h1 class="shop-banner-title">My account</h1>
                </div>
            </div>
            <div class="col-lg-6 col-xl-5 col-md-9 col-12">
                <div class="register-area">
                    <h2 class="login-title text-center">Register</h2>

                    {!! Form::open(['url' => 'register']) !!}
                        <div class="">
                            {!! Form::label('username', 'User Name *', ['class' => 'login-label']) !!}
                            {!! Form::text('username', null, ['class' => 'login-input']) !!}
                            @error('username')
                                <span class="text-danger py-2">{{ $message }}</span>
                            @enderror
                        </div>
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
                        <div class="">
                            {!! Form::label('confirm password', 'Confirm Password *', ['class' => 'login-label']) !!}
                            {!! Form::password('password_confirmation', ['class' => 'login-input']) !!}
                            @error('password_confirmation')
                                <span class="text-danger py-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <p>A password will be sent to your email address.</p>
                        {!! Form::submit('Register', ['class' => 'login-btn']) !!}
                        <a class="login-label text-center mt-4" href="{{ url('/login') }}">Existing User? Log in</a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
