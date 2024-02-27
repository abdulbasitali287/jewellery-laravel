// Fancybox Config
$('[data-fancybox="gallery"]').fancybox({
  buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
  loop: false,
  protect: true,
});

var productCounter = {
  count: 0,
  incrementCounter: function () {
    if (this.count < 100) {
      return (this.count = this.count + 1);
    } else {
      alert("maximum limit reached, you can buy only 10 items");
      return this.count;
    }
  },
  decrementCounter: function () {
    if (this.count > 0) {
      return (this.count = this.count - 1);
    } else {
      return (this.count = 0);
    }
  },
};

var displayCout = document.getElementById("displayCounter");
displayCout.innerHTML = 1;
document.getElementById("increment").onclick = function () {
  displayCout.innerHTML = productCounter.incrementCounter();
};
document.getElementById("decrement").onclick = function () {
  displayCout.innerHTML = productCounter.decrementCounter();
};

const shopTabs = document.querySelectorAll("[data-tab-target]");
const shopTabContents = document.querySelectorAll("[data-tab-content]");

shopTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    shopTabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    shopTabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});

$(".related-pro-slider").slick({
  dots: true,
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

const chartPopupClose = document.querySelector(".chart-popup-close");
const sizeChartPopupArea = document.querySelector(".size-chart-popup-area");
const sizeChartPopup = document.querySelector(".size-chart-popup");

sizeChartPopup.addEventListener("click", () => {
  sizeChartPopupArea.classList.add("active");
});

chartPopupClose.addEventListener("click", () => {
  sizeChartPopupArea.classList.remove("active");
});

const previewImg = document.querySelector(".preview-img");
const detailImages = document.querySelectorAll(".product-img-gallery");
const detailMainImg = document.querySelector(".product-detail-img");

detailImages.forEach((img) => {
  img.addEventListener("click", () => {
    detailMainImg.src = img.src;
    previewImg.href = img.src;
  });
});

detailImages.forEach((detailImage) => {
  detailImage.addEventListener("click", () => {
    const isActive = detailImage.classList.contains("active");

    detailImages.forEach((detailImg) => {
      detailImg.classList.remove("active");
    });

    if (!isActive) {
      detailImage.classList.add("active");
    }
  });
});




$(".slider-for").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: ".slider-nav",
});
$(".slider-nav").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: ".slider-for",
  dots: false,
  vertical: true,
  centerMode: true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        vertical: false,
        slidesToShow: 4,
      },
    },
  ],
});
