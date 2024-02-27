@extends('layouts.app')
@section('content')
    <section class="cart-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-btm-area">
                        <a class="shop-banner-text" href="index.php">Home</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <span class="shop-banner-text color">Wishlist</span>
                    </div>
                    <div class="text-center mt-5 mb-5">
                        <h1 class="shop-banner-title">Wishlist</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="my-table">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th class=""></th>
                                    <th class=""></th>
                                    <th class="">Product name</th>
                                    <th class="">Unit price</th>
                                    {{-- <th class="">Stock status</th> --}}
                                    <th class=""></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (auth()->user()->wishlists as $wishlist)
                                    @foreach ($wishlist->products as $product)
                                        <tr class="">
                                            <td class="">
                                                <form action="{{ url('destroy-wishlist') . '/' . $wishlist->id }}" method="post">
                                                    @csrf
                                                    <button class="product-detail-btn" type="submit"><i
                                                            class="fa-solid fa-xmark"></i></button>
                                                </form>
                                            </td>
                                            <td class="">
                                                <img class="img-fluid cart-img" src="/{{ $product->images[0]->image }}"
                                                    alt="">
                                            </td>
                                            <td class="product-name">{{ $product->name }}</td>
                                            <td class="product-price">
                                                <span>${{ $product->price }}</span>
                                                <span class="cut">$129.00</span>
                                            </td>
                                            {{-- <td class="instock">in stock</td> --}}
                                            <td class="">
                                                <a class="add-cart opa-1"
                                                    href="{{ url('product-detail') . '/' . $product->id }}">add to cart</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="wishlist-share-area">
                        <h1>Share on:</h1>
                        <div class="share-icons-area">
                            <a class="bg-fb" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a class="bg-twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a class="bg-pint" href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            <a class="bg-email" href="#"><i class="fa-solid fa-envelope"></i></a>
                            <a class="bg-whats" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
