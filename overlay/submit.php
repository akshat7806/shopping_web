<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Establish a database connection (Replace these values with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopping";
    $conn = new mysqli($servername, $username, $password, $dbname);
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

    // File upload handling
    $target_dir = "../uploads/"; // Directory where the file will be stored
    $target_file = $target_dir . basename($_FILES["image"]["name"]); // Full path of the uploaded file
    $uploadOk = 1; // Flag to indicate if the file upload is successful

    // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    // Check file size (you can adjust the file size limit as per your requirement)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can adjust the allowed file formats as per your requirement)
    $allowed_extensions = array("jpg", "jpeg", "png", "gif", "webp");
    $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";

            // Check if edit ID is provided
            if(isset($_GET['edit_id'])) {
                echo '********************';
                // Perform update operation
                $edit_id = $_GET['edit_id'];
                // Perform update operation with SQL query
                $sql = "UPDATE products SET category='$category', brand='$company', title='$title', price='$price', discountprice='$discount_price', img_path='$target_file' WHERE id='$edit_id'";
            } else {
                // Perform insert operation
                $sql = "INSERT INTO products (category, brand, title, price, discountprice, img_path) VALUES ('$category', '$company', '$title', '$price', '$discount_price', '$target_file')";
            }

            if ($conn->query($sql) === TRUE) {
                echo "Record ". (isset($_GET['edit_id']) ? "updated" : "created") ." successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close database connection
    $conn->close();
}
