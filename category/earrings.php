<?php
require_once('../includes/config.php');
require_once(ROOT_PATH . 'core/init.php');
include(ROOT_PATH .'includes/header.php');
$categoryID = 3;
global $id;
include(ROOT_PATH .'category/productController.php');
?>

<div class="container-fluid">

<div class="text-center m-4"><h4 class="f-7 text-uppercase">Select Your Favorite Earrings</h4></div>
<div class="row justify-content-center mb-3">
<div class="col-md-6">
<div id="custom-search-input">
<div class="input-group col-md-12">
<input type="text" class="form-control input-lg" placeholder="Search a product" />
<span class="input-group-btn">
<button class="btn btn-info btn-lg" type="button">
<i class="fas fa-search"></i>
</button>
</span>
</div>
</div>
</div>
</div>

<form action="cart.php" method="post">
<div class="galleryWrapper">


	<!-- Main Content -->

		<div class="row mt-2">

			<?php foreach ($products as $product) : ?>
			<div class="col-md-3">
				<div class="pl-2 pr-2 border text-center itemBox">
				<div  class="thumbnailImage"><img class="img-fluid" src="<?php echo BASEURL . $product['imgPath']; ?>" alt="<?php echo $product['title']; ?>"></div>
                <h1><?php echo $product['title']; ?></p></h1>
                <p class="list-price text-danger">Price: <s><?php echo $product['listPrice']; ?></s></p>
				<p class="price">Our Price: <?php echo $product['price']; ?></p>
				<button type="button" class="btn btn-sm btn-info mb-2" onclick="detailsmodal(<?php echo $id = $product['productID']; ?>)">Details</button>
			</div>
			</div>
        <?php endforeach; ?>
		</div>


</div>
</div>

</form>

</div>
<?php include(ROOT_PATH . 'includes/footer.php'); ?>