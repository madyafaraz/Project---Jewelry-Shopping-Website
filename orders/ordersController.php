<?php
require_once('../model/database.php');
require_once('../model/ordersDB.php');

//add order details

$orderID = AddOrder($orderNo, $customerId, $totalPrice, $cardName, $cardNumber,$cardExpiration, $shipAddress, $shipCity, $shipZipcode, $shipState, $billAdress, $billCity, $billState, $billZipcode, $cardCVV);
//now add order details like what products were purchased.
foreach ($_SESSION['cart'] as $key => $item) {

    $productID = $key;
    //$title = $item['title'];
    $price = $item['price'];
    $quantity = $item['qty'];
    //$total = $item['total'];

    AddOrderDetails($orderID, $price, $productID, $quantity);

 }

?>

