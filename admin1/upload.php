<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .form-container {
        background-color: purple;
        margin: 20px;
        width: 30%;
        color: wheat;
        padding: 30px;
        border: 4px solid black;
        border-radius: 6px;
    }

    input {
        width: 90%;
        border: none;
        margin: 5px;
    }

    .btn {
        margin-inline: 40%;
        margin-top: 10px;
    }
</style>

<body>
    <div class="m-auto form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="category">Category</label>
            <select name="category" id="category">
                <option value="Shirts">Shirts</option>
                <option value="Tshirts">Tshirts</option>
                <option value="Jeans">Jeans</option>
                <option value="Watches">Watches</option>
                <option value="Jackets">Jackets</option>
                <option value="Suits">Suits</option>
                <option value="Formal">Formal wears</option>
                <option value="Shoes">Shoes</option>
                <option value="Grooming">Grooming and personal care</option>
            </select><br>
            <input type="text" name="company" placeholder="Company"><br>
            <input type="text" name="title" placeholder="Title"><br>
            <input type="text" name="price" placeholder="Price"><br>
            <input type="text" name="discount_price" placeholder="Discount Price"><br>
            <label for="image">Upload Image</label>
            <input type="file" name="image"><br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

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
    $target_dir = "uploads/"; // Directory where the file will be stored
    $target_file = $target_dir . basename($_FILES["image"]["name"]); // Full path of the uploaded file
    $uploadOk = 1; // Flag to indicate if the file upload is successful

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

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
            // Insert data into database
            $sql = "INSERT INTO products (category, brand, title, price, discountprice, img_path) VALUES ('$category', '$company', '$title', '$price', '$discount_price', '$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
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
?>