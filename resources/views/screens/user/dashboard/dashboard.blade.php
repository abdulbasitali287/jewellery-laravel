@extends('layouts.dashboard')
@section('dashboard-content')
<section class="dashboard-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-btm-area">
                    <a class="shop-banner-text" href="../index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a class="shop-banner-text" href="../shop.php">Shop</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span class="shop-banner-text color">My Account</span>
                </div>
                <button class="dsh-sidebar-btn"><i class="fa-solid fa-bars"></i></button>
                <div class="text-center mt-5 mb-5">
                    <h1 class="shop-banner-title">My account</h1>
                </div>
            </div>
            <div class="dashboard-main-area">
                @include('screens.user.dashboard.Side-bar')
                <div class="dashboard-right-area">
                    <div class="dashboard-side">
                        <p class="dashbrd-top-para">Hello <span>User</span> (not <span>Hello User?</span> <a href="#">Log out</a> )</p>
                        <p class="dashbrd-top-para">From your account dashboard you can view your <a href="order.php">recent orders</a>, manage your <a href="addresses.php">shipping and billing addresses</a>, and <a href="account-detail.php">edit your password and account details.</a></p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="total-ordrinvoice-product-area">
                                <div class="">
                                    <h2 class="total-order-title">Total Orders</h2>
                                    <h3 class="total-order-qua">{{ count(auth()->user()->orders) }}</h3>
                                    {{-- <i class="fa-solid fa-arrow-down"></i>
                                    <span class="total-order-percen">13.8%</span> --}}
                                </div>
                                <div class="">
                                    <img src="{{ asset('assets/user/images/bar-chart.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="total-ordrinvoice-product-area bg-head">
                                <div class="">
                                    <h2 class="total-order-title">Products</h2>
                                    <h3 class="total-order-qua">
                                        {{-- @dd(auth()->user()->orders) --}}
                                        @php
                                            $sumOfProductQty = [];
                                        @endphp
                                        @foreach (auth()->user()->orders as $order)
                                        @foreach ($order->products as $product)
                                        @php
                                            $sumOfProductQty[] = $product->pivot->quantity;
                                        @endphp
                                            {{-- @dd($order->products[0]->pivot->quantity) --}}
                                            @endforeach
                                            {{-- {{ count($order->products) }} --}}
                                            @endforeach
                                            {{ array_sum($sumOfProductQty) }}
                                    </h3>
                                    {{-- <i class="fa-solid fa-arrow-down"></i>
                                    <span class="total-order-percen">13.8%</span> --}}
                                </div>
                                <div class="">
                                    <img src="{{ asset('assets/user/images/bar-chart.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="user-dashboard-table dashboard-table">
                                <h1 class=cart-title>Carts <span>(Listings)</span></h1>
                                <div class="table-parent">
                                    <div class="">
                                    <table class="datatables-ajax table-responsive table-stripe table" id="orders-table">
                                        <thead>
                                            <tr>
                                                <th>Sr. #</th>
                                                <th>Product</th>
                                                <th>Product Desc</th>
                                                <th>Order #</th>
                                                <th>Price</th>
                                                <th>Items</th>
                                                <th>Total</th>
                                                <th class="after-before-none"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td><img class="img-fluid table-product-img" src="{{ asset('assets/user/images/featured-pro-img-5.jpeg') }}" alt="" srcset=""></td>
                                                <td>Lorem Ipsum Dummy Text</td>
                                                <td>123456</td>
                                                <td>$400.00</td>
                                                <td>3 items</td>
                                                <td data-order="1000">$400.00</td>
                                                <td><i class="fa-solid fa-eye"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                <div class="bottom-area">
                                    <a class="cont-shop-a" href="#">Continue Shopping</a>
                                    <a class="checkout" href="../checkout.php">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(function() {

        $(document).on("click", ".popup-cls-btn", function() {
            $('.popup-wrap').removeClass('active')
        });

        $('#orders-table').DataTable({
            processing: true,
            language: {
                paginate: {
                    previous: '<i class="fa-solid fa-angle-left"></i>',
                    next: '<i class="fa-solid fa-angle-right"></i>'
                }
            },
            columns: [{
                    data: 'Sr'
                },
                {
                    data: 'Product'
                },
                {
                    data: 'Product_Desc'
                },
                {
                    data: 'Order'
                },
                {
                    data: 'Price'
                },
                {
                    data: 'Items'
                },
                {
                    data: 'Total'
                },
                {
                    data: ''
                },
            ],
        });
    });
</script>
@endsection
