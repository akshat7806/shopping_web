<?php include 'header.php' ?>


<main>

   <!-- breadcrumb-area-start -->
   <div class="breadcrumb__area pt-5 pb-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tp-breadcrumb__content">
                  <div class="tp-breadcrumb__list">
                     <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                     <span class="dvdr">/</span>
                     <span>Sign in</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- breadcrumb-area-end -->

   <!-- track-area-start -->
   <section class="track-area pb-40">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12">
               <div class="tptrack__product mb-40">
                  <div class="tptrack__content grey-bg">
                     <div class="tptrack__item d-flex mb-20">
                        <div class="tptrack__item-icon">
                           <i class="fal fa-user-unlock"></i>
                        </div>
                        <div class="tptrack__item-content">
                           <h4 class="tptrack__item-title">Login Here</h4>
                           <p>Your personal data will be used to support your experience throughout this website, to manage access to your account.</p>
                        </div>
                     </div>
                     <form method="POST" action="assets/dataBase/login.php" >
                        <div class="formInput mb-10">
                           <span><i class="fal fa-user"></i></span>
                           <input type="email" id="username" name="username" placeholder="Username / email address" required>
                        </div>
                        <div class="formInput mb-10">
                           <span><i class="fal fa-key"></i></span>
                           <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="tpsign__remember d-flex align-items-center justify-content-between mb-15">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                              <label class="form-check-label" for="flexCheckDefault2">Remember me</label>
                           </div>
                           <div class="tpsign__pass">
                              <a href="#">Forget Password</a>
                           </div>
                        </div>
                        <div class="tptrack__btn">
                           <button class="tptrack__submition active" type="submit">Login Now<i class="fal fa-long-arrow-right"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div class="tptrack__product mb-40">
                  <div class="tptrack__content grey-bg">
                     <div class="tptrack__item d-flex mb-20">
                        <div class="tptrack__item-icon">
                           <i class="fal fa-lock"></i>
                        </div>
                        <div class="tptrack__item-content">
                           <h4 class="tptrack__item-title">Sign Up</h4>
                           <p>Your personal data will be used to support your experience throughout this website, to manage access to your account.</p>
                        </div>
                     </div>
                     <form method="POST" action="assets/dataBase/signup.php" >
                        <div class="formInput mb-10">
                           <span><i class="fal fa-envelope"></i></span>
                           <input type="email" id="username" name="username" placeholder="Email address" required>
                        </div>
                        <div class="formInput mb-10">
                           <span><i class="fal fa-key"></i></span>
                           <input type="password" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="tpsign__account mb-15">
                           <a href="#">Already Have Account?</a>
                        </div>
                        <div class="tptrack__btn">
                           <button class="tptrack__submition tpsign__reg" type="submit">Register Now<i class="fal fa-long-arrow-right"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- track-area-end -->


   <!-- feature-area-start -->
   <section class="feature-area mainfeature__bg pt-50 pb-40" data-background="assets/img/shape/footer-shape-1.svg">
      <div class="container">
         <div class="mainfeature__border pb-15">
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
               <div class="col">
                  <div class="mainfeature__item text-center mb-30">
                     <div class="mainfeature__icon">
                        <img src="assets/img/icon/feature-icon-1.svg" alt="">
                     </div>
                     <div class="mainfeature__content">
                        <h4 class="mainfeature__title">Fast Delivery</h4>
                        <p>Across West & East India</p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="mainfeature__item text-center mb-30">
                     <div class="mainfeature__icon">
                        <img src="assets/img/icon/feature-icon-2.svg" alt="">
                     </div>
                     <div class="mainfeature__content">
                        <h4 class="mainfeature__title">safe payment</h4>
                        <p>100% Secure Payment</p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="mainfeature__item text-center mb-30">
                     <div class="mainfeature__icon">
                        <img src="assets/img/icon/feature-icon-3.svg" alt="">
                     </div>
                     <div class="mainfeature__content">
                        <h4 class="mainfeature__title">Online Discount</h4>
                        <p>Add Multi-buy Discount </p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="mainfeature__item text-center mb-30">
                     <div class="mainfeature__icon">
                        <img src="assets/img/icon/feature-icon-4.svg" alt="">
                     </div>
                     <div class="mainfeature__content">
                        <h4 class="mainfeature__title">Help Center</h4>
                        <p>Dedicated 24/7 Support </p>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="mainfeature__item text-center mb-30">
                     <div class="mainfeature__icon">
                        <img src="assets/img/icon/feature-icon-5.svg" alt="">
                     </div>
                     <div class="mainfeature__content">
                        <h4 class="mainfeature__title">Curated items</h4>
                        <p>From Handpicked Sellers</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- feature-area-end -->

