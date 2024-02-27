@extends('layouts.app')
@section('content')
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-detail-top">
                    <a class="product-detail-top-link" href="index.php">Home</a>
                    <i class="fa-solid fa-angle-right"></i>
                    <span>Contact</span>
                </div>
            </div>
            <div class="col-12 mt-5 mb-5">
                <h1 class="shop-banner-title text-center">Contact</h1>
                <p class="sec-top-para">Click on your neares store location below to set the road on Google Map.</p>
            </div>
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.546467503342!2d-0.12209412254901376!3d51.50318971100996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2s!4v1699382781066!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="contact-info-area">
                    <i class="bi bi-geo-alt"></i>
                    <h3 class="contact-info-title">OUR STORE</h3>
                    <p class="cont-info-detail">
                        7021 Washington SQ. <br> South New York, NY 10012
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="contact-info-area">
                    <i class="bi bi-telephone"></i>
                    <h3 class="contact-info-title">CONTACT INFO</h3>
                    <p class="cont-info-detail">
                    Telephone: 703.172.3412 <br> E-mail: hello@example.com
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="contact-info-area">
                    <i class="bi bi-alarm"></i>
                    <h3 class="contact-info-title">BUSNESS HOURS</h3>
                    <p class="cont-info-detail">
                    Monday - Sunday: <br> 09:00 am - 20:00 pm
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="con-bor-top">
                    <h1 class="shop-banner-title text-center">Have an question? Contact us!</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <form action="{{ url('contact') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="contact-field">
                                <input placeholder="Name" type="text" name="name" id="">
                                @error('name')
                                    <span class="text-danger py-3 fs-3">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-field">
                                <input placeholder="email" type="email" name="email" id="">
                                @error('email')
                                    <span class="text-danger py-3 fs-3">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="contact-field">
                                <input placeholder="subject" type="text" name="subject" id="">
                                @error('subject')
                                    <span class="text-danger py-3 fs-3">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="contact-field">
                                <textarea placeholder="Write Your Comment" name="message" id="" cols="30" rows="10"></textarea>
                                @error('message')
                                    <span class="text-danger py-3 fs-3">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="contact-field">
                                <button type="submit" class="con-sub-btn">send message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
