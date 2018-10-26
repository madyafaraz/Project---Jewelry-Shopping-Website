<?php
require_once('../includes/config.php');
require_once(ROOT_PATH . 'core/init.php');
include(ROOT_PATH .'includes/header.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['placeOrder'])){

    $orderNo = mt_rand();
    $customerId = $_SESSION['customerID'];
    $totalPrice = "";
    $cardName = $_POST['cardName'];
    $cardNumber = $_POST['cardNumber'];
    $cardExpiration = $_POST['cardExpiration'];
    $shipAddress = $_POST['shipAddress'];
    $shipCity = $_POST['shipCity'];
     $shipZipcode = $_POST['shipZipcode'];
     $shipState = $_POST['shipState'];
     $billAdress = $_POST['billAddress'];
     $billCity = $_POST['billCity'];
     $billState = $_POST['billState'];
     $billZipcode = $_POST['billZipcode'];
     $cardCVV = $_POST['cardCVV'];

    include(ROOT_PATH . 'orders/ordersController.php');
	unset($_SESSION['cart']);
	

}
?>


<main>
<div>
<p></p>
<h1>Thank you for your Order!</h1>
<p><h3>Your Order Number is :  <?php echo $orderNo; ?></h3></p>
<p>You will receive an email confirming your order.</p>
<div>
  <a href="/TermProject/">Shop Again</a>
</div>

</div>

</main>


<?php include(ROOT_PATH .'includes/footer.php'); ?>