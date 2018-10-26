<?php
require_once('../model/database.php');
require_once('../model/adminDB.php');
session_start();

$products = getAllProducts();

$categories = getAllCategories();

//update product
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateProduct'])){
   $productID = $_SESSION['editProductID'];
   $categoryID = (int)filter_input(INPUT_POST, 'categoryID');
   $title = filter_input(INPUT_POST, 'title');
   $productDescription = filter_input(INPUT_POST, 'productDescription');
   $quantity = filter_input(INPUT_POST, 'quantity');
   $listPrice = filter_input(INPUT_POST, 'listPrice');
   $price = filter_input(INPUT_POST, 'price');
   $color = filter_input(INPUT_POST, 'color');
   if(($_FILES['uploadImage']['size']) == 0 || $_FILES['uploadImage']['name'] == ""){
      $imgPath = filter_input(INPUT_POST, 'imgPath');
   }
    else if(($_FILES['uploadImage']['size']) != 0 && $_FILES['uploadImage']['name'] != "") {
        $image = $_FILES['uploadImage']['name'];
        $catPath = explode("_",$_POST['categoryID']);
        $categoryFolder = strtolower ($catPath[1]);
    	$imgPath = "images/$categoryFolder/$image";
    	move_uploaded_file($_FILES['uploadImage']['tmp_name'], "../images/$categoryFolder/$image");
      }

   $result = updateProduct($categoryID, $title, $productDescription, $quantity, $listPrice, $price,$color,$imgPath, $productID);
   //the line is used to refresh the productlist page before loading
   echo "<meta http-equiv='refresh' content='0'>";
}


// Add product
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addProduct'])){

   $categoryID = (int)filter_input(INPUT_POST, 'categoryID');
   $title = filter_input(INPUT_POST, 'title');
   $productDescription = filter_input(INPUT_POST, 'productDescription');
   $quantity = filter_input(INPUT_POST, 'quantity');
   $listPrice = filter_input(INPUT_POST, 'listPrice');
   $price = filter_input(INPUT_POST, 'price');
   $color = filter_input(INPUT_POST, 'color');
   if(($_FILES['uploadImage']['size']) == 0 || $_FILES['uploadImage']['name'] == ""){
      $imgPath = "";
   }
    else if(($_FILES['uploadImage']['size']) != 0 && $_FILES['uploadImage']['name'] != "") {
        $image = $_FILES['uploadImage']['name'];
        $catPath = explode("_",$_POST['categoryID']);
        $categoryFolder = strtolower ($catPath[1]);
    	$imgPath = "images/$categoryFolder/$image";
    	move_uploaded_file($_FILES['uploadImage']['tmp_name'], "../images/$categoryFolder/$image");
      }

   $result = addProduct($categoryID, $title, $productDescription, $quantity, $listPrice, $price,$color,$imgPath);

   //the line is used to refresh the productlist page before loading
   echo "<meta http-equiv='refresh' content='0'>";
}

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['deleteProduct'])){

	$productID = (int)$_SESSION['editProductID'];

	deleteProduct($productID);
	echo "<meta http-equiv='refresh' content='0'>";

}


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login'])){
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$password = filter_input(INPUT_POST, 'password');
	//$password = filter_var($password,FILTER_VALIDATE_REGEXP,array( "options"=> array( "regexp" => "/.{6,25}/")));


	$user = checkUser($email, $password);
	if($user){
		header('Location:home.php');
	}
	else{
		echo "Invalid Username or Password";
	}
 }

?>