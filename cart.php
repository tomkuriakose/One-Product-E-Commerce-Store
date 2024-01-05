<?php
session_start();

// Check if the add_to_cart button is clicked
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Create a new cart item
    $cart_item = array(
        'product_name' => $product_name,
        'product_price' => $product_price,
        'quantity' => $quantity
    );

    // Add the item to the cart (stored in the session)
    $_SESSION['cart'][] = $cart_item;
}

// Other cart manipulation functionalities (remove, update) can be added here

// Redirect back to the product page
header('Location: product-page.php');
?>
