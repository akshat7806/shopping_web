<?php 
// Check if the form is submitted
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Establish a database connection (Replace these values with your database credentials)
    include 'assets/includes/database.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $category = $_POST['category'];
    $company = $_POST['company'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $discount_price = $_POST['discount_price'];

    // Initialize img_path variable
    $img_path = "";

    // Check if a new image file is uploaded
    if (!empty($_FILES["image"]["name"])) {
        // File upload handling
        $target_dir = "../uploads/"; // Directory where the file will be stored
        $target_file = $target_dir . basename($_FILES["image"]["name"]); // Full path of the uploaded file

        // Check file size (you can adjust the file size limit as per your requirement)
        if ($_FILES["image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
        } else {
            // Allow only certain file formats (you can adjust the allowed file formats as per your requirement)
            $allowed_extensions = array("jpg", "jpeg", "png", "gif", "webp");
            $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            if (!in_array($file_extension, $allowed_extensions)) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            } else {
                // Move uploaded file to target directory
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $img_path = $target_file;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }
    } else {
        // Retain the existing image path
        $img_path = $_POST['existing_image_path']; // Assuming you have a hidden input field containing the existing image path
    }

    // Check if edit ID is provided
    if(isset($_GET['edit_id'])) {
        // Perform update operation
        $edit_id = $_GET['edit_id'];
        // Perform update operation with SQL query
        $sql = "UPDATE products SET category='$category', brand='$company', title='$title', price='$price', discountprice='$discount_price'";
        // Append img_path to SQL query if not empty
        if (!empty($img_path)) {
            $sql .= ", img_path='$img_path'";
        }
        $sql .= " WHERE id='$edit_id'";
        header('Location:product.php');
    } else {
        // Perform insert operation
        echo 'error id not found';
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record ". (isset($_GET['edit_id']) ? "updated" : "created") ." successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Webstrot Admin : Basic Form </title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="sidebar-hide">

  <?php include 'header1.php' ?>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Student Form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card alert">
                              
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Product details</h4>
                                    </div>
                                    <?php
                                    // Check if edit_id is set in the URL
                                    if (isset($_GET['edit_id'])) {
                                        $conn = new mysqli("localhost", "root", "", "shopping");
                                
                                        
                                        $edit_id = $_GET['edit_id'];
                                        $sql = "SELECT * FROM products WHERE id = $edit_id";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            $row = $result->fetch_assoc();
                                    ?>
                                             <form method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Brand</label>
                                                                <input name="company" type="text" class="form-control border-none input-flat bg-ash" placeholder="Enter brand" value="<?php echo $row['brand']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input name="title" type="text" class="form-control border-none input-flat bg-ash" placeholder="Enter title" value="<?php echo $row['title']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Category</label>
                                                                <select name="category" class="form-control bg-ash border-none">
                                                                    <option value="Shirts" <?php if ($row['category'] == "Shirts") echo "selected"; ?>>Shirts</option>
                                                                    <option value="Tshirts" <?php if ($row['category'] == "Tshirts") echo "selected"; ?>>Tshirts</option>
                                                                    <option value="Jeans" <?php if ($row['category'] == "Jeans") echo "selected"; ?>>Jeans</option>
                                                                    <option value="Watches" <?php if ($row['category'] == "Watches") echo "selected"; ?>>Watches</option>
                                                                    <option value="Jackets" <?php if ($row['category'] == "Jackets") echo "selected"; ?>>Jackets</option>
                                                                    <option value="Suits" <?php if ($row['category'] == "Suits") echo "selected"; ?>>Suits</option>
                                                                    <option value="Formal" <?php if ($row['category'] == "Formal") echo "selected"; ?>>Formal</option>
                                                                    <option value="Grooming" <?php if ($row['category'] == "Grooming") echo "selected"; ?>>Grooming and personal care</option>
                                                                    <option value="Shoes" <?php if ($row['category'] == "Shoes") echo "selected"; ?>>Shoes</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input name="price" type="text" class="form-control bg-ash" placeholder="Enter price" value="<?php echo $row['price']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Discount Price</label>
                                                                <input name="discount_price" type="text" class="form-control border-none input-flat bg-ash" placeholder="Enter discount price" value="<?php echo $row['discountprice']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Upload Image</label>
                                                                <input name="image" ; value="<?php echo $row['img_path']; ?>" type="file"><br>
                                                                <div style="text-align:center;" >
                                                                    <h4 >old image</h4>
                                                                    <img  src="<?php echo "./" . $row['img_path']; ?>" width="200px" height="200px" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        <?php
                                        } else {
                                            echo "No record found";
                                        }
                                    } else {
                                        // If edit_id is not set, display an empty form
                                        ?>
                                         <form method="post" action="submit.php" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Brand</label>
                                                                <input name="company" type="text" class="form-control border-none input-flat bg-ash" placeholder="Enter brand">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input name="title" type="text" class="form-control border-none input-flat bg-ash" placeholder="Enter title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Category</label>
                                                                <select name="category" class="form-control bg-ash border-none">
                                                                    <option value="Shirts">Shirts</option>
                                                                    <option value="Tshirts">Tshirts</option>
                                                                    <option value="Jeans">Jeans</option>
                                                                    <option value="Watches">Watches</option>
                                                                    <option value="Jackets">Jackets</option>
                                                                    <option value="Suits">Suits</option>
                                                                    <option value="Formal">Formal</option>
                                                                    <option value="Grooming">Grooming and personal care</option>
                                                                    <option value="Shoes">Shoes</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input name="price" type="text" class="form-control bg-ash" placeholder="Enter price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Discount Price</label>
                                                                <input name="discount_price" type="text" class="form-control border-none input-flat bg-ash" placeholder="Enter discount price">"
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="basic-form">
                                                            <div class="form-group">
                                                                <label>Upload Image</label>
                                                                <input name="image" type="file">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    
    <!-- scripit init-->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->


    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>
    <!-- scripit init-->



</body>

</html>