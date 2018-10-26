<?php
require_once('config.php');
require_once(ROOT_PATH.'core/init.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AR COLLECTION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo BASEURL; ?>css/style.css" />
<!-- including font from google - used in css -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<!-- including icon fonts for basic images -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

     </head>
<body>

<!--top nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="<?php echo ADMIN_URL;?>logout.php">AR COLLECTION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	<!--<li class="nav-item dropdown active">
	  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          REST API
        </a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown" >
		<a class="dropdown-item" href="#">Products List</a>
          <a class="dropdown-item" href="<?php ADMIN_URL;?>addproduct.php">Add Product</a>

		</div>

      </li> -->
      <li class="nav-item dropdown active">
	  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown" >
		<a class="dropdown-item" href="<?php ADMIN_URL;?>productlist.php">Show Products</a>
          <a class="dropdown-item" href="<?php ADMIN_URL;?>addproduct.php">Add Product</a>

		</div>

      </li>
      <li class="nav-item dropdown active">
	  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Customers
        </a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown" >
		<a class="dropdown-item" href="<?php ADMIN_URL;?>customerlist.php">Show Customers</a>


		</div>

      </li>

    </ul>
    <div class="form-inline my-2 my-lg-0">

      <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Orders</a>
          <a class="dropdown-item" href="<?php echo ADMIN_URL;?>logout.php">Logout</a>
        </div>
      </li>



          </ul>
</div>
  </div>
</nav>

