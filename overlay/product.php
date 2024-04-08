<?php
// Database connection
include 'assets/includes/database.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete Operation
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM products WHERE id = $delete_id";
    $sql = "DELETE FROM category WHERE id = $delete_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the same page without the delete_id parameter
        header("Location: " . $_SERVER['PHP_SELF']);
        exit(); // Stop further execution
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
<?php include 'header.php' ?>


<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome Here</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <div>
                <section class="card-container text-center">
                    <h1 style="text-align: center;">CATEGORY</h1>
                    <div style="display: flex; justify-content: center;" id="filters" class="button-group">
                        <?php
                        include 'assets/includes/database.php';
                        $sql = "SELECT * FROM category ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="contain" data-filter="<?php echo '.'.$row['category']; ?>">
                                    <img src="<?php echo $row['img_path'] ?>" alt="">
                                    <div class="card-content">
                                        <h3><?php echo  $row['category'] ?></h3>
                                        <p>05 items</p>
                                        <?php
                                        // Edit button
                                        echo "<a href='category-edit.php?edit_id=" . $row['id'] . "' class='btn btn-primary btn-lg btn-rounded m-b-10 m-l-5'>Edit</a>";

                                        // Delete button
                                        echo "<a href='?delete_id=" . $row['id'] . "' class='btn btn-danger btn-lg btn-rounded m-b-10 m-l-5' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>";
                                        ?>
                                    </div>
                                </div>
                        <?php }
                        } else {
                            echo "Out of stock";
                        }
                        $conn->close(); ?>
                    </div>
                    <a href="category-upload.php"><button class="btn btn-primary btn-lg" style="margin: 20px;">Add Category</button></a>
                </section>
                <div style="display: flex;">
                    <h1 class="mx-auto">Products</h1>
                </div>
                <div class="text-right"><a href="upload.php"><button type="button" class="btn btn-primary btn-lg btn-rounded ">Add product</button></div></a>
            </div>
            <div class="main-content grid">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "shopping");
                $sql = "SELECT * FROM products ORDER BY id ASC";
                $result = $conn->query($sql);
                ?>
                <?php if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="grid-item <?php echo $row['category']; ?>">
                        <div class="row">
                            <div class="col-lg-12 bg-body-tertiary">
                                <div class="card  alert">
                                    <div class="product-2-details  ">
                                        <table class="table ">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="product-2-img">
                                                            <img src="<?php echo "./" . $row['img_path'] ?>" alt="" style="width: 130px; height: 150px;">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-2-des">
                                                            <div class="product_name">
                                                                <h4><?php echo $row["brand"] ?></h4>
                                                            </div>
                                                            <div class="product_des">
                                                                <p><?php echo $row["title"]; ?></p>
                                                            </div>
                                                            <div>
                                                                <h3><span style="color: red;"><?php echo $row["price"]; ?></span> <span style="color: green;"><?php echo $row["discountprice"]; ?> </span></h3>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="product-2-button">
                                                            <div class="prdt_add_to_cart">
                                                                <?php
                                                                // Edit button
                                                                echo "<a href='edit.php?edit_id=" . $row['id'] . "' class='btn btn-primary btn-lg btn-rounded m-b-10 m-l-5'>Edit</a>";

                                                                // Delete button
                                                                echo "<a href='?delete_id=" . $row['id'] . "' class='btn btn-danger btn-lg btn-rounded m-b-10 m-l-5' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>";
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                        </div>
                <?php }
                } ?>
                <!-- /# row -->
            </div>
            <!-- /# main content -->





        </div>
        <!-- /# container-fluid -->
    </div>
    <!-- /# main -->
</div>
<!-- /# content wrap -->

<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- jquery vendor -->
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="assets/js/lib/menubar/sidebar.js"></script>
<script src="assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->
<script src="assets/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/lib/mmc-common.js"></script>
<script src="assets/js/lib/mmc-chat.js"></script>
<script src="assets/js/lib/nestable/jquery.nestable.js"></script>
<!-- scripit init-->
<script src="assets/js/lib/nestable/nestable.init.js"></script>
<!-- scripit init-->
<script src="assets/js/scripts.js"></script>
<!-- scripit init-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var $grid = $(".grid").isotope({
    itemSelector:'.grid-item',
    layoutMode:'vertical',
});
$(".button-group").on("click",".contain",function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({filter:filterValue});
});
$(".grid-item").css("width", "100%");
</script>


</body>

</html>