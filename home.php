<?php
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
//$_SESSION['customerID'] = (int)2;
include('includes/header.php');
include('includes/banner.php');
include('includes/intro.php');


// Create a cart array if needed
if (empty($_SESSION['cart'])) { $_SESSION['cart'] = array(); } ?>


<?php include('includes/footer.php'); ?>
