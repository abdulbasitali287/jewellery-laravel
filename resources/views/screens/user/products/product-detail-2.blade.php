@extends('layouts.app')
@section('content')
    <section class="product-detail-2-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-11 mb-5">
                    <div class="product-detail-top">
                        <a class="product-detail-top-link" href="index.php">Home</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="product-detail-top-link" href="shop.php">Shop</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a class="product-detail-top-link" href="shop.php">Earnings</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <span>{{ $product->name }}</span>
                    </div>
                </div>
                <div class="col-1 mb-5">
                    <div class="product-detail-top-right">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <form action="{{ route('add.cart', $product->id) }}" method="POST">
                        @csrf
                        <div class="product-detail-main-slider">
                            <div class="slider-nav-container">
                                <div class="product-img-gallery-area slider-nav">
                                    @foreach ($product->images as $images)
                                        <div class="product-img-gallery-inner-area">
                                            <img class="img-fluid product-img-gallery" src="/{{ $images->image }}"
                                                alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="slider-for-container">
                                <div class="slider-for">
                                    @foreach ($product->images as $images)
                                        <div class="product-detail-img-area position-relative">
                                            <img class="product-detail-img img-fluid" src="/{{ $images->image }}"
                                                alt="">
                                            <label class="featured-pro-label">19% off</label>
                                            <a href="#" data-fancybox="gallery" data-caption="Caption Images 1">
                                                <button type="button" class="full-img"><i
                                                        class="bi bi-arrows-fullscreen"></i></button>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-12 col-lg-5 pl-30px">
                    <div class="product-detail-text-area">
                        <h1 class="product-detail-title">{{ $product->name }}</h1>
                        <div class="product-detail-price-area">
                            <span class="product-detail-price">${{ $product->price }}</span>
                            <span class="product-detail-cut-price">$159.00</span>
                        </div>
                        <p class="product-detail-descrip">This regulator has a rolled diaphragm and high flow rate with
                            reduced pressure drop.It has an excellent degree of condensation.</p>
                        <div class="availability-area">
                            <span>Availability: </span>
                            <span>In Stock</span>
                        </div>
                        @php
                            $printedAttributes = [];
                        @endphp
                        @foreach ($product->attributes as $attribute)
                            @unless (in_array($attribute->id, $printedAttributes))
                                @php
                                    $printedAttributes[] = $attribute->id;
                                @endphp
                                <div class="color-area-size">
                                    <label> {{ $attribute->name }} <span></span></label>
                                    <div class="size-area">
                                        <select name="variant[]" class="form-control" id="">
                                            @foreach ($product->variants as $var)
                                                @if ($var->attribute_id == $attribute->id)
                                                    <option value="{{ $var->id }}">{{ $var->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('variant*')
                                            <span class="text-danger">{{ $message }} </span>
                                        @enderror
                                    </div>
                                @endunless
                            </div>
                        @endforeach
                        <div class="d-flex align-items-center mt-4 mb-4">
                            <div id="main">
                                <button id="decrement" class="minus plus-minus">_</button>
                                <input type="number" name="quantity" id="displayCounter" value="1"
                                    class="overflow-auto border-0 ps-5">
                                @error('quantity')
                                    <span class="text-danger">{{ $message }} </span>
                                @enderror
                                <button id="increment" class=" plus-minus">+</button>
                            </div>
                            <a href="{{ route('add.cart', $product->id) }}" class="product-detail-cart-btn-area">
                                <button type="submit" class="product-detail-cart-btn">add to cart</button>
                            </a>
                        </div>

                        </form>
                        @if (
                            !auth()->user()
                                ?->checkWishlist($product->id))
                            <div class="wishlist-btn-area d-flex align-items-center">
                                <form action="{{ url('wishlist') . '/' . $product->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="wishlist-btn"><i class="bi bi-heart"></i>Add to
                                        Wishlist</button>
                                </form>
                                <button class="wishlist-btn size-chart-popup"><i class="bi bi-bar-chart"></i>Size
                                    Guide</button>
                            </div>
                        @else
                            <div class="wishlist-btn-area d-flex align-items-center">
                                <p>Already added to wishlist</p>
                            </div>
                        @endif
                        <div class="category-tag-area">
                            <div class="category-tag-inner-area">
                                <span>SKU: </span>
                                <label>N/A</label>
                            </div>
                            <div class="category-tag-inner-area">
                                <span>Category: </span>
                                @foreach ($product->categories as $category)
                                    <a href="shop.php">{{ $category->name }}</a>
                                @endforeach
                            </div>
                            <div class="category-tag-inner-area">
                                <span>Tags: </span>
                                <a href="shop.php">Gold,</a>
                                <a href="shop.php">Earnings</a>
                            </div>
                        </div>
                        <div class="product-detail-social-icon">
                            <span>share:</span>
                            <ul class="social-icon-inner-area">
                                <li class="social-icon">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                                </li>
                                <li class="social-icon">
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="pro-detail-hr">

    <section class="descrip-review">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="descrip-review-tabs-area">
                        <li data-tab-target="#descrip" class="active">
                            <button type="button" class="descrip-review-btn">Description</button>
                        </li>
                        <li data-tab-target="#additional-info" class="">
                            <button type="button" class="descrip-review-btn">Additional information</button>
                        </li>
                        <li data-tab-target="#review" class="">
                            <button type="button" class="descrip-review-btn">Reviews
                                @php
                                    $countOfReviews = [];
                                @endphp
                                @foreach ($reviews as $review)
                                    @if ($review->product_id === $product->id)
                                        @php
                                            $countOfReviews[] = $review->product_id;
                                        @endphp
                                    @endif
                                @endforeach
                                ( {{ count($countOfReviews) > 0 ? count($countOfReviews) : 0 }} )
                            </button>
                            {{-- <button type="button" class="descrip-review-btn">Reviews
                                @php
                                    $countOfReviews = [];
                                @endphp
                                @foreach (auth()->user()->reviews as $review)
                                    @if ($review->product_id === $product->id)
                                        @php
                                            $countOfReviews[] = $review->product_id;
                                        @endphp
                                    @endif
                                @endforeach
                                    ( {{ count($countOfReviews) > 0 ? count($countOfReviews) : 0  }} )
                            </button> --}}
                        </li>
                    </ul>
                </div>
                <div class="description-content active" id="descrip" data-tab-content>
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-12">
                            <div class="description-para-area">
                                <p>Cookie dragee croissant dessert. Powder marshmallow pie wafer dessert sweet roll tootsie
                                    roll cupcake. Tart oat cake lollipop lollipop halvah chupa chups bonbon sugar plum
                                    dessert. Carrot cake marzipan cupcake cotton candy powder wafer sugar plum powder
                                    powder.</p>
                                <p>Cookie dragee croissant dessert. Powder marshmallow pie wafer dessert sweet roll tootsie
                                    roll cupcake. Tart oat cake lollipop lollipop halvah chupa chups bonbon sugar plum
                                    dessert. Carrot cake marzipan cupcake cotton candy powder wafer sugar plum powder
                                    powder.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description-content" id="review" data-tab-content>
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-12">
                            <form action="{{ route('review.store') }}" class="review-form" method="post">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="product_id">
                                <div class="review-inco-area">
                                    <h2 class="review-area-title">Reviews</h2>
                                    @php
                                        $reviewExist = false;
                                    @endphp
                                    @foreach ($reviews as $review)
                                        @if ($review->product_id === $product->id)
                                            @php $reviewExist = true; @endphp
                                        @endif
                                    @endforeach
                                    @if (!$reviewExist)
                                        {!! '<p class="review-area-para">There are no reviews yet.</p>' !!}
                                    @endif
                                </div>
                                @foreach ($reviews as $review)
                                    @if ($review->product_id === $product->id)
                                        <div class="review-inco-area d-flex align-items-center">
                                            <div class="pe-4">
                                                <img src="{{ $review->user->image }}" width="26"
                                                    class="rounded-circle" alt="" srcset="">
                                            </div>
                                            <div>
                                                <p class="review-area-para mt-2 fw-bold">
                                                    {{ auth()->user()->id === $review->user->id ? 'You' : $review->user->name }}
                                                </p>
                                                <p class="review-area-para mt-2">{{ $review->review }}</p>
                                                <p class="review-area-para mt-2">rating: {{ $review->rating }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                {{-- @foreach (auth()->user()->reviews as $review)
                                    @if ($review->product_id === $product->id)
                                    <div class="review-inco-area d-flex align-items-center">
                                        <div class="pe-4">
                                            <img src="{{ auth()->user()->image }}" width="26" class="rounded-circle" alt="" srcset="">
                                        </div>
                                        <div>
                                            <p class="review-area-para mt-2 fw-bold">{{ auth()->user() ? "You" : auth()->user()->name }}</p>
                                            <p class="review-area-para mt-2">{{ $review->review }}</p>
                                            <p class="review-area-para mt-2">rating: {{ $review->rating }}</p>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach --}}
                                <div class="review-inco-area">
                                    <h3 class="review-area-small-title">Your Rating *</h3>
                                    <div class="d-flex">
                                        <div class="rate">
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label for="star1" title="text">1 star</label>
                                            <input type="radio" id="star1" name="rating" value="1" />
                                        </div>
                                    </div>
                                    @error('rating')
                                        <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="review-inco-area">
                                    <h3 class="review-area-small-title">Your Review *</h3>
                                    <textarea class="review-text-area" name="review" id="" cols="30" rows="10"></textarea>
                                    @error('review')
                                        <span class="text-danger py-2 fs-4">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="review-inco-area">
                                    <button type="submit" class="review-sub-btn">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="description-content " id="additional-info" data-tab-content>
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-12">
                            <div class="my-table">
                                <table class="additional-info-table">
                                    <tr class="">
                                        <th class="order-th-title">WEIGHT</th>
                                        <td class="order-td-sb-title">1.5 kg</td>
                                    </tr>
                                    <tr>
                                        <th class="order-th-title">DIMENSIONS</th>
                                        <td class="order-td-sb-title">90 × 60 × 90 cm</td>
                                    </tr>
                                    <tr>
                                        <th class="order-th-title">COMPOSITION</th>
                                        <td class="order-td-sb-title">100% Pure</td>
                                    </tr>
                                    <tr>
                                        <th class="order-th-title">COLOR</th>
                                        <td class="order-td-sb-title">Silver, Gold</td>
                                    </tr>
                                    <tr>
                                        <th class="order-th-title">SIZE</th>
                                        <td class="order-td-sb-title">S, M, L</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="may-also-like-sec">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-1">
                    <hr class="pro-detail-hr">
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <h1 class="product-det-sec-title">You may also like…</h1>
                </div>
                <div class="col-1">
                    <hr class="pro-detail-hr">
                </div>
            </div>
            <div class="row">
                @foreach ($likeProducts as $likeProduct)
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="may-also-like">
                            <div class="featured-pro-inner">
                                <label class="featured-pro-label">19% off</label>
                                <div class="">
                                    @php
                                        $displayedImages = [];
                                    @endphp
                                    @foreach ($likeProduct->images as $image)
                                        @unless (in_array($image->id, $displayedImages))
                                            @php
                                                $displayedImages[] = $image->id;
                                            @endphp
                                            <a class="featured-img-area"
                                                href="{{ route('product.detail', $likeProduct->id) }}">
                                                <img class="also-sec-img img-fluid" src="/{{ $image->image }}"
                                                    alt="">
                                            </a>
                                        @endunless
                                    @endforeach
                                </div>
                                <div class="featured-pro-btn">
                                    <button type="button" class=""><i class="bi bi-heart"></i></button>
                                    <button type="button" class=""><i class="bi bi-search"></i></button>
                                </div>
                                <div class="featured-text-area">
                                    @foreach ($likeProduct->categories as $category)
                                        <a class="pro-earns" href="shop.php">{{ $category->name }}</a>
                                        <a href="product-detail-2.php">
                                            <h2 class="featured-pro-title">{{ $category->description }}</h2>
                                        </a>
                                    @endforeach
                                    <div class="d-flex align-items-baseline">
                                        <span class="price">${{ $likeProduct->price }}</span>
                                        <span
                                            class="cut-price">${{ $likeProduct->price > !$likeProduct->price ? $likeProduct->price + 100 : $likeProduct->price }}</span>
                                    </div>
                                    <a class="add-cart" href="cart.phcart.php">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="related-pro-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-1">
                    <hr class="pro-detail-hr">
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <h1 class="product-det-sec-title">Related products</h1>
                </div>
                <div class="col-1">
                    <hr class="pro-detail-hr">
                </div>
            </div>
            <div class="row">
                <div class="position-relative">
                    <ul class="related-pro-slider">
                        <li class="featured-pro">
                            <div class="featured-pro-inner">
                                <label class="featured-pro-label">19% off</label>
                                <div class="">
                                    <a class="fea-img-sec featured-img-area" href="product-detail-2.php">
                                        @foreach ($product->images as $image)
                                            <img class="img-fluid" src="/{{ $image->image }}" alt="">
                                        @endforeach
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
                    </ul>
                    <div class="banner-slider-btn-area">
                        <button class="banner-slider-btn featured-slider-pre featured-one-pre"><i
                                class="fa-solid fa-angle-left"></i></button>
                        <button class="banner-slider-btn featured-slider-next featured-one-next"><i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Recently-Viewed-sec">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-1">
                    <hr class="pro-detail-hr">
                </div>
                <div class="col-lg-3 col-12 col-md-6">
                    <h1 class="product-det-sec-title">Recently Viewed</h1>
                </div>
                <div class="col-1">
                    <hr class="pro-detail-hr">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="may-also-like">
                        <div class="featured-pro-inner">
                            <label class="featured-pro-label">19% off</label>
                            <div class="">
                                <a class="featured-img-area rec-view-imgs" href="product-detail-2.php">
                                    {{-- <img class="img-fluid" src="./assets/images/featured-pro-img-18.jpg" alt=""> --}}
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="size-chart-popup-area">
        <div class="size-chart-popup-inner-area">
            <button class="chart-popup-close"><i class="fa-solid fa-xmark"></i></button>
            <h2>Size Chart</h2>
            <div class="my-sizetable">
                <table class="sizetable">
                    <tr class="">
                        <th class="order-th-title">Ring Size</th>
                        <th class="order-th-title">(mm)</th>
                        <th class="order-th-title">(inches*)</th>
                    </tr>
                    <tr>
                        <td class="order-td-sb-title">6</td>
                        <td class="order-td-sb-title">45.9</td>
                        <td class="order-td-sb-title">1.81</td>
                    </tr>
                    <tr>
                        <td class="order-td-sb-title">7</td>
                        <td class="order-td-sb-title">47.1</td>
                        <td class="order-td-sb-title">1.86</td>
                    </tr>
                    <tr>
                        <td class="order-td-sb-title">8</td>
                        <td class="order-td-sb-title">48.1</td>
                        <td class="order-td-sb-title">1.89</td>
                    </tr>
                    <tr>
                        <td class="order-td-sb-title">9</td>
                        <td class="order-td-sb-title">49.0</td>
                        <td class="order-td-sb-title">1.93</td>
                    </tr>
                    <tr>
                        <td class="order-td-sb-title">10</td>
                        <td class="order-td-sb-title">50.0</td>
                        <td class="order-td-sb-title">1.97</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/user/js/product-detail-2.js') }}"></script>
    @endpush
    {{-- <script>
        $(document).ready(function() {
            $(document).on('click', '#decrement', function(e) {
                e.preventDefault();
                let inputValue = $(this).next();
                if (parseInt(inputValue.val()) > 1) {
                    let newDecVal = inputValue.val() - 1;
                    inputValue.val(newDecVal);
                    // let subTotal = parseInt($('#subTotal').val());
                    // let finalSubTotal = subTotal
                }
            });

            $(document).on('click', '#increment', function(e) {
                e.preventDefault();
                let inputValue = $(this).prev();
                if (inputValue.val() != 0) {
                    let newDecVal = parseInt(inputValue.val()) + 1;
                    inputValue.val(newDecVal);
                }
            });
        });
    </script> --}}
@endsection
