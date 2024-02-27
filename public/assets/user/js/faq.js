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

$(document).ready(function () {
  $(".payment-set > h3").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).siblings(".payment-content").slideUp(200);
    } else {
      $(".payment-set > h3").removeClass("active");
      $(this).addClass("active");
      $(".payment-content").slideUp(200);
      $(this).siblings(".payment-content").slideDown(200);
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

$(document).ready(function () {
  $(".order-return-set > h3").on("click", function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).siblings(".order-return-content").slideUp(200);
    } else {
      $(".order-return-set > h3").removeClass("active");
      $(this).addClass("active");
      $(".order-return-content").slideUp(200);
      $(this).siblings(".order-return-content").slideDown(200);
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