</main>

<!-- footer-area-start -->
<footer>
   <div class="tpfooter__area theme-bg-2">
      <div class="tpfooter__top pb-15">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="tpfooter__widget footer-col-1 mb-50">
                     <h4 class="tpfooter__widget-title">Let Us Help You</h4>
                     <p>If you have any question, please <br> contact us at:
                        <a href="mailto:support@example.com">support@example.com</a>
                     </p>
                     <div class="tpfooter__widget-social mt-45">
                        <span class="tpfooter__widget-social-title mb-5">Social Media:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                  <div class="tpfooter__widget footer-col-2 mb-50">
                     <h4 class="tpfooter__widget-title">Looking for Orfarm?</h4>
                     <p>68 St. Vicent Place, Glasgow, Greater <br> Newyork NH2012, UK.</p>
                     <div class="tpfooter__widget-time-info mt-35">
                        <span>Monday – Friday: <b>8:10 AM – 6:10 PM</b></span>
                        <span>Saturday: <b>10:10 AM – 06:10 PM</b></span>
                        <span>Sunday: <b>Close</b></span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-4 col-sm-5">
                  <div class="tpfooter__widget footer-col-3 mb-50">
                     <h4 class="tpfooter__widget-title">HOT CATEGORIES</h4>
                     <div class="tpfooter__widget-links">
                        <ul>
                           <li><a href="#">Fruits & Vegetables</a></li>
                           <li><a href="#">Dairy Products</a></li>
                           <li><a href="#">Package Foods</a></li>
                           <li><a href="#">Beverage</a></li>
                           <li><a href="#">Health & Wellness</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-8 col-sm-7">
                  <div class="tpfooter__widget footer-col-4 mb-50">
                     <h4 class="tpfooter__widget-title">Our newsletter</h4>
                     <div class="tpfooter__widget-newsletter">
                        <p>Subscribe to the Orfarm mailing list to receive updates <br> on new arrivals & other information.</p>
                        <form action="index.html">
                           <span><i><img src="assets/img/shape/message-1.svg" alt=""></i></span>
                           <input type="email" placeholder="Your email address...">
                           <button class="tpfooter__widget-newsletter-submit tp-news-btn">Subscribe</button>
                        </form>
                        <div class="tpfooter__widget-newsletter-check mt-10">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                 I accept terms & conditions & privacy policy.
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="tpfooter___bottom pt-40 pb-40">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-7 col-sm-12">
                  <div class="tpfooter__copyright">
                     <span class="tpfooter__copyright-text">Copyright © <a href="#">ORFARM</a> all rights reserved. Powered by <a href="#">ThemePure</a>.</span>
                  </div>
               </div>
               <div class="col-lg-6 col-md-5 col-sm-12">
                  <div class="tpfooter__copyright-thumb text-end">
                     <img src="assets/img/shape/footer-payment.png " alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- footer-area-end -->


<!-- JS here -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.js"></script>
<script src="assets/js/nice-select.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/magnific-popup.js"></script>
<script src="assets/js/counterup.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/isotope-pkgd.js"></script>
<script src="assets/js/imagesloaded-pkgd.js"></script>
<script src="assets/js/countdown.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/meanmenu.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>