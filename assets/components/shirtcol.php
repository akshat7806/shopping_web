<?php
include 'admin1/data/connection.inc.php';
$sql = "SELECT * FROM products WHERE category = 'shirts' ORDER BY id ASC";
$result = $conn->query($sql);
?>
  <?php if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) { ?>
<div class="col">
   <div class="tpproduct p-relative mb-20">
      <div class="tpproduct__thumb p-relative text-center">
         <a href="#"><img src="<?php echo "admin1/" . $row["img_path"]; ?>" height="300px" alt=""></a>
         <a class="tpproduct__thumb-img" href="shop-details-grid.html"><img src="<?php echo "admin1/" . $row["img_path"]; ?>" alt=""></a>
         <div class="tpproduct__info bage">
            <span class="tpproduct__info-discount bage__discount">-50%</span>
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
            <a href="shop-details-3.html"><?php echo $row["brand"] ?></a>
         </span>
         <h4 class="tpproduct__title">
            <a href="shop-details-top-.html"><?php echo $row["title"]; ?></a>
         </h4>
         <div class="tpproduct__rating mb-5">
            <a href="#"><i class="icon-star_outline1"></i></a>
            <a href="#"><i class="icon-star_outline1"></i></a>
            <a href="#"><i class="icon-star_outline1"></i></a>
            <a href="#"><i class="icon-star_outline1"></i></a>
            <a href="#"><i class="icon-star_outline1"></i></a>
         </div>
         <div class="tpproduct__price">
            <span><?php echo $row["price"]; ?></span>
            <del><?php echo $row["discountprice"]; ?></del>
         </div>
      </div>
      <div class="tpproduct__hover-text">
         <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
            <a class="tp-btn-2" href="cart.html">Add to cart</a>
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
<?php }
        } else {
          echo "Out of stock";
        }
        $conn->close(); ?>