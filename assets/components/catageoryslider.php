<!-- category-area-start -->

<div class="swiper-container category-active ">
   <div class="swiper-wrapper nav-tabs d-flex justify-content-center">
      <?php
      include 'admin1/data/connection.inc.php';
      $sql = "SELECT * FROM category ORDER BY id ASC";
      $result = $conn->query($sql);
      ?>
      <?php if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) { ?>
            <div class="swiper-slide filter-button" data-filter="<?php echo $row['category']; ?>">
               <div class="category__item mb-30">
                  <div class="category__thumb fix mb-15">
                     <a href="shop.php"><img src="<?php echo 'overlay/./' . $row['img_path'] ?>" alt="category-thumb"></a>
                  </div>
                  <div class="category__content">
                     <h5 class="category__title"><a href="#"><?php echo $row['category']; ?></a></h5>
                     <span class="category__count">05 items</span>
                  </div>
               </div>
            </div>
      <?php }
      } else {
         echo "Out of stock";
      }
      $conn->close(); ?>
   </div>
</div>


<!-- category-area-end -->