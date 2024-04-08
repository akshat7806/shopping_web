<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['product_id'])) {
  echo 'get2';
        removeFromCart($_GET['product_id']);
    }
}

function removeFromCart($productId) {
    // Check if the product ID exists in the cart session array
    if (isset($_SESSION['cart']) && in_array($productId, $_SESSION['cart'])) {
        // Find the index of the product ID in the cart array
        $index = array_search($productId, $_SESSION['cart']);
        // Remove the product ID from the cart array
        unset($_SESSION['cart'][$index]);
    }
    // Redirect the user back to the cart page or any other page
    header('Location: cart.php');
    exit;
}