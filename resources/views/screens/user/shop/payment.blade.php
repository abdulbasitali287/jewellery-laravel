@extends('layouts.app')
@section('content')
<section class="payment-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-btm-area mb-5">
                    <a class="shop-banner-text" href="#">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span class="shop-banner-text color">Payment</span>
                </div>
            </div>
            <div class="col-12">
                <h1 class="about-us-title text-center mb-4">Payment</h1>
                <p class="cont-info-detail text-center mb-5">Thank you for choosing Jeweldor for your jewelry purchase. We offer a variety of secure and convenient payment methods to make your shopping experience as smooth as possible. Below, you'll find detailed information on how to make a payment for your order.</p>
            </div>
            <div class="col-12">
                <div class="faqs-area">
                    <div class="row">
                        <div class="col-lg-5 col-12 mt-5">
                            <div class="d-flex align-items-center res-center">
                                <h3 class="faq-sb-hd">Accepted Payment Methods:</h3>
                                <span class="faq-sep-right"></span>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 mt-5">
                            <div class="shopping-accordion-container">
                                <div class="shopping-set set">
                                    <h3 class="active">
                                        Credit Cards:
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="shopping-content content" style="display: block;">
                                        <p>We accept all major credit cards, including Visa, MasterCard, American Express, and Discover. Rest assured that your credit card information is processed securely.</p>
                                    </div>
                                </div>
                                <div class="shopping-set set">
                                    <h3>
                                        Debit Cards
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="shopping-content content">
                                        <p>You can use your debit card for a hassle-free payment experience. We accept debit cards from major banks.</p>
                                    </div>
                                </div>
                                <div class="shopping-set set">
                                    <h3>
                                        PayPal
                                        <i class="fa fa-plus"></i>
                                    </h3>
                                    <div class="shopping-content content">
                                        <p>PayPal is a convenient and secure way to make payments. You can link your PayPal account during checkout.</p>
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



<script>
$(document).ready(function () {
  $(".shopping-set > h3").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).siblings(".shopping-content").slideUp(200);
    } else {
      $(".shopping-set > h3").removeClass("active");
      $(this).addClass("active");
      $(".shopping-content").slideUp(200);
      $(this).siblings(".shopping-content").slideDown(200);
    }
  });
});

$(document).ready(function () {
  $(".red-block-accordion__row-internal-title").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).siblings(".red-block-accordion__row-content").slideUp(200);
    } else {
      $(".red-block-accordion__row-internal-title").removeClass("active");
      $(this).addClass("active");
      $(".red-block-accordion__row-content").slideUp(200);
      $(this).siblings(".red-block-accordion__row-content").slideDown(200);
    }
  });
});

</script>
@endsection
