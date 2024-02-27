// shop screen js

let min = 200;
let max = 1000;

const calcLeftPosition = (value) => (100 / (1000 - 200)) * (value - 200);

$("#rangeMin").on("input", function (e) {
    const newValue = parseInt(e.target.value);
    if (newValue > max) return;
    min = newValue;
    $("#thumbMin").css("left", calcLeftPosition(newValue) + "%");
    $("#min").html(newValue);
    $("#line").css({
        left: calcLeftPosition(newValue) + "%",
        right: 100 - calcLeftPosition(max) + "%",
        });
});

$("#rangeMax").on("input", function (e) {
    const newValue = parseInt(e.target.value);
    console.log(calcLeftPosition(newValue))
    if (newValue < min) return;
    max = newValue;
  $("#thumbMax").css("left", calcLeftPosition(newValue) + "%");
  $("#max").html(newValue);
  $("#line").css({
    left: calcLeftPosition(min) + "%",
    right: 100 - calcLeftPosition(newValue) + "%",
  });
});

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

const shopFilterBtn = document.querySelector(".shop-fil-btn");
const shopFilter = document.querySelector(".shop-filter");
const shopFilterClose = document.querySelector('.shp-flter-btn')

shopFilterBtn.addEventListener("click", () => {
  shopFilter.classList.add("active");
});

shopFilterClose.addEventListener('click' , () => {
  shopFilter.classList.remove('active')
})
