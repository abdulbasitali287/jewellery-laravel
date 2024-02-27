@extends('layouts.app')
@section('content')
    <main>
        <section class="shop-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-text-area">
                            <h1 class="shop-banner-title">shop</h1>
                            <div class="banner-btm-area">
                                <a class="shop-banner-text" href="index.php">Home</a>
                                <i class="fa-solid fa-angle-right"></i>
                                <span class="shop-banner-text color">Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shop-detail-section position-relative">
            <button type="button" class="shop-fil-btn">
                <i class="bi bi-funnel"></i>
                filter
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="accordion shop-filter" id="accordionPanelsStayOpenExample">
                            <button type="button" class="shp-flter-btn"><i class="fa-solid fa-xmark"></i></button>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Categories
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        @foreach ($categoriesShop as $key => $value)
                                            <div class="material-area">
                                                <div class="input-check-label">
                                                    <input class="material-checkbox" type="checkbox" name="categories[]"
                                                        id="" value="{{ $value }}">
                                                    <label class="material-label-area">{{ $value }}</label>
                                                </div>
                                                {{-- <div class="">
                                                <span class="material-label-area">4</span>
                                            </div> --}}
                                            </div>
                                        @endforeach
                                        {{-- <ul class="categories-link-area">

                                                <li class="category-link">
                                                    <a href="shop.php">{{ $value }}</a>
                                                </li>

                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Pricing Filter
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show show">
                                    <div class="accordion-body">
                                        <div class="range-slide">
                                            @php
                                               $maxPrice = (new App\Models\Product())->getMaxPrice();
                                               $minPrice = (new App\Models\Product())->getMinPrice();
                                            @endphp
                                            <div class="slide">
                                                <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                                                <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                                                <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                                            </div>
                                            <input class="range-input" id="rangeMin" type="range" max="{{ round($maxPrice) }}"
                                                min="{{ round($minPrice) }}" value="{{ round($minPrice) }}">
                                            <input class="range-input" id="rangeMax" type="range" max="{{ round($maxPrice) }}"
                                                min="{{ round($minPrice) }}" value="{{ round($maxPrice) }}">
                                        </div>
                                        <div class="display">
                                            <div class="">
                                                <button class="filter-btn">filter</button>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <label class="price-label">price:</label>
                                                <span class="price-num">$</span>
                                                <span class="price-num" id="min">{{ round($minPrice) }}</span>
                                                <span class="input-dsh"></span>
                                                <span class="price-num">$</span>
                                                <span class="price-num" id="max">{{ round($maxPrice) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($attributes as $attribute)
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseThree">
                                            {{ $attribute->name }}
                                        </button>
                                    </h2>
                                    @foreach ($attribute->variants as $variants)
                                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="material-area">
                                                    <div class="input-check-label">
                                                        <input class="material-checkbox" type="checkbox"
                                                            name="variants[]" id=""
                                                            value="{{ $variants->name }}">
                                                        <label class="material-label-area">{{ $variants->name }}</label>
                                                    </div>
                                                    <div class="">
                                                        <span class="material-label-area">4</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-9 col-12 col-md-12 pl-50px">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-5">
                                <p class="filter-count-para">1 – 12 products of 23 products</p>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-7">
                                <div class="sorting-area">
                                    <div class="sort-drop-area d-flex align-items-center">
                                        <span class="sort-label">Sort by</span>
                                        <select class="form-select sorting" aria-label="Default select example" id="sorting">
                                            <option selected>Default sorting</option>
                                            <option value="1">Sort by price: low to high</option>
                                            <option value="2">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                    <div class="sort-tabing-area">
                                        <ul class="sort-tabing">
                                            <li class="twelvecolums" data-tab-target="#twelvecolums">
                                                <button type="button" class="sort-tabing-btn"><i
                                                        class="fa-solid fa-list"></i></button>
                                            </li>
                                            <li class="sixcolumns" data-tab-target="#sixcolumns">
                                                <button type="button" class="sort-tabing-btn"><i
                                                        class="bi bi-grid-fill"></i></button>
                                            </li>
                                            <li class="threecolumns" data-tab-target="#threecolumns">
                                                <button type="button" class="sort-tabing-btn"><i
                                                        class="bi bi-grid-3x3-gap-fill"></i></button>
                                            </li>
                                            <li class="fourcolumns active" data-tab-target="#fourcolumns">
                                                <button type="button" class="sort-tabing-btn"><i
                                                        class="bi bi-grid-3x3-gap-fill"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sec-filter active" id="fourcolumns" data-tab-content>
                            <div class="row" id="appendProducts">
                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6" id="listedProducts">
                                        <div class="featured-pro">
                                            <div class="featured-pro-inner">
                                                <label class="featured-pro-label">19% off</label>
                                                <div class="">
                                                    <a class="featured-img-area"
                                                        href="{{ url('product-detail', $product->id) }}">
                                                        <img class="img-fluid"
                                                            src="{{ asset($product->images[0]->image) }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="featured-pro-btn">
                                                    <form action="{{ url('wishlist') . '/' . $product->id }}"
                                                        method="post"> @csrf <button type="submit" class=""><i
                                                                class="bi bi-heart"></i></button></form>
                                                    <button type="button" class=""><i
                                                            class="bi bi-search"></i></button>
                                                </div>
                                                <div class="featured-text-area">
                                                    <a class="pro-earns" href="shop.php">Earnings</a>
                                                    <a href="product-detail-2.php">
                                                        <h2 class="featured-pro-title">{{ $product->name }}</h2>
                                                    </a>
                                                    <div class="d-flex align-items-baseline">
                                                        <span class="price">${{ $product->price }}</span>
                                                        <span class="cut-price">$159.00</span>
                                                    </div>
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="shop-sec-filter" id="sixcolumns" data-tab-content>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label">19% off</label>
                                            <div class="">
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="{{ asset('assets/user/images/featured-pro-img-18.jpg')}}" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label bg-ff554">hot</label>
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-19.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-20.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$249.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label">19% off</label>
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-21.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-22.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Necklaces</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Birds of Paradise Pendant</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$159.00</span>
                                                    <span class="cut-price">$199.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-23.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-24.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Rings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Kalvesna Diamond Twig Ring</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$39.00</span>
                                                    <span class="price dash">-</span>
                                                    <span class="price">$59.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">Select options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-25.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-26.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Bracelets</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Cross Stripes & Stone Bracelet</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$169.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label bg-ff554">hot</label>
                                            <div class="">
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-27.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Charm & Dangles</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Echoes Necklace Extension Piece</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="">
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-28.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Rings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Four-Leaf Clover Rings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="price dash">-</span>
                                                    <span class="price">$149.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">select optopns</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-29.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-30.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Necklaces</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Cross of Light Pendant</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$79.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">buy on amazon</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label bg-ff554">hot</label>
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-31.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-30.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Rings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Love Both Engagement Ring</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$199.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label bg-ff554">hot</label>
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-32.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-22.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$249.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label bg-ff554">hot</label>
                                            <div class="position-relative">
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-33.jpg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-22.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$249.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label">19% off</label>
                                            <div class="">
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-26.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="pagination-li-area">
                                        <li class="pagination-li">
                                            <span class="pagination-span active">1</span>
                                        </li>
                                        <li class="pagination-li active">
                                            <span class="pagination-span">2</span>
                                        </li>
                                        <li class="pagination-li active">
                                            <span class="pagination-span"><i class="fa-solid fa-angle-right"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sec-filter" id="threecolumns" data-tab-content>
                            <div class="four-columns d-flex flex-wrap">
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label">19% off</label>
                                        <div class="">
                                            <a class="featured-img-area" href="product-detail-2.php">
                                                <img class="img-fluid" src="./assets/images/featured-pro-img-18.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$129.00</span>
                                                <span class="cut-price">$159.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label bg-ff554">hot</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-19.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-20.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$249.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label">19% off</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-21.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-22.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Necklaces</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Birds of Paradise Pendant</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$159.00</span>
                                                <span class="cut-price">$199.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-23.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-24.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Rings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Kalvesna Diamond Twig Ring</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$39.00</span>
                                                <span class="price dash">-</span>
                                                <span class="price">$59.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">Select options</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-25.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-26.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Bracelets</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Cross Stripes & Stone Bracelet</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$169.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label bg-ff554">hot</label>
                                        <div class="">
                                            <a class="featured-img-area" href="product-detail-2.php">
                                                <img class="img-fluid" src="./assets/images/featured-pro-img-27.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Charm & Dangles</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Echoes Necklace Extension Piece</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="">
                                            <a class="featured-img-area" href="product-detail-2.php">
                                                <img class="img-fluid" src="./assets/images/featured-pro-img-28.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Rings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Four-Leaf Clover Rings</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$129.00</span>
                                                <span class="price dash">-</span>
                                                <span class="price">$149.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">select optopns</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-29.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-30.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Necklaces</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Cross of Light Pendant</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$79.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">buy on amazon</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label bg-ff554">hot</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-31.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-30.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Rings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Love Both Engagement Ring</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label bg-ff554">hot</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-32.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-22.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$249.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label bg-ff554">hot</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-33.jpg" alt="">
                                                <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-22.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$249.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label">19% off</label>
                                        <div class="">
                                            <a class="featured-img-area" href="product-detail-2.php">
                                                <img class="img-fluid" src="./assets/images/featured-pro-img-26.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$129.00</span>
                                                <span class="cut-price">$159.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="pagination-li-area">
                                        <li class="pagination-li">
                                            <span class="pagination-span active">1</span>
                                        </li>
                                        <li class="pagination-li active">
                                            <span class="pagination-span">2</span>
                                        </li>
                                        <li class="pagination-li active">
                                            <span class="pagination-span"><i class="fa-solid fa-angle-right"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="shop-sec-filter twelve-columns" id="twelvecolums" data-tab-content>
                            <div class="row">
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area position-relative" href="product-detail-2.php">
                                                    <img class="img-fluid visible-hddn" src="./assets/images/featured-pro-img-2.jpeg" alt="">
                                                    <img class="img-fluid featured-img-back" src="./assets/images/featured-pro-img-3.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <div class="position-relative">
                                                <label class="featured-pro-label">19% off</label>
                                                <a class="featured-img-area" href="product-detail-2.php">
                                                    <img class="img-fluid" src="./assets/images/featured-pro-img-1.jpeg" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">Circle of Light Heart Earrings</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$129.00</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <p class="featured-text-para">This regulator has a rolled diaphragm and high flow rate with reduced pressure drop.It has an excellent degree of condensation.</p>
                                                <div class="d-flex align-items-center">
                                                    <a class="add-cart" href="cart.php">add to cart</a>
                                                    <div class="featured-pro-btn">
                                                        <button type="button" class=""><i class="bi bi-heart"></i></button>
                                                        <button type="button" class=""><i class="bi bi-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="pagination-li-area">
                                        <li class="pagination-li">
                                            <span class="pagination-span active">1</span>
                                        </li>
                                        <li class="pagination-li active">
                                            <span class="pagination-span">2</span>
                                        </li>
                                        <li class="pagination-li active">
                                            <span class="pagination-span"><i class="fa-solid fa-angle-right"></i></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                            </div>
                        </div>
                    </div>
        </section>

        <script>
            $(document).ready(function() {

                const loadFilters = (response) => {
                    // console.log(response.products);
                    // $('#listedProducts').addClass('d-none');
                    $('#appendProducts').html("");
                    let htmlContent = "";
                    $.each(response.products, function(index, product) {
                        htmlContent += `
                                <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                    <div class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label">19% off</label>
                                            <div class="">
                                                <a class="featured-img-area" href="product-detail/${product.id}">
                                                    <img class="img-fluid" src="${product.images[0].image}" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-pro-btn">
                                                <form action="wishlist/${product.id}" method="post"> @csrf <button type="submit" class=""><i class="bi bi-heart"></i></button></form>
                                                <button type="button" class=""><i class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">Earnings</a>
                                                <a href="product-detail-2.php"><h2 class="featured-pro-title">${product.name}</h2></a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">$ ${product.price}</span>
                                                    <span class="cut-price">$159.00</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                    });

                    $('#appendProducts').append(htmlContent);
                }

                $(document).on('change', '#sorting', function(event) {

                    let sortingValue = $(this).val();
                    $.ajax({
                        type: "GET",
                        url: "{{ route('shop') }}",
                        data: {
                            sorting: sortingValue
                        },
                        success: function(response) {
                            console.log(response);
                            loadFilters(response);
                        }
                    });
                });



                var productPriceRange = [];
                $(document).on('change', '#rangeMin,#rangeMax', function() {
                    // Perform your AJAX call here with the necessary data
                    productPriceRange = {
                        min: $('#rangeMin').val(),
                        max: $('#rangeMax').val()
                    };
                    sendAjaxRequest()
                });

                var categories = [];

                $(document).on('change', 'input[name="categories[]"]', function(event) {
                    var categoryId = $(this).val();
                    $(this).is(':checked') ? categories.push(categoryId) : categories.splice($.inArray(categoryId, categories), 1);
                    sendAjaxRequest()

                });
                var checkedValues = [];
                $(document).on('change', 'input[name="variants[]"]', function(event) {

                    let check = $(this).val();
                    $(this).is(':checked') ? checkedValues.push(check) : checkedValues.splice($.inArray(check, checkedValues), 1);
                    console.log(checkedValues);
                    sendAjaxRequest()
                });

                function sendAjaxRequest() {

                    $.ajax({
                        type: 'GET',
                        url: "{{ route('shop') }}",
                        data: {
                            variants: checkedValues,
                            categories : categories,
                            priceRange: productPriceRange,
                        },
                        success: function(response) {
                            loadFilters(response);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });

                }
            });
        </script>

        @push('scripts')
            <script src="{{ asset('assets/user/js/shop.js') }}"></script>
        @endpush
    </main>
@endsection
