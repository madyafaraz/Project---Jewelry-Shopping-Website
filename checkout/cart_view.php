<?php 
require_once('../includes/config.php');
require_once(ROOT_PATH . 'core/init.php'); 
include(ROOT_PATH .'includes/header.php');
session_start(); ?>
  
  <?php 
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['AddToCart'])){
    
       require_once('cartController.php');
       if(isset($_SESSION['selectedProductID'])){$pID = $_SESSION['selectedProductID'];}
       //$pID = $itemID;
       $pTitle = filter_input(INPUT_POST, 'title');
       $pQuantity = filter_input(INPUT_POST, 'quantity');
       $pPrice = filter_input(INPUT_POST, 'price');
       $pColor = filter_input(INPUT_POST, 'color');
       addItemToCart($pID, $pPrice, $pTitle, $pQuantity, $pColor);
       include('cart.php');
       }
      elseif (empty($_SESSION['cart']) || count($_SESSION['cart']) == 0) { ?>
         <p>There are no items in your cart</p>
      <?php }
      else{
        include('cart.php');

      }
      
    ?>

<?php include(ROOT_PATH .'includes/footer.php'); ?>