<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeweldor</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="{{ asset('assets/user/dashboard/images/header-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/user/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/dashboard/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/dashboard/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
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
    </div>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-3">
                    <a class="header-logo-area" href="../index.php">
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
                                                <li class="cat-menu-link">
                                                    <a href="shop.php"><span>Bracelets</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a href="shop.php"><span>Charm & Dangles</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a href="shop.php"><span>Pampills Collection</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a href="shop.php"><span>Earnings</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a href="shop.php"><span>Gift Ideas</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a href="shop.php"><span>Necklaces</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a href="shop.php"><span>Rings</span></a>
                                                </li>
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
                                        src="{{ auth()->user()->image }}" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    <ul class="dropdown-menu px-4">
                                        <li><a href="{{ url('dashboard/account') }}"
                                                class="dropdown-item py-3 fs-5 text-decoration-none"
                                                type="button">Profile</a>
                                        </li>
                                        <li><a href="{{ url('dashboard') }}"
                                                class="dropdown-item py-3 fs-5 text-decoration-none"
                                                type="button">Dashboard</a></li>
                                        @if (auth()->user()->role === 'admin')
                                            <li><a href="{{ url('admin') }}"
                                                    class="dropdown-item py-3 fs-5 text-decoration-none"
                                                    type="button">Admin
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
                            <a class="position-relative" href="../wishlist.php">
                                <i class="bi bi-heart"></i>
                                <span class="whishlist-count">0</span>
                            </a>
                        </li>
                        <li class="header-icon">
                            <a class="position-relative" href="../cart.php">
                                <i class="bi bi-cart3"></i>
                                <span class="cart-count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    @yield('dashboard-content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Shop Highlights</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="../shop.php">Bracelets</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Charm & Dangles</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Earnings</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Necklaces</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Rings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Customer Service</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="../about-us.php">About Us</a>
                            </li>
                            <li class="footer-link">
                                <a href="../faq.php">FAQs</a>
                            </li>
                            <li class="footer-link">
                                <a href="../contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Quick Links</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="../payment.php">Payment</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shipping-returns.php">Shipping & Returns</a>
                            </li>
                            <li class="footer-link">
                                <a href="../privacy-policy.php">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Newsletter</h2>
                        <p>Sign up for our mailing list to get latest Updates and offers.</p>
                        <form class="email-form">
                            <div class="footer-email-area">
                                <input class="footer-email-input" placeholder="Email Address" type="text"
                                    name="" id="">
                            </div>
                            <div class="email-btn-area">
                                <button class="email-btn">Subscribe</button>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/user/js/header.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/user/dashboard/js/index.js') }}"></script>
    <script>
        const dshCurrentPath = window.location.href.split("/");
        const dshPath = dshCurrentPath[dshCurrentPath.length - 1];

        const dshNavLinks = document.querySelectorAll(".side-bar-link");

        dshNavLinks.forEach((link) => {
            link.classList.remove("active");

            if (link.getAttribute("href") === dshPath) {
                link.classList.add("active");
            }
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
