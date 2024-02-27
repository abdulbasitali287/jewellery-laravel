const showCouponBtn = document.querySelector(".coupon-popup");
const showCoupon = document.querySelector(".billing-detail-form");

showCouponBtn.addEventListener("click", () => {
  showCoupon.classList.toggle("active");
});
