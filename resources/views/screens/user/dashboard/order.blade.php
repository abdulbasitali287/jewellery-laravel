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
                columns: [{
                        data: 'Sr'
                    },
                    {
                        data: 'PaymentId'
                    },
                    {
                        data: 'Payment_Type'
                    },
                    {
                        data: 'Order_Status'
                    },
                    {
                        data: 'Total_Amount'
                    },
                    {
                        data: 'Items'
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
                                                            <th>Sr</th>
                                                            <th>PaymentId</th>
                                                            <th>Payment Type</th>
                                                            <th>Order Status</th>
                                                            <th>Total Amount</th>
                                                            <th>Items</th>
                                                            <th class="after-before-none"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach (auth()->user()->orders as $order)
                                                            <tr>
                                                                <td>
                                                                    {{ $loop->iteration }}
                                                                </td>
                                                                <td>
                                                                    {{ $order->payment_id ?? '--' }}
                                                                </td>
                                                                <td>
                                                                    {{ $order->payment_type }}
                                                                </td>
                                                                <td>
                                                                    {{ $order->status }}
                                                                </td>
                                                                <td>
                                                                    {{ $order->amount_total }}
                                                                </td>
                                                                <td>
                                                                    {{ count($order->products) }}
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
