@extends('layouts.dashboard')
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        const orderPopupWrap = document.querySelector('.order-popup-wrap')

        function orderPopup() {
            orderPopupWrap.classList.add('active')
        }

        function orderPopupClose() {
            orderPopupWrap.classList.remove('active')
        }

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
                columns: [
                    {
                        data: 'Product'
                    },
                    {
                        data: 'Product_Name'
                    },
                    {
                        data: 'Product_Variants'
                    },
                    {
                        data: 'Variant_Price'
                    },
                    {
                        data: 'Quantity'
                    },
                    {
                        data: ''
                    },
                ],
            });
        });
    </script>
@endpush
@section('dashboard-content')
    <div class="overflow-table">
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
                                <h3 class="dashboard-title">my orders</h3>
                                <p class="dashbrd-top-para">Your recent orders are displayed in the table below.</p>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="user-dashboard-table dashboard-table">
                                        <h1 class=cart-title>Customer Orders <span>(Listings)</span></h1>
                                        <div class="table-parent">
                                            <div class="">
                                                <table class="datatables-ajax table-responsive table-stripe table"
                                                    id="orders-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Product Name</th>
                                                            <th>Product Variants</th>
                                                            <th>Variant Price</th>
                                                            <th>Quantity</th>
                                                            <th class="after-before-none"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($order->products as $product)
                                                            <tr>
                                                                <td>
                                                                    <img src="/{{ $product->images[0]->image }}" alt="" height="50px" width="50px">
                                                                </td>
                                                                <td>
                                                                    {{ $product->name }}
                                                                </td>
                                                                <td>
                                                                    @foreach ($product->variants as $variant)
                                                                    {{ $variant->name }},
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach ($product->variants as $variant)
                                                                    {{ $variant->pivot->addon_price }},
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    {{ $product->pivot->quantity }}
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <div class="">
                                                                            <form
                                                                                action="{{ route('user.order.details', $order->id) }}"
                                                                                method="GET">
                                                                                <button type="submit"
                                                                                    class="ordr-vw-dlt-btn"><i
                                                                                        class="fa-solid fa-eye"
                                                                                        href=""></i></button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="">
                                                                            <button type="button"
                                                                                class="ordr-vw-dlt-btn"><i
                                                                                    class="fa-solid fa-trash"></i></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-popup-wrap">
                                    <div class="order-popup">
                                        <h2 class="order-popup-title">Order Details</h2>
                                        <p class="order-popup-para">Product id: <span>#SK2540</span></p>
                                        <p class="order-popup-para">Billing Name: <span>Neal Matthews</span></p>
                                        <div class="order-popup-table-area">
                                            <table class="table order-popup-table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Product Name</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="../assets/images/featured-pro-img-5.jpeg"
                                                                alt=""></td>
                                                        <td>Lorem Ipsum Dummy</td>
                                                        <td>$ 255</td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="../assets/images/featured-pro-img-5.jpeg"
                                                                alt=""></td>
                                                        <td>Lorem Ipsum Dummy</td>
                                                        <td>$ 255</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="total-calc-area">
                                            <div class="total-calc-inner-area">
                                                <span>Sub Total:</span>
                                                <span>$ 255</span>
                                            </div>
                                            <div class="total-calc-inner-area">
                                                <span>Shipping:</span>
                                                <span>Free</span>
                                            </div>
                                            <div class="total-calc-inner-area">
                                                <span>Total:</span>
                                                <span>$ 400</span>
                                            </div>
                                        </div>
                                        <div class="order-popup-close">
                                            <button type="button" onclick="orderPopupClose()">close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
