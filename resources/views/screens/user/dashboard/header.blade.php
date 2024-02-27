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
    <link rel="shortcut icon" href="./assets/images/header-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
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
                        <img class="img-fluid" src="./assets/images/header-logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ordr-1">
                    <nav class="navigation-area">
                        <button class="head-menu-clos"><i class="fa-solid fa-xmark"></i></button>
                        <ul class="navigation">
                            <li class="page-link">
                                <a class="nav-links active" href="../index.php"><span>home</span></a>
                            </li>
                            <li class="page-link">
                                <a class="nav-links" href="../shop.php"><span>shop</span></a>
                            </li>
                            <li class="page-link position-static cat-hover">
                                <a class="nav-links position-relative categories-link-hover" href="../categories.php"><span>categories</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <div class="category-mega-menu-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                           <ul class="cat-menu-area">
                                                <a class="cat-menu-title" href="shop.php">Shop By Collection</a>
                                                <li class="cat-menu-link">
                                                    <a  href="shop.php"><span>Bracelets</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a  href="shop.php"><span>Charm & Dangles</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a  href="shop.php"><span>Pampills Collection</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a  href="shop.php"><span>Earnings</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a  href="shop.php"><span>Gift Ideas</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a  href="shop.php"><span>Necklaces</span></a>
                                                </li>
                                                <li class="cat-menu-link">
                                                    <a  href="shop.php"><span>Rings</span></a>
                                                </li>
                                           </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="cat-menu-img position-relative">
                                                <img class="img-fluid" src="../assets/images/cat-menu-img.jpg" alt="">
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
                                <a class="nav-links" href="../blog.php"><span>blog</span></a>
                            </li>
                            <li class="page-link">
                                <a class="nav-links" href="../contact.php"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4 col-9">
                    <ul class="header-left-icon">
                        <li class="header-icon srch-pop-open" >
                            <i class="bi bi-search"></i>
                        </li>
                        <li class="header-icon">
                            <a href="../login.php">
                                <i class="bi bi-person"></i>
                            </a>
                        </li>
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
                        <li class="header-icon">
                            <button class="head-menu-btn"><i class="bi bi-list"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <script src="../assets/js/header.js"></script>