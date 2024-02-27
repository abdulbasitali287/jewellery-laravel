// banner slider

$(".banner-slider-area").slick({
  dots: true,
  infinite: true,
  autoplay: true,
  fade: true,
  autoplaySpeed: 3000,
  cssEase: "linear",
  arrows: true,
  prevArrow: $(".banner-slider-pre"),
  nextArrow: $(".banner-slider-next"),
});

$(".featured-pro-slider-area-one").slick({
  dots: false,
  autoplaySpeed: 2500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  prevArrow: $(".featured-one-pre"),
  nextArrow: $(".featured-one-next"),
  responsive: [
    {
      breakpoint: 1201,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 1023,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".featured-pro-slider-area-two").slick({
  dots: true,
  autoplaySpeed: 2500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  prevArrow: $(".featured-two-pre"),
  nextArrow: $(".featured-two-next"),
  responsive: [
    {
      breakpoint: 1201,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 1023,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".featured-pro-slider-area-three").slick({
  dots: true,
  autoplaySpeed: 2500,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  prevArrow: $(".featured-three-pre"),
  nextArrow: $(".featured-three-pre"),
  responsive: [
    {
      breakpoint: 1201,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 1023,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".Journal-sec-slider-area").slick({
  dots: true,
  autoplaySpeed: 2500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  prevArrow: $(".Journal-slider-pre"),
  nextArrow: $(".Journal-slider-next"),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 1023,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".testimonial-slider").slick({
  dots: true,
  autoplaySpeed: 2500,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows: true,
  prevArrow: $(".tes-slider-pre"),
  nextArrow: $(".tes-slider-next"),
});

$(".insta-follow-slider").slick({
  dots: false,
  autoplaySpeed: 2500,
  slidesToShow: 5,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: "120px",
  autoplay: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 1365,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 1023,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

const tabs = document.querySelectorAll("[data-tab-target]");
const tabContents = document.querySelectorAll("[data-tab-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    $(".featured-pro-slider-area-one").slick("refresh");
    $(".featured-pro-slider-area-two").slick("refresh");
    $(".featured-pro-slider-area-three").slick("refresh");
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});
