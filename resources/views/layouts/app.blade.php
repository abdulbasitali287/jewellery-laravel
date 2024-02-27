<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="{{ asset('assets/user/images/header-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/user/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    <style>
        .toast-message {
            font-size: 16px !important;
        }
    </style>
    @stack('styles')
</head>

<body>
    <div class="search-popup-open">
        <div class="search-popup-wrap">
            <button class="srch-pop-cls-btn"><i class="bi bi-x-lg"></i></button>
            <div class="search-popup">
                <form class="d-flex align-items-center justify-content-between">
                    <input type="text" placeholder="search products">
                    <button class="search-btn-poup"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="top-bar-area">
        <p>FINAL CLEARANCE: <strong>Take 20%</strong> off ‘Sale Must-Haves’</p>
        <button type="button" class="top-bar-cls-btn"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-3">
                    <a class="header-logo-area" href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ asset('assets/user/images/header-logo.png') }}" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ordr-1">
                    <nav class="navigation-area">
                        <button class="head-menu-clos"><i class="fa-solid fa-xmark"></i></button>
                        <ul class="navigation">
                            <li class="page-link">
                                <a class="nav-links active" href="{{ route('index') }}"><span>home</span></a>
                            </li>
                            <li class="page-link">
                                <a class="nav-links" href="{{ url('shop') }}"><span>shop</span></a>
                            </li>
                            <li class="page-link position-static cat-hover">
                                <a class="nav-links position-relative categories-link-hover"
                                    href="{{ url('categories') }}"><span>categories</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <div class="category-mega-menu-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <ul class="cat-menu-area">
                                                <a class="cat-menu-title" href="shop.php">Shop By Collection</a>
                                                @foreach ($categories as $category)
                                                    <li class="cat-menu-link">
                                                        <a
                                                            href="{{ url('category/products') . '/' . $category->id }}"><span>{{ $category->name }}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="cat-menu-img position-relative">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/user/images/cat-menu-img.jpg') }}"
                                                    alt="">
                                                <div class="cat-img-area-content">
                                                    <h3 class="cat-menu-title mb-4">Sales & Special Offer!</h3>
                                                    <span>Get upto 20% Off!</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="page-link">
                                <a class="nav-links" href="{{ url('blogs') }}"><span>blog</span></a>
                            </li>
                            <li class="page-link">
                                <a class="nav-links" href="{{ url('contact') }}"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-9">
                    <ul class="header-left-icon">
                        <li class="header-icon srch-pop-open">
                            <i class="bi bi-search"></i>
                        </li>
                        @auth
                            <li class="header-icon">
                                <div class="dropdown">
                                    <img class="img-fluid dropdown-toggle"
                                        style="width: 30px;height: 30px;border-radius: 50px" type="button"
                                        src="{{ auth()->user()->image }}"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <ul class="dropdown-menu px-4">
                                        <li><a href="{{ url('dashboard/account') }}"
                                                class="dropdown-item py-3 fs-5 text-decoration-none" type="button">Profile</a>
                                        </li>
                                        <li><a href="{{ url('dashboard') }}"
                                                class="dropdown-item py-3 fs-5 text-decoration-none"
                                                type="button">Dashboard</a></li>
                                        @if (auth()->user()->role === 'admin')
                                            <li><a href="{{ url('admin') }}"
                                                    class="dropdown-item py-3 fs-5 text-decoration-none" type="button">Admin
                                                    Dashboard</a></li>
                                        @endif
                                        @auth
                                            <li class="nav-item d-none d-sm-inline-block">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                    <button class="dropdown-item py-3 fs-5">Logout</button>
                                                </form>
                                            </li>
                                        @endauth
                                    </ul>
                                </div>
                            </li>
                        @endauth
                        <li class="header-icon">
                            <a class="position-relative" href="{{ url('wishlist/details') }}">
                                <i class="bi bi-heart"></i>
                                <span class="whishlist-count">{{ count(auth()->user()->wishlists) }}</span>
                            </a>
                        </li>
                        <li class="header-icon">
                            <a class="position-relative" href="{{ route('cart') }}">
                                <i class="bi bi-cart3"></i>
                                <span class="cart-count">{{ auth()->user() ? count(\Cart::session(auth()->id())->getContent()) : '0' }}</span>
                            </a>
                        </li>
                        <li class="header-icon">
                            <button class="head-menu-btn"><i class="bi bi-list"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <script src="{{ asset('assets/user/js/header.js') }}"></script>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Shop Highlights</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="shop.php">Bracelets</a>
                            </li>
                            <li class="footer-link">
                                <a href="shop.php">Charm & Dangles</a>
                            </li>
                            <li class="footer-link">
                                <a href="shop.php">Earnings</a>
                            </li>
                            <li class="footer-link">
                                <a href="shop.php">Necklaces</a>
                            </li>
                            <li class="footer-link">
                                <a href="shop.php">Rings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Customer Service</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="about-us.php">About Us</a>
                            </li>
                            <li class="footer-link">
                                <a href="{{ url('faq') }}">FAQs</a>
                            </li>
                            <li class="footer-link">
                                <a href="{{ url('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Quick Links</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="payment.php">Payment</a>
                            </li>
                            <li class="footer-link">
                                <a href="shipping-returns.php">Shipping & Returns</a>
                            </li>
                            <li class="footer-link">
                                <a href="privacy-policy.php">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Newsletter</h2>
                        <p>Sign up for our mailing list to get latest Updates and offers.</p>
                        <form action="{{ url('newsletter') }}" method="POST" class="email-form">
                            @csrf
                            <div class="footer-email-area">
                                <input class="footer-email-input" placeholder="Email Address" type="text"
                                    name="email" id="">
                                @error('email')
                                    <span class="text-danger py-2 fs-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="email-btn-area">
                                <button type="submit" class="email-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-3 col-lg-4">
                    <div class="footer-logo-area">
                        <img class="img-fluid" src="{{ asset('assets/user/images/footer-logo-img.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-12  col-md-9 col-lg-7">
                    <div class="footer-btm-area">
                        <!--<ul class="footer-btn-links-area">-->
                        <!--    <li class="footer-link">-->
                        <!--        <a href="payment.php">Payment</a>-->
                        <!--    </li>-->
                        <!--    <li class="footer-link">-->
                        <!--        <a href="shipping-returns.php">Shipping & Returns</a>-->
                        <!--    </li>-->
                        <!--    <li class="footer-link">-->
                        <!--        <a href="privacy-policy.php">Privacy Policy</a>-->
                        <!--    </li>-->
                        <!--</ul>-->
                        <p>Design & Developed by <a target="blank" href="https://www.webdesignglory.com/">WED DESIGN
                                GLORY</a> © Copyright 2023 – Jeweldor</p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="btm-top-btn-area">
                        <button type="button" id="btm-top-btn"><i class="fa-solid fa-angle-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- <div class="join-family-popup-wrap">
        <div class="join-family-popup">
            <button type="button" class="join-fm-clos-pop"><i class="fa-solid fa-xmark"></i></button>
            <div class="join-family-img">
                <img class="img-fluid" src="{{ asset('assets/user/images/join-family-img.jpg') }}" alt="">
            </div>
            <div class="join-family-content">
                <h2 class="join-family-title">Join the our family</h2>
                <p class="join-famly-para">Sign up to get all the latest fashion news, website updates, offers and promos.</p>
                <form class="join-family-form">
                    <input class="input-join-fam" type="email" placeholder="email address">
                    <button class="join-fam-btn">subscribe</button>
                </form>
                <label class="join-fm-label" for="fmly-checkbox">
                    <input type="checkbox" name="" id="fmly-checkbox">
                    Do not show this window
                </label>
            </div>
        </div>
    </div> --}}



    <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/slick.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        const joinPopup = document.querySelector(".join-family-popup-wrap");
        const joinPopupCls = document.querySelector(".join-fm-clos-pop");


        setTimeout(() => {
            joinPopup.classList.add("active");
        }, 10000);

        joinPopupCls.addEventListener('click', function() {
            joinPopup.classList.remove("active");
        });



        $(document).ready(() => {

            const backToTop = $('#btm-top-btn')
            const amountScrolled = 300

            $(window).scroll(() => {
                $(window).scrollTop() >= amountScrolled ?
                    backToTop.fadeIn('fast') :
                    backToTop.fadeOut('fast')
            })

            backToTop.click(() => {
                $('body, html').animate({
                    scrollTop: 0
                }, 600)
                return false
            })
        });
    </script>
    @stack('scripts')
</body>

</html>
