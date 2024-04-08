<?php
// Function to fetch product details from the database
function fetchProductDetails($productId)
{
   // Connect to your database (you may need to adjust this based on your database configuration)
   $pdo = new PDO('mysql:host=localhost;dbname=shopping', 'root', '');

   // Prepare and execute the SQL query to fetch product details based on the product ID
   $stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id');
   $stmt->bindParam(':id', $productId);
   $stmt->execute();

   // Fetch the product details
   $product = $stmt->fetch(PDO::FETCH_ASSOC);

   return $product;
}

// Function to fetch cart items from the database
function fetchCartItems($userId)
{
   // Connect to your database (you may need to adjust this based on your database configuration)
   $pdo = new PDO('mysql:host=localhost;dbname=shopping', 'root', '');

   // Prepare and execute the SQL query to fetch cart items based on the user ID
   $stmt = $pdo->prepare('SELECT * FROM cart WHERE user_id = :user_id');
   $stmt->bindParam(':user_id', $userId);
   $stmt->execute();

   // Fetch all cart items
   $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

   return $cartItems;
}

// Function to calculate the subtotal of the cart
function calculateSubtotal($userId)
{
   $subtotal = 0;
   $cartItems = fetchCartItems($userId);

   foreach ($cartItems as $cartItem) {
      $product = fetchProductDetails($cartItem['product_id']);
      $subtotal += $product['price'];
   }

   return $subtotal;
}

// Start the session
session_start();
?>

<?php include 'header.php' ?>
   <!-- header-area-end -->

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
                        <span>Cart</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb-area-end -->

      <!-- cart area -->
      <section class="cart-area pb-80">
         <div class="container">
         <div class="row">
    <div class="col-12">
        <form action="#" method="post"> <!-- Ensure the form has a method attribute -->
            <div class="table-content table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="product-thumbnail">Images</th>
                            <th class="cart-product-name">Courses</th>
                            <th class="product-price">Unit Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    // Initialize an array to store unique product IDs
    $uniqueProductIds = array();

    // Loop through cart items and display them dynamically
    foreach ($_SESSION['cart'] as $productId) {
        // Check if the product ID has already been added to the unique product IDs array
        if (!in_array($productId, $uniqueProductIds)) {
            // If not, add it to the array and fetch product details
            $uniqueProductIds[] = $productId;
            $product = fetchProductDetails($productId); // Fetch product details
?>
            <tr>
                <td class="product-thumbnail">
                    <a href="shop-details.html">
                        <img src="<?php echo "admin1/" . $product['img_path']; ?>" alt="">
                    </a>
                </td>
                <td class="product-name">
                    <a href="shop-details.html"><?php echo $product['title']; ?></a>
                </td>
                <td class="product-price">
                    <span class="amount amounts" id="amount"><?php echo $product['price']; ?></span>
                </td>
                <td class="product-quantity">
                    <span class="cart-minus">-</span>
                    <input class="cart-input" type="text" value="1"> <!-- You can populate this dynamically if needed -->
                    <span class="cart-plus">+</span>
                </td>
                <td class="product-subtotal">
                    <span class="amount val"><?php echo $product['price']; ?></span> <!-- Initial value, will be updated dynamically -->
                </td>
                <td class="product-remove">
                     <form action="delete.php">
                     <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                     <button type="submit" ><a><i class="fa fa-times"></i></a></button>
                     </form>
                </td>
            </tr>
<?php
        }
    }
?>
</tbody>

                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-5 ">
                    <div class="cart-page-total">
                        <h2>Cart totals</h2>
                        <ul class="mb-20">
                            <li>Subtotal <span id="subtotal"></span></li>
                            <li>Total <span id="total"></span></li>
                        </ul>
                        <a href="checkout.html" class="tp-btn tp-color-btn banner-animation">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


         </div>
      </section>
      <!-- cart area end-->


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

<!-- JavaScript for updating product subtotal and cart totals -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Function to calculate and update the cart total
    function updateCartTotal() {
        var total = 0;
        $('.cart-input').each(function() {
            var currentValue = parseInt($(this).val());
            var inrs = parseInt($(this).closest('tr').find('.amounts').text());
            var val = currentValue * inrs;
            total += val;
            $(this).closest('tr').find('.val').text(val);
        });
        $('#total').text(total);
        
        // Store the total in sessionStorage
        sessionStorage.setItem('cartTotal', total);
    }
    
    // Check if cartTotal is stored in sessionStorage and update the total accordingly
    if(sessionStorage.getItem('cartTotal')) {
        $('#total').text(sessionStorage.getItem('cartTotal'));
    } else {
        // If cartTotal is not stored, calculate and update the total
        updateCartTotal();
    }

    // Click event handler for cart plus and cart minus buttons
    $('.cart-plus, .cart-minus').click(function() {
        updateCartTotal();
    });
});
</script>





</body>

</html>