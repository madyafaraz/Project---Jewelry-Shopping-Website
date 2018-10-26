<?php
require_once('config.php');
require_once(ROOT_PATH.'core/init.php');
?>
<?php
	$sql = "SELECT * FROM category";
  $query = $db->query($sql);
  $result = mysqli_fetch_all($query);
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
  <a class="navbar-brand" href="<?php echo ACCOUNT_URL;?>logout.php">AR COLLECTION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">About Us <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Collection
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php foreach ($result as $res) : ?>
          <a class="dropdown-item" href="<?php echo NAV_URL . $res[1]; ?>.php"><?php echo $res[1]; ?></a>
          <?php endforeach;?>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link" href="<?php echo ACCOUNT_URL;?>contactus.php" >
          Contact Us
        </a>
      </li>




    </ul>
    <div class="form-inline my-2 my-lg-0">

      <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo ACCOUNT_URL;?>myaccount.php">Profile</a>
          <a class="dropdown-item" href="<?php echo ACCOUNT_URL;?>myorders.php">Orders</a>
          <a class="dropdown-item" href="<?php echo ACCOUNT_URL;?>logout.php">Logout</a>
        </div>
      </li>
      <li  class="nav-item active">
      <a class="nav-link" href="<?php echo CART_URL;?>cart_view.php" >
          Cart</a></li>


          </ul>
</div>
  </div>
</nav>

