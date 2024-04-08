<?php include 'header.php' ?>
<main>

   <!-- slider-area-start -->
   <section class="slider-area tpslider-delay">
      <div class="swiper-container slider-active">
         <div class="swiper-wrapper">
         <?php
      include 'admin1/data/connection.inc.php';
      $sql = "SELECT * FROM slider ORDER BY id ASC";
      $result = $conn->query($sql);
      ?>
      <?php if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) { ?>
            <div class="swiper-slide ">
               <div class="tpslider pt-90 pb-0 grey-bg" data-background="assets/img/slider/shape-bg.jpg">
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-xxl-5 col-lg-6 col-md-6 col-12 col-sm-6">
                           <div class="tpslider__content pt-20">
                              <span class="tpslider__sub-title mb-35">Top Offers Of The Week</span>
                              <h2 class="tpslider__title mb-30">Choose Your Winter Wear This Weak.</h2>
                              <p>Special Offers On Winter Wears<br>End Season Sale</p>
                              <div class="tpslider__btn">
                                 <a class="tp-btn" href="#winter">Shop Now</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-7 col-lg-6 col-md-6 col-12 col-sm-6">
                           <div class="tpslider__thumb p-relative pt-15">
                              <img class="tpslider__thumb-img" src="<?php echo './overlay/'. $row['main_img']?>" width="600px" height="582px" style="z-index: 9999;border-radius: 10px;" height="500px" alt="slider-bg">
                              <div class="tpslider__shape d-none d-md-block">
                                 <img class="tpslider__shape-two" src="<?php echo './overlay/'. $row['f1']?>" width="180px" style="z-index: 99;border-radius: 10px;" alt="shape">
                                 <img class="tpslider__shape-three" src="<?php echo './overlay/'.$row['f2']?>" width="180px" style="z-index: 99;border-radius: 10px;" alt="shape">
                                 <img class="tpslider__shape-four" src="<?php echo './overlay/'.$row['f3']?>" width="180px" style="z-index: 99;border-radius: 10px;" alt="shape">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php }
      } else {
         echo "Out of stock";
      }
      $conn->close(); ?>
         </div>
         <div class="tpslider__arrow d-none  d-xxl-block">
            <button class="tpsliderarrow tpslider__arrow-prv"><i class="icon-chevron-left"></i></button>
            <button class="tpsliderarrow tpslider__arrow-nxt"><i class="icon-chevron-right"></i></button>
         </div>
         <div class="slider-pagination d-xxl-none"></div>
      </div>
   </section>
   <!-- slider-area-end -->
   <section class="category-area grey-bg pb-40">
      <div class="container">
         <!-- category-area-start -->

<div class="swiper-container category-active">
   <div class="swiper-wrapper nav-tabs " id="myTab" role="tablist">
      <div class="swiper-slide"  class="tab-btn" onclick="openTab(event, 'tab1')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://rukminim2.flixcart.com/image/832/832/xif0q/t-shirt/i/u/s/m-518fy-french-connection-original-imagh3hbauanfchu.jpeg?q=70&crop=false" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php">T-shirts</a></h5>
               <span class="category__count">05 items</span>
            </div>
         </div>
      </div>
      <div class="swiper-slide" class="tab-btn" onclick="openTab(event, 'tab2')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://m.media-amazon.com/images/I/71Q0xpq-NlL._SY741_.jpg" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php"" >Shirts</a></h5>
               <span class="category__count">06 items</span>
            </div>
         </div>
      </div>
      <div class="swiper-slide" class="tab-btn" onclick="openTab(event, 'tab2')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://th.bing.com/th/id/OIP.puwhvx0dn4DTpqiNT4DulgHaJo?rs=1&pid=ImgDetMain" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php">Jeans</a></h5>
               <span class="category__count">09 items</span>
            </div>
         </div>
      </div>
      <div class="swiper-slide" class="tab-btn" onclick="openTab(event, 'tab3')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://th.bing.com/th/id/OIP.OhiUEdFjddoflF1-8Ho2-gHaIO?rs=1&pid=ImgDetMain" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php">Winter jacktes</a></h5>
               <span class="category__count">11 items</span>
            </div>
         </div>
      </div>
      <div class="swiper-slide" class="tab-btn" onclick="openTab(event, 'tab4')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://th.bing.com/th/id/OIP.VkTQ2QdHBhEeyklizFBckQHaKc?rs=1&pid=ImgDetMain" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php">Suits & Formal Dresses</a></h5>
               <span class="category__count">02 items</span>
            </div>
         </div>
      </div>
      <div class="swiper-slide" class="tab-btn" onclick="openTab(event, 'tab5')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://th.bing.com/th/id/OIP.1N0PY98UB64yFFaBoykG6gHaHa?rs=1&pid=ImgDetMain" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php">Watches</a></h5>
               <span class="category__count">16 items</span>
            </div>
         </div>
      </div>
      <div class="swiper-slide" class="tab-btn" onclick="openTab(event, 'tab6')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://th.bing.com/th/id/OIP.vanhsupbvFGINSK3c8dyIwHaHa?rs=1&pid=ImgDetMain" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php">Shoes</a></h5>
               <span class="category__count">16 items</span>
            </div>
         </div>
      </div>
      <div class="swiper-slide" class="tab-btn" onclick="openTab(event, 'tab7')">
         <div class="category__item mb-30">
            <div class="category__thumb fix mb-15">
               <a href="shop.php"><img src="https://www.bestproductguider.com/wp-content/uploads/2020/02/7.-Beard-Straightener-Beard-Grooming-Kits-for-Men.jpg" alt="category-thumb"></a>
            </div>
            <div class="category__content">
               <h5 class="category__title"><a href="shop.php">Grooming and Personal Care</a></h5>
               <span class="category__count">16 items</span>
            </div>
         </div>
      </div>
   </div>
</div>


      </div>
   </section>
   <!-- product-area-start -->



   <section class="product-area grey-bg pb-0" id="winter">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="tpsection mb-35">
                  <h4 class="tpsection__sub-title">~ Winter Wear ~</h4>
                  <h4 class="tpsection__title">Season End Offers</h4>
                  <p>Special discounts on winter wear collections.</p>
               </div>
            </div>
         </div>
         <div class="tpproduct__arrow p-relative">
            <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="tpproduct p-relative">
                        <div class="tpproduct__thumb p-relative text-center">
                           <a href="shop-details-4.html"><img height="200px" src="assets/img/fashion&lifestyle/f&l01.webp" alt=""></a>
                           <a class="tpproduct__thumb-img" href="shop-details-4.html"><img height="200px" src="assets/img/fashion&lifestyle/f&l01.webp" alt=""></a>
                           <div class="tpproduct__info bage">
                              <span class="tpproduct__info-discount bage__discount">-30%</span>
                              <span class="tpproduct__info-hot bage__hot">HOT</span>
                           </div>
                           <div class="tpproduct__shopping">
                              <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                              <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                              <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <span class="tpproduct__content-weight">
                              <a href="shop-details-4.html">Triptee </a>
                           </span>
                           <h4 class="tpproduct__title">
                              <a href="shop-details-4.html">Men Full Sleeve Printed Sweatshirt</a>
                           </h4>
                           <div class="tpproduct__rating mb-5">
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                           </div>
                           <div class="tpproduct__price">
                              <span>499</span>
                              <del>699</del>
                           </div>
                        </div>
                        <div class="tpproduct__hover-text">
                           <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                              <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                           </div>
                           <div class="tpproduct__descrip">
                              <ul>
                                 <li>Type: Full Sleeve</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct p-relative">
                        <div class="tpproduct__thumb p-relative text-center">
                           <a href="shop-details-4.html"><img height="200px" src="https://rukminim2.flixcart.com/image/832/832/xif0q/sweatshirt/p/r/j/11-12-years-hft-a2b-s23hgw09-blg-hellcat-original-imagt5yudzvzyrze.jpeg?q=70&crop=false" alt=""></a>
                           <a class="tpproduct__thumb-img" href="shop-details-4.html"><img height="200px" src="https://rukminim2.flixcart.com/image/832/832/xif0q/sweatshirt/p/r/j/11-12-years-hft-a2b-s23hgw09-blg-hellcat-original-imagt5yudzvzyrze.jpeg?q=70&crop=false" alt=""></a>
                           <div class="tpproduct__info bage">
                              <span class="tpproduct__info-discount bage__discount">-40%</span>
                           </div>
                           <div class="tpproduct__shopping">
                              <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                              <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                              <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <span class="tpproduct__content-weight">
                              <a href="shop-details-4.html">Hellcat </a>
                           </span>
                           <h4 class="tpproduct__title">
                              <a href="shop-details-4.html">Boys Full Sleeve Color Block Hooded Sweatshirt</a>
                           </h4>
                           <div class="tpproduct__rating mb-5">
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                           </div>
                           <div class="tpproduct__price">
                              <span>399</span>
                              <del>799</del>
                           </div>
                        </div>
                        <div class="tpproduct__hover-text">
                           <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                              <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                           </div>
                           <div class="tpproduct__descrip">
                              <ul>
                                 <li>Type: Organic</li>
                                 <li>MFG: August 4.2021</li>
                                 <li>LIFE: 60 days</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct p-relative">
                        <div class="tpproduct__thumb p-relative text-center">
                           <a href="shop-details-4.html"><img height="200px" src="https://rukminim2.flixcart.com/image/832/832/xif0q/sweatshirt/t/b/o/11-12-years-boys-hoodies-a243-bk-neuvin-original-imagxbf7qgmwfbhg.jpeg?q=70&crop=false" alt=""></a>
                           <a class="tpproduct__thumb-img" href="shop-details-4.html"><img height="200px" src="https://rukminim2.flixcart.com/image/832/832/xif0q/sweatshirt/t/b/o/11-12-years-boys-hoodies-a243-bk-neuvin-original-imagxbf7qgmwfbhg.jpeg?q=70&crop=false" alt=""></a>
                           <div class="tpproduct__info bage">
                              <span class="tpproduct__info-discount bage__discount">-10%</span>
                           </div>
                           <div class="tpproduct__shopping">
                              <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                              <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                              <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <span class="tpproduct__content-weight">
                              <a href="shop-details-3.html">NeuVin </a>
                           </span>
                           <h4 class="tpproduct__title">
                              <a href="shop-details-4.html">Boys Full Sleeve Printed Hooded Sweatshirt</a>
                           </h4>
                           <div class="tpproduct__rating mb-5">
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                           </div>
                           <div class="tpproduct__price">
                              <span>899</span>
                              <del>499</del>
                           </div>
                        </div>
                        <div class="tpproduct__hover-text">
                           <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                              <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                           </div>
                           <div class="tpproduct__descrip">
                              <ul>
                                 <li>Type: Organic</li>
                                 <li>MFG: August 4.2021</li>
                                 <li>LIFE: 60 days</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct p-relative">
                        <div class="tpproduct__thumb p-relative text-center">
                           <a href="#"><img src="https://rukminim2.flixcart.com/image/832/832/kj8wccw0-0/jacket/w/p/s/m-12288810-roadster-original-imafyurnczcf6rrq.jpeg?q=70&crop=false" height="200px" alt=""></a>
                           <a class="tpproduct__thumb-img" href="shop-details.html"><img src="https://rukminim2.flixcart.com/image/832/832/kj8wccw0-0/jacket/w/p/s/m-12288810-roadster-original-imafyurnczcf6rrq.jpeg?q=70&crop=false" height="200px" alt=""></a>
                           <div class="tpproduct__info bage">
                              <span class="tpproduct__info-discount bage__discount">-90%</span>
                              <span class="tpproduct__info-hot bage__hot">HOT</span>
                           </div>
                           <div class="tpproduct__shopping">
                              <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                              <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                              <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <span class="tpproduct__content-weight">
                              <a href="shop-details-4.html">Roadster </a>
                           </span>
                           <h4 class="tpproduct__title">
                              <a href="shop-details-4.html">Men Washed Jacket</a>
                           </h4>
                           <div class="tpproduct__rating mb-5">
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                           </div>
                           <div class="tpproduct__price">
                              <span>399</span>
                              <del>699</del>
                           </div>
                        </div>
                        <div class="tpproduct__hover-text">
                           <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                              <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                           </div>
                           <div class="tpproduct__descrip">
                              <ul>
                                 <li>Type: Organic</li>
                                 <li>MFG: August 4.2021</li>
                                 <li>LIFE: 60 days</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="tpproduct p-relative">
                        <div class="tpproduct__thumb p-relative text-center">
                           <a href="#"><img height="200px" src="https://rukminim2.flixcart.com/image/832/832/xif0q/jacket/c/v/u/m-no-varsitycc107-alvis9-original-imagyhdenqw5udau.jpeg?q=70&crop=false" alt=""></a>
                           <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img height="200px" src="https://rukminim2.flixcart.com/image/832/832/xif0q/jacket/c/v/u/m-no-varsitycc107-alvis9-original-imagyhdenqw5udau.jpeg?q=70&crop=false" alt=""></a>
                           <div class="tpproduct__info bage">
                              <span class="tpproduct__info-discount bage__discount">-50%</span>
                           </div>
                           <div class="tpproduct__shopping">
                              <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i class="icon-heart icons"></i></a>
                              <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                              <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                           </div>
                        </div>
                        <div class="tpproduct__content">
                           <span class="tpproduct__content-weight">
                              <a href="shop-details-4.html">Oiin</a>
                           </span>
                           <h4 class="tpproduct__title">
                              <a href="shop-details-4.html">Men Solid Bomber Jacket</a>
                           </h4>
                           <div class="tpproduct__rating mb-5">
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                              <a href="#"><i class="icon-star_outline1"></i></a>
                           </div>
                           <div class="tpproduct__price">
                              <span>899</span>
                              <del>499</del>
                           </div>
                        </div>
                        <div class="tpproduct__hover-text">
                           <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                              <a class="tp-btn-2" href="shop-details-4.html">Add to cart</a>
                           </div>
                           <div class="tpproduct__descrip">
                              <ul>
                                 <li>Type: Organic</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tpproduct-btn">
               <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
               <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
            </div>
         </div>
      </div>
   </section>
   <!-- product-area-end -->





   <!-- product-feature-area-start -->
   <section class="product-feature-area product-feature grey-bg pt-80 pb-40">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="tpfeature__thumb p-relative pb-40">
                  <img src="https://img.freepik.com/free-photo/close-up-clock-with-time-change_23-2149241144.jpg?t=st=1711023291~exp=1711026891~hmac=46b9affce1d9b911b64ce87687a590c082ee4cffd78eddabecbbfe3310364dfa&w=1060" alt="">
                  <div class="tpfeature__shape d-none d-md-block">

                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="tpproduct-feature p-relative pt-45 pb-40">
                  <div class="tpsection tpfeature__content mb-35">
                     <h4 class="tpsection__sub-title mb-0">~ Premium Watches~</h4>
                     <h4 class="tpsection__title tpfeature__title mb-25">collections of <br> <span>Premium Watches</span> - Happy Life</h4>
                     <p>The liber tempor cum soluta nobis eleifend option congue <br> doming quod mazim placerat facer possim assum.</p>
                  </div>
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="tpfeature__box">
                           <div class="tpfeature__product-item mb-25">
                              <h4 class="tpfeature__product-title">Companies:</h4>
                              <span class="tpfeature__product-info">Apple,Titan,Sonata...</span>
                           </div>
                           <div class="tpfeature__product-item mb-45">
                              <h4 class="tpfeature__product-title">Offers:</h4>
                              <span class="tpfeature__product-">Flat 10% Off</span>
                           </div>
                           <div class="tpfeature__btn">
                              <a class="tp-btn-4" href="cart.html">Add To Cart</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="tpfeature__box">
                           <div class="tpfeature__product-item mb-25">
                              <h4 class="tpfeature__product-title">Colors:</h4>
                              <span class="tpfeature__product-info">Black,white,silver,gold</span>
                           </div>
                           <div class="tpfeature__product-item mb-45">
                              <h4 class="tpfeature__product-title">Range:</h4>
                              <span class="tpfeature__product-">2000 –100000</span>
                           </div>
                           <div class="tpfeature__btn">
                              <a class="tp-btn-3" href="shop-2.html">View More</a>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- product-feature-area-end -->

   <!-- product-area-start -->
   <section class="weekly-product-area grey-bg pb-70">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center">
               <div class="tpsection mb-20">
                  <h4 class="tpsection__sub-title">~ Special Products ~</h4>
                  <h4 class="tpsection__title">Weekly Offers</h4>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="tpnavtab__area pb-40">
                  <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">All Products</button>
                        <button class="nav-link" id="nav-upperWear-tab" data-bs-toggle="tab" data-bs-target="#nav-upperWear" type="button" role="tab" aria-controls="nav-upperWear" aria-selected="false">Upperwears</button>
                        <button class="nav-link" id="nav-lowerWear-tab" data-bs-toggle="tab" data-bs-target="#nav-lowerWear" type="button" role="tab" aria-controls="nav-lowerWear" aria-selected="false">Lowerwears</button>
                        <button class="nav-link" id="nav-Accessories-tab" data-bs-toggle="tab" data-bs-target="#nav-Accessories" type="button" role="tab" aria-controls="nav-Accessories" aria-selected="false">Accessories</button>
                        <button class="nav-link" id="nav-shoes-tab" data-bs-toggle="tab" data-bs-target="#nav-shoes" type="button" role="tab" aria-controls="nav-shoes" aria-selected="false">Shoes</button>
                     </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                        <div class="tpproduct__arrow p-relative">
                           <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                             <?php include 'assets/includes/sliderdata.php' ?>
                           </div>
                           <div class="tpproduct-btn">
                              <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                              <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <!-- yha tk******************************************= -->
                     <div class="tab-pane fade" id="nav-upperWear" role="tabpanel" aria-labelledby="nav-upperWear-tab" tabindex="0">
                        <div class="tpproduct__arrow p-relative">
                           <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                              <?php
                              include 'assets/includes/sliderdata.php';
                              ?>
                           </div>
                           <div class="tpproduct-btn">
                              <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                              <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                           </div>
                        </div>
                     </div>

                     <!-- yha tk******************************************2222222222222222222222222222= -->
                     <div class="tab-pane fade" id="nav-lowerWear" role="tabpanel" aria-labelledby="nav-LowerWear-tab" tabindex="0">
                        <div class="tpproduct__arrow p-relative">
                           <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                              <?php
                              include 'assets/includes/sliderdata.php';
                              ?>
                           </div>
                           <div class="tpproduct-btn">
                              <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                              <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                           </div>
                        </div>

                     </div>

                     <!-- 3333333333333333333333333333333333333 -->

                     <div class="tab-pane fade" id="nav-Accessories" role="tabpanel" aria-labelledby="nav-Accessories-tab" tabindex="0">
                        <div class="tpproduct__arrow p-relative">
                           <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                              <?php
                              include 'assets/includes/sliderdata.php';
                              ?>
                           </div>
                           <div class="tpproduct-btn">
                              <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                              <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                           </div>
                        </div>
                     </div>
                     <!-- 
                           444444444444444444444 -->



                     <div class="tab-pane fade" id="nav-shoes" role="tabpanel" aria-labelledby="nav-shoes-tab" tabindex="0">
                        <div class="tpproduct__arrow p-relative">
                           <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                              <?php
                              include 'assets/includes/sliderdata.php';
                              ?>
                           </div>
                           <div class="tpproduct-btn">
                              <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                              <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                           </div>
                        </div>
                     </div>




                     <div class="tab-pane fade" id="nav-lowerWear" role="tabpanel" aria-labelledby="nav-LowerWear-tab" tabindex="0">
                        <div class="tpproduct__arrow p-relative">
                           <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                              <?php
                              include 'assets/includes/sliderdata.php';
                              ?>
                           </div>
                           <div class="tpproduct-btn">
                              <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                              <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                           </div>
                        </div>
                     </div>



                     <div class="tab-pane fade" id="nav-lowerWear" role="tabpanel" aria-labelledby="nav-LowerWear-tab" tabindex="0">
                        <div class="tpproduct__arrow p-relative">
                           <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                              <?php
                              include 'assets/includes/sliderdata.php';
                              ?>
                           </div>
                           <div class="tpproduct-btn">
                              <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                              <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="tpproduct__all-item text-center">
                  <span>Discover thousands of other quality products.
                     <a href="shop.php">Shop All Products <i class="icon-chevrons-right"></i></a>
                  </span>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- product-area-end -->
 


   <!-- product-coundown-area-start -->
   <section class="product-coundown-area tpcoundown__bg grey-bg pb-180">
      <h1 class="text-center"><b>Our Partners</b></h1>
      <div class="container" style="background-size: cover;" data-background="assets/img/logos/logos.jpg">
         <div class="row">
            <div class="col-lg-12">
               <div class="tpcoundown p-relative ml-175">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- product-coundown-area-end -->






   <!-- feature-area-start -->
   <section class="feature-area mainfeature__bg grey-bg pt-50 pb-40" data-background="assets/img/shape/footer-shape-1.svg">
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

<?php include 'footer.php' ?>