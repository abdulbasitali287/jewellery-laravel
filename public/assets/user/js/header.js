const currentPath = window.location.href.split("/");
const path = currentPath[currentPath.length - 1];

const navLinks = document.querySelectorAll(".nav-links");

navLinks.forEach((link) => {
  link.classList.remove("active");

  if (link.getAttribute("href") === path) {
    link.classList.add("active");
  }
});


const srchPopupOpen = document.querySelector('.srch-pop-open')
const srchPopup = document.querySelector('.search-popup-open')
const srchPopupCls = document.querySelector('.srch-pop-cls-btn')

srchPopupOpen.addEventListener('click' , () => {
  srchPopup.classList.add('active')
})

srchPopupCls.addEventListener('click' , () => {
  srchPopup.classList.remove('active')
})

const headMenuBtn = document.querySelector('.head-menu-btn')
const headMenu = document.querySelector('.navigation-area')
const headMenuClos = document.querySelector('.head-menu-clos') 

headMenuBtn.addEventListener('click' , () => {
  headMenu.classList.add('active')
})

headMenuClos.addEventListener('click' , () => {
  headMenu.classList.remove('active')
})

const topBarcls = document.querySelector('.top-bar-cls-btn')
const topBar = document.querySelector('.top-bar-area')


topBarcls.addEventListener('click' , () => {
  topBar.classList.add('active')
})