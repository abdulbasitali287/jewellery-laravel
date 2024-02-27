@extends('layouts.app')
@section('title')
    Jeweldor
@endsection
@push('styles')
    <style>

    </style>
@endpush
@section('content')
    <main>
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative">
                            <ul class="banner-slider-area">
                                {{-- @dd($sliders) --}}
                                @forelse ($sliders as $slider)
                                    <li class="banner-slider position-relative">
                                        <div class="banner-img-area">
                                            <img class="img-fluid" src="{{ $slider->getFirstMediaUrl('slider-media') }}"
                                                alt="">
                                        </div>
                                        <div class="banner-slider-inner-area">
                                            <h1 class="banner-slider-title">{{ $slider->title }}</h1>
                                            <p class="banner-slider-text text-white">{{ $slider->sub_title }}</p>
                                            <a class="shop-now" href="{{ route('shop') }}">shop now</a>
                                        </div>
                                    </li>
                                @empty
                                    <li class="banner-slider position-relative">
                                        <div class="banner-img-area">
                                            <img class="img-fluid" src="{{ asset('assets/user/images/banner-img-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="banner-slider-inner-area">
                                            <h1 class="banner-slider-title">Finest Jewelry <br> Collections</h1>
                                            <p class="banner-slider-text text-white">Discover the collection Designed for
                                                Spring
                                                2023</p>
                                            <a class="shop-now" href="shop">shop collection</a>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                            <div class="banner-slider-btn-area">
                                <button class="banner-slider-btn banner-slider-pre"><i
                                        class="fa-solid fa-angle-left"></i></button>
                                <button class="banner-slider-btn banner-slider-next"><i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="category-section">
            <div class="container">
                <div class="row">
                    {{-- @foreach ($latestCollections as $latestCollection) --}}
                    <div class="col-lg-6 col-12">
                        <div class="main-category-area">
                            <img class="img-fluid" src="{{ $latestCollections[0]->getFirstMediaUrl() }}"
                            {{-- <img class="img-fluid" src="{{ asset('assets/user/images/category-img-1.jpeg') }}" --}}
                            alt="">
                            <div class="category-detail-area">
                                <span class="main-category-span">{{ $latestCollections[0]->title }}</span>
                                {{-- <span class="main-category-span">FASHION SS 2023</span> --}}
                                <h3 class="main-category-title">{{ $latestCollections[0]->sub_title }}</h3>
                                {{-- <h3 class="main-category-title">New earrings <br> arrival</h3> --}}
                                <a class="shop-collection-a" href="product-detail-2.php">shop collection</a>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-12"> --}}
                            <div class="category-area mt-2">
                                <img class="img-fluid" src="{{ $latestCollections[4]->getFirstMediaUrl() }}"
                                    alt="">
                                <div class="bottom-category-detail-area">
                                    <span class="main-category-span">{{ $latestCollections[4]->sub_title }}</span>
                                    <h3 class="category-title mt-3">{{ $latestCollections[4]->title }}</h3>
                                    <a class="shop-collection-a" href="product-detail-2.php">explore more</a>
                                </div>
                            </div>
                        {{-- </div> --}}
                        {{-- <div class="col-lg-6 col-12"> --}}
                            <div class="category-area">
                                <img class="img-fluid" src="{{ $latestCollections[5]->getFirstMediaUrl() }}"
                                    alt="">
                                <div class="bottom-category-detail-area">
                                    <span class="main-category-span">{{ $latestCollections[5]->sub_title }}</span>
                                    <h3 class="category-title mt-3">{{ $latestCollections[5]->title }}</h3>
                                    <a class="shop-collection-a" href="product-detail-2.php">explore more</a>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                    {{-- @endforeach --}}
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="category-area">
                                    <img class="img-fluid" src="{{ $latestCollections[1]->getFirstMediaUrl() }}" alt="">
                                    <div class="second-category-detail-area">
                                        <h3 class="category-title">{{ $latestCollections[1]->title }}</h3>
                                        {{-- <h3 class="category-title">Diamond boxset <br> bracelets</h3> --}}
                                        <a class="shop-collection-a" href="product-detail-2.php">explore more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="category-area">
                                    <img class="img-fluid" src="{{ $latestCollections[2]->getFirstMediaUrl() }}" alt="">
                                    <div class="second-category-detail-area">
                                        <h3 class="category-title">{{ $latestCollections[2]->title }}</h3>
                                        {{-- <h3 class="category-title">Trendy pendants <br> collection</h3> --}}
                                        <a class="shop-collection-a" href="product-detail-2.php">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="category-area">
                                    <img class="img-fluid" src="{{ $latestCollections[3]->getFirstMediaUrl() }}" alt="">
                                    <div class="second-category-detail-area">
                                        <h3 class="category-title">{{ $latestCollections[3]->title }}</h3>
                                        <a class="shop-collection-a" href="product-detail-2.php">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-pro-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="sec-title">Featured Products</h2>
                    </div>
                    <div class="col-12">
                        <ul class="featured-pro-tabs-area">
                            <li data-tab-target="#Arrivals" class="active">
                                <button type="button" class="featured-pro-tab">New Arrivals</button>
                            </li>
                            <li data-tab-target="#Featured">
                                <button type="button" class="featured-pro-tab">Featured</button>
                            </li>
                            <li data-tab-target="#Seller">
                                <button type="button" class="featured-pro-tab">Best Seller</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div class="position-relative featured-pro-slider active" id="Arrivals" data-tab-content>
                            <ul class="featured-pro-slider-area-one">
                                @forelse ($products as $product)
                                    <li class="featured-pro">
                                        <div class="featured-pro-inner">
                                            <label class="featured-pro-label">19% off</label>
                                            @php
                                                $images = [];
                                            @endphp
                                            @foreach ($product->images as $image)
                                                @unless (in_array($image->product_id, $images))
                                                    @php
                                                        $images[] = $image->product_id;
                                                    @endphp
                                                    <a class="featured-img-area fea-img-sec"
                                                        href="{{ route('product.detail', $product->id) }}">
                                                        <img class="img-fluid" src="/{{ $image->image }}" alt="">
                                                    </a>
                                                @endunless
                                            @endforeach
                                            <div class="featured-pro-btn">
                                                <button type="button" class=""><i
                                                        class="bi bi-heart"></i></button>
                                                <button type="button" class=""><i
                                                        class="bi bi-search"></i></button>
                                            </div>
                                            <div class="featured-text-area">
                                                <a class="pro-earns" href="shop.php">pending</a>
                                                <a href="{{ route('product.detail', $product->id) }}">
                                                    <h2 class="featured-pro-title">{{ $product->name }}</h2>
                                                </a>
                                                <div class="d-flex align-items-baseline">
                                                    <span class="price">${{ $product->price }}</span>
                                                    <span
                                                        class="cut-price">${{ $product->price > !$product->price ? $product->price + 100 : $product->price }}</span>
                                                </div>
                                                <a class="add-cart" href="cart.php">add to cart</a>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <h4>No record found...!</h4>
                                @endforelse
                            </ul>
                            <div class="banner-slider-btn-area">
                                <button class="banner-slider-btn featured-slider-pre featured-one-pre"><i
                                        class="fa-solid fa-angle-left"></i></button>
                                <button class="banner-slider-btn featured-slider-next featured-one-next"><i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="position-relative featured-pro-slider" id="Featured" data-tab-content>
                            <ul class="featured-pro-slider-area-two">
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label">19% off</label>
                                        <div class="">
                                            <a class="featured-img-area fea-img-sec" href="product-detail-2.php">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/user/images//featured-pro-img-1.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Circle of Light Heart Earrings</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$129.00</span>
                                                <span class="cut-price">$159.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label bg-ff554">hot</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product-detail-2.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-2.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-3.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$249.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label">19% off</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product-detail-2.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-4.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-5.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Necklaces</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Birds of Paradise Pendant</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$159.00</span>
                                                <span class="cut-price">$199.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product-detail-2.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-6.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-7.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Rings</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Kalvesna Diamond Twig Ring</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$39.00</span>
                                                <span class="price dash">-</span>
                                                <span class="price">$59.00</span>
                                            </div>
                                            <a class="add-cart" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product-detail-2.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-8.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-9.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Bracelets</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Cross Stripes & Stone Bracelet</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$169.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="banner-slider-btn-area">
                                <button class="banner-slider-btn featured-slider-pre featured-two-pre"><i
                                        class="fa-solid fa-angle-left"></i></button>
                                <button class="banner-slider-btn featured-slider-next featured-two-next"><i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="position-relative featured-pro-slider" id="Seller" data-tab-content>
                            <ul class="featured-pro-slider-area-three">
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label">19% off</label>
                                        <div class="">
                                            <a class="featured-img-area fea-img-sec" href="product-detail-2.php">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/user/images//featured-pro-img-1.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Circle of Light Heart Earrings</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$129.00</span>
                                                <span class="cut-price">$159.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label bg-ff554">hot</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product.detail.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-2.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-3.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Earnings</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Blue Stripes & Stone Earrings</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$249.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <label class="featured-pro-label">19% off</label>
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product-detail-2.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-4.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-5.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Necklaces</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Birds of Paradise Pendant</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$159.00</span>
                                                <span class="cut-price">$199.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product-detail-2.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-6.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-7.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Rings</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Kalvesna Diamond Twig Ring</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$39.00</span>
                                                <span class="price dash">-</span>
                                                <span class="price">$59.00</span>
                                            </div>
                                            <a class="add-cart" href="#">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="featured-pro">
                                    <div class="featured-pro-inner">
                                        <div class="position-relative">
                                            <a class="featured-img-area fea-img-sec position-relative"
                                                href="product-detail-2.php">
                                                <img class="img-fluid feature-visible-hddn"
                                                    src="{{ asset('assets/user/images/featured-pro-img-8.jpeg') }} "
                                                    alt="">
                                                <img class="img-fluid featured-sec-img"
                                                    src="{{ asset('assets/user/images/featured-pro-img-9.jpeg') }} "
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-pro-btn">
                                            <button type="button" class=""><i class="bi bi-heart"></i></button>
                                            <button type="button" class=""><i class="bi bi-search"></i></button>
                                        </div>
                                        <div class="featured-text-area">
                                            <a class="pro-earns" href="shop.php">Bracelets</a>
                                            <a href="product-detail-2.php">
                                                <h2 class="featured-pro-title">Cross Stripes & Stone Bracelet</h2>
                                            </a>
                                            <div class="d-flex align-items-baseline">
                                                <span class="price">$169.00</span>
                                            </div>
                                            <a class="add-cart" href="cart.php">add to cart</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="banner-slider-btn-area">
                                <button class="banner-slider-btn featured-slider-pre featured-three-pre"><i
                                        class="fa-solid fa-angle-left"></i></button>
                                <button class="banner-slider-btn featured-slider-next featured-three-pre"><i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gold-club-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="gold-club-area">
                            <p>Gold Club - plus 5% rewards and free shipping</p>
                            <a class="shop-now" href="shop.php">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="real-journal-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="real-journal-title-area">
                            <h2 class="sec-title">Read Journal</h2>
                            <p class="sec-top-para">Latest trends and inspirations in fashion design.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="Journal-sec-inner-area">
                            <ul class="Journal-sec-slider-area">
                                @foreach ($blogs as $blog)
                                    <li class="Journal-sec-slider">
                                        <div class="Journal-pro-img">
                                            <a href="{{ route('blog.detail', $blog->id) }}">
                                                <img class="journal-img img-fluid" src="/{{ $blog->image }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="Journal-pro-descrip">
                                            <div class="journal-slider-label">
                                                <a class="journal-label-area" href{{ route('blog.detail', $blog->id) }}">
                                                    {{ $blog->name }}
                                                </a>
                                            </div>
                                            <div class="Journal-pro-header">
                                                <a href="{{ route('blog.detail', $blog->id) }}">
                                                    <span class="admin-text">{{ auth()->user()->name }}</span>
                                                </a>
                                                <a href="{{ route('blog.detail', $blog->id) }}">
                                                    <span class="date">{{ $blog->created_at->format('M d / Y') }}</span>
                                                </a>
                                            </div>
                                            <h2 class="Journal-pro-title">
                                                <a href="{{ route('blog.detail', $blog->id) }}">{{ $blog->name }}</a>
                                            </h2>
                                            <span class="Journal-btm-text">{{ $blog->short_description }}</span>
                                            <a class="shop-collection-a"
                                                href="{{ route('blog.detail', $blog->id) }}">Continue Reading </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="banner-slider-btn-area">
                                <button class="banner-slider-btn Journal-slider-pre"><i
                                        class="fa-solid fa-angle-left"></i></button>
                                <button class="banner-slider-btn Journal-slider-next"><i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="testimonial-slider-area">
                            <ul class="testimonial-slider">
                                @forelse ($testimonials as $testimonial)
                                <li class="testimonial-slider-inner">
                                    <div class="tes-top-area">
                                        <h2 class="testimonial-title">{{ $testimonial->title }}</h2>
                                        <p class="tes-descrip-area">{{ $testimonial->description }}</p>
                                    </div>
                                </li>
                                @empty
                                    <h4>No record found...!</h4>
                                @endforelse
                            </ul>
                            <div class="banner-slider-btn-area">
                                <button class="banner-slider-btn tes-slider-pre"><i
                                        class="fa-solid fa-angle-left"></i></button>
                                <button class="banner-slider-btn tes-slider-next"><i
                                        class="fa-solid fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('screens.user.includes.brand-logo-section')
        <section class="instagram-follow-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="sec-title">Follow Us on Instagram</h2>
                        <p class="sec-top-para">@jeweldor</p>
                    </div>
                    <div class="insta-follow-slider-area">
                        <ul class="insta-follow-slider">
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-1.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-2.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-3.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-4.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-5.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-6.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-1.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-2.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-3.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                            <li class="instagram-slider">
                                <a href="#">
                                    <div class="insta-img-area">
                                        <img class="insta-img img-fluid"
                                            src="{{ asset('assets/user/images/instagram-slider-img-3.jpeg') }} "
                                            alt="">
                                        <img class="img-fluid insta-icon"
                                            src="{{ asset('assets/user/images/instagram-img.png') }} " alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script src="{{ asset('assets/user/js/index.js') }} "></script>
@endpush
