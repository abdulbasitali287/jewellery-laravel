@extends('layouts.app')
@section('content')
    <main>
        <section class="shop-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-text-area">
                            <h1 class="shop-banner-title">categories</h1>
                            <div class="banner-btm-area">
                                <a class="shop-banner-text" href="index.php">Home</a>
                                <i class="fa-solid fa-angle-right"></i>
                                <span class="shop-banner-text color">category</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shop-detail-section position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row align-items-center">
                        <div class="categories">
                            <div class="row">
                                @forelse ($categories as $category)
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="featured-pro">
                                            <div class="featured-pro-inner">
                                                <div class="">
                                                    <a class="featured-img-area" href="{{ url('category/products') . "/" . $category->id }}">
                                                        <img class="img-fluid" src="/{{ $category->image }}" alt="">
                                                        <h2 class="categories-title">{{ $category->name }}</h2>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p class="fs-4 fw-bold p-3">No records found...!</p>
                                @endforelse
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
                    </div>
                </div>
            </div>
        </section>
    </main>
<script src="./assets/js/shop.js"></script>
@endsection

