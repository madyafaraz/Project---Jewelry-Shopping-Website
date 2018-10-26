<?php
// Add an item to the cart
function addItemToCart($pID, $pPrice, $pTitle, $pQuantity, $pColor) {
    global $products;
    if ($pQuantity < 1) return;

    // If item already exists in cart, update quantity
    if (isset($_SESSION['cart'][$pID])) {
        $pQuantity += $_SESSION['cart'][$pID]['quantity'];
        update_item($pID, $pPrice, $pTitle, $pQuantity, $pColor);
        return;
    }

    // Add item
    $total = $pPrice * $pQuantity;
    $item = array(
        
        'title' => $pTitle,
        'price' => $pPrice,
        'qty'  => $pQuantity,
        'total' => $total
    );
    $_SESSION['cart'][$pID] = $item;
}

// Update an item in the cart
function update_item($key, $quantity) {
    $quantity = (int) $quantity;
    if (isset($_SESSION['cart'][$key])) {
        if ($quantity <= 0) {
            unset($_SESSION['cart'][$key]);
        } else {
            $_SESSION['cart'][$key]['qty'] = $quantity;
            $total = $_SESSION['cart'][$key]['price'] *
                     $_SESSION['cart'][$key]['qty'];
            $_SESSION['cart'][$key]['total'] = $total;
        }
    }
}

// Get cart subtotal
function get_subtotal() {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
        $subtotal += $item['total'];
    }
    $subtotal_f = number_format($subtotal, 2);
    return $subtotal_f;
}

/*if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['placeOrder'])){

    header("Location:../orders/orderdetails.php");
}*/
?>