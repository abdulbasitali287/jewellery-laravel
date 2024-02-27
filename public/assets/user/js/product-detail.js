const days = document.getElementById("days");
const hours = document.getElementById("hours");
const minutes = document.getElementById("minutes");
const seconds = document.getElementById("seconds");

const currentYear = new Date().getFullYear;
const newYearTime = new Date("april 01 2024  00:00:00");

function updateCountdown() {
  const currentTime = new Date();
  const diff = newYearTime - currentTime;

  const d = Math.floor(diff / 1000 / 60 / 60 / 24);
  const h = Math.floor(diff / 1000 / 60 / 60) % 24;
  const m = Math.floor(diff / 1000 / 60) % 60;
  const s = Math.floor(diff / 1000) % 60;

  days.innerHTML = d;
  hours.innerHTML = h < 10 ? +h : h;
  minutes.innerHTML = m < 10 ? +m : m;
  seconds.innerHTML = s < 10 ? +s : s;
}
setInterval(updateCountdown, 1000);

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

$('[data-fancybox="gallery"]').fancybox({
  buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
  loop: false,
  protect: true,
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
  infinite:false,
  asNavFor: ".slider-for",
  dots: false,
  vertical: true,
  centerMode: true,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1414,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 768,
      settings: {
        vertical: false,
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 414,
      settings: {
        vertical: false,
        slidesToShow: 3,
      },
    },
  ],
});



