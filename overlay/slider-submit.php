<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $title = $_POST['title'];
    $heading = $_POST['heading'];
    $paragraph = $_POST['Paragraph'];

    // File upload handling for main image
    $main_img_target = '';
    if ($_FILES["main_img"]["size"] > 0) {
        $main_img_name = $_FILES["main_img"]["name"];
        $main_img_tmp = $_FILES["main_img"]["tmp_name"];
        $main_img_target = "assets/category-upload/" . basename($main_img_name);

        // Move main image to uploads directory
        if (move_uploaded_file($main_img_tmp, $main_img_target)) {
            echo "Main image uploaded successfully.<br>";
        } else {
            echo "Error uploading main image.<br>";
        }
    }

    // File upload handling for floating images
    $floating_imgs = array();
    for ($i = 1; $i <= 3; $i++) {
        $floating_img_target = '';
        if ($_FILES["floating_img$i"]["size"] > 0) {
            $floating_img_name = $_FILES["floating_img$i"]["name"];
            $floating_img_tmp = $_FILES["floating_img$i"]["tmp_name"];
            $floating_img_target = "assets/category-upload/" . basename($floating_img_name);

            // Move floating image to uploads directory
            if (move_uploaded_file($floating_img_tmp, $floating_img_target)) {
                echo "Floating image $i uploaded successfully.<br>";
                $floating_imgs[] = $floating_img_target; // Store uploaded image path
            } else {
                echo "Error uploading floating image $i.<br>";
            }
        }
    }

    // Connect to database (Replace these values with your database credentials)
   include 'assets/includes/database.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct the SQL query
    $sql = "INSERT INTO slider (title, heading, paragraph, main_img";
    for ($i = 1; $i <= 3; $i++) {
        $sql .= ", f$i";
    }
    $sql .= ") VALUES ('$title', '$heading', '$paragraph', '$main_img_target'";
    foreach ($floating_imgs as $floating_img_target) {
        $sql .= ", '$floating_img_target'";
    }
    $sql .= ")";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
