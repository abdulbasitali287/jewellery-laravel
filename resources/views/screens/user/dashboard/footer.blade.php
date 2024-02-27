<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Shop Highlights</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="../shop.php">Bracelets</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Charm & Dangles</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Earnings</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Necklaces</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shop.php">Rings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Customer Service</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="../about-us.php">About Us</a>
                            </li>
                            <li class="footer-link">
                                <a href="../faq.php">FAQs</a>
                            </li>
                            <li class="footer-link">
                                <a href="../contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Quick Links</h2>
                        <ul class="footer-list-area">
                            <li class="footer-link">
                                <a href="../payment.php">Payment</a>
                            </li>
                            <li class="footer-link">
                                <a href="../shipping-returns.php">Shipping & Returns</a>
                            </li>
                            <li class="footer-link">
                                <a href="../privacy-policy.php">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="footer-inner-area">
                        <h2 class="footer-inner-title">Newsletter</h2>
                        <p>Sign up for our mailing list to get latest Updates and offers.</p>
                        <form class="email-form">
                            <div class="footer-email-area">
                                <input class="footer-email-input" placeholder="Email Address" type="text" name="" id="">
                            </div>
                            <div class="email-btn-area">
                                <button class="email-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-3 col-lg-4">
                    <div class="footer-logo-area">
                        <img class="img-fluid" src="./assets/images/footer-logo-img.png" alt="">
                    </div>
                </div>
                <div class="col-12  col-md-9 col-lg-7">
                    <div class="footer-btm-area">
                        <!--<ul class="footer-btn-links-area">-->
                        <!--    <li class="footer-link">-->
                        <!--        <a href="payment.php">Payment</a>-->
                        <!--    </li>-->
                        <!--    <li class="footer-link">-->
                        <!--        <a href="shipping-returns.php">Shipping & Returns</a>-->
                        <!--    </li>-->
                        <!--    <li class="footer-link">-->
                        <!--        <a href="privacy-policy.php">Privacy Policy</a>-->
                        <!--    </li>-->
                        <!--</ul>-->
                        <p>Design & Developed by <a target="blank" href="https://www.webdesignglory.com/">WED DESIGN GLORY</a> © Copyright 2023 – Jeweldor</p>
                    </div>
                </div>
                <div class="col-1">
                    <div class="btm-top-btn-area">
                        <button type="button" id="btm-top-btn"><i class="fa-solid fa-angle-up"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </footer>    

    
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="./assets/js/index.js"></script>
 <script> 


const dshCurrentPath = window.location.href.split("/");
const dshPath = dshCurrentPath[dshCurrentPath.length - 1];

const dshNavLinks = document.querySelectorAll(".side-bar-link");

dshNavLinks.forEach((link) => {
  link.classList.remove("active");

  if (link.getAttribute("href") === dshPath) {
    link.classList.add("active");
  }
});

        $(document).ready(() => {
  
  const backToTop = $('#btm-top-btn')
  const amountScrolled = 300
  
  $(window).scroll(() => {
    $(window).scrollTop() >= amountScrolled 
      ? backToTop.fadeIn('fast') 
      : backToTop.fadeOut('fast')
  })
  
  backToTop.click(() => {
    $('body, html').animate({
      scrollTop: 0
    }, 600)
    return false
  })
});



    </script>

</body>
</html>