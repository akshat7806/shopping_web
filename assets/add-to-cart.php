<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id'])) {
        addToCart($_POST['product_id']);
    }
}

function addToCart($productId) {
    // Add the product ID to the cart stored in the session
    $_SESSION['cart'][] = $productId;
    // Redirect the user back to the product page or any other page
    header('Location: ../cart.php');
    exit;
}

