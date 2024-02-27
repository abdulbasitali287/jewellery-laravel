@extends('layouts.app')
@section('content')
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-detail-top">
                    <a class="product-detail-top-link" href="index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span>FAQ</span>
                </div>
            </div>
            <div class="col-12 mt-5 mb-5">
                <h1 class="shop-banner-title text-center">FAQ</h1>
                <p class="sec-top-para">If you have other burning questions we weren’t able to address here, feel free to email.</p>
            </div>
            <div class="col-12">
                <div class="faqs-area">
                    <div class="row">
                        <div class="col-lg-5 col-12 mt-5">
                            <div class="d-flex align-items-center res-center">
                                <h3 class="faq-sb-hd">Shopping</h3>
                                <span class="faq-sep-right"></span>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 mt-5">
                            <div class="shopping-accordion-container">
                                <div class="shopping-set set">
                                    <h3 class="active">
                                        How do I browse jewelry on Jeweldor?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="shopping-content content" style="display: block;">
                                        <p>To browse our jewelry collections, simply navigate to the "Shop" section on our website. You can filter by category, price range, and more to find the perfect piece.</p>
                                    </div>
                                </div>
                                <div class="shopping-set set">
                                    <h3>
                                        Can I customize jewelry on Jeweldor?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="shopping-content content">
                                        <p>Yes, we offer customization options for select jewelry pieces. Contact our customer support for details on how to personalize your jewelry.</p>
                                    </div>
                                </div>
                                <div class="shopping-set set">
                                    <h3>
                                        Is it safe to shop on Jeweldor?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="shopping-content content">
                                        <p>Absolutely. We take your security seriously. Our website employs the latest encryption technology to ensure your personal information is secure when you shop with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="faqs-area">
                    <div class="row">
                        <div class="col-lg-5 col-12 mt-5">
                            <div class="d-flex align-items-center res-center">
                                <h3 class="faq-sb-hd">Payment</h3>
                                <span class="faq-sep-right"></span>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 mt-5">
                            <div class="payment-accordion-container">
                                <div class="payment-set set">
                                    <h3 class="active">
                                        What payment methods do you accept?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="payment-content content" style="display: block;">
                                        <p>We accept a range of payment methods, including major credit cards, debit cards, and PayPal. You can find the full list at checkout.</p>
                                    </div>
                                </div>
                                <div class="payment-set set">
                                    <h3>
                                		Is my payment information secure?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="payment-content content">
                                        <p>Yes, we use industry-standard encryption to protect your payment information. Your data is safe with us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="">
                    <div class="row">
                        <div class="col-lg-5 col-12 mt-5">
                            <div class="d-flex align-items-center res-center">
                                <h3 class="faq-sb-hd">Orders & Returns</h3>
                                <span class="faq-sep-right"></span>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 mt-5">
                            <div class="order-return-accordion-container">
                                <div class="order-return-set set">
                                    <h3 class="active">
                                        How do I place an Order?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="order-return-content content" style="display: block;">
                                        <p>To place an order, simply select your desired item, add it to your cart, and proceed to checkout. Follow the steps to provide your shipping and payment information.</p>
                                    </div>
                                </div>
                                <div class="order-return-set set">
                                    <h3>
                                        What is your return policy?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="order-return-content content">
                                        <p>Our return policy allows returns within 30 days of the delivery date for items in their original, unworn condition with all tags and packaging. For more details, visit our Returns page.</p>
                                    </div>
                                </div>
                                <div class="order-return-set set">
                                    <h3>
                                        How do I initiate a return or exchange?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="order-return-content content">
                                        <p>To initiate a return or exchange, contact our customer support team. They will guide you through the process and provide a Return Authorization (RA) number.</p>
                                    </div>
                                </div>
                                <div class="order-return-set set">
                                    <h3>
                                        What should I do if I receive a damaged item?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="order-return-content content">
                                        <p>If your item arrives damaged or defective, please contact us immediately. We will assist you in resolving the issue and arrange for a replacement or refund as needed.</p>
                                    </div>
                                </div>
                                <div class="order-return-set set">
                                    <h3>
                                        What is the refund process for returns?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="order-return-content content">
                                        <p>Once we receive and inspect your returned item, we will process your refund within [X] business days. The refund will be issued to your original payment method.</p>
                                    </div>
                                </div>
                                <div class="order-return-set set">
                                    <h3>
                                        Can I track my order?
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="order-return-content content">
                                        <p>Yes, you can track your order through your Jeweldor account. We provide tracking information once your order is shipped.</p>
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

<script src="{{ asset('assets/user/js/faq.js') }}"></script>
@endsection
