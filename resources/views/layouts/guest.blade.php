<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="{{ asset('assets/user/images/header-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/user/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/user/css/responsive.css') }}">
    @stack('styles')
</head>

<body>

@yield('auth-content')

<script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/user/js/slick.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    // const joinPopup = document.querySelector(".join-family-popup-wrap");
    // const joinPopupCls = document.querySelector(".join-fm-clos-pop");


    // setTimeout(() => {
    //     joinPopup.classList.add("active");
    // }, 10000);

    // joinPopupCls.addEventListener('click', function() {
    //     joinPopup.classList.remove("active");
    // });



    $(document).ready(() => {

        const backToTop = $('#btm-top-btn')
        const amountScrolled = 300

        $(window).scroll(() => {
            $(window).scrollTop() >= amountScrolled ?
                backToTop.fadeIn('fast') :
                backToTop.fadeOut('fast')
        })

        backToTop.click(() => {
            $('body, html').animate({
                scrollTop: 0
            }, 600)
            return false
        })
    });
</script>
@stack('scripts')
</body>

</html>
