<?php include('../includes/adminHeader.php');
require_once('../includes/config.php');
require_once('../model/adminDB.php');
require_once('adminController.php');
//session_start();


?>
<main>
	<div class="container">


		<div class="fixedSpace"></div>
		<form action="productlist.php" enctype="multipart/form-data" method="post">



			<h3>Add Product</h3>
			<p>You can always add more products later</p>



			<br>



				<div class="row mb-3">

				<div class="col-md-3"><label>Category</label></div>
				<div class="col-md-9"><select name="categoryID" class="form-control">
					<?php foreach ( $categories as $category ) : ?>
					<option value="<?php echo $category['categoryID'].'_'.$category['categoryName']; ?>" >
						<?php echo $category['categoryName']; ?>
					</option>
					<?php endforeach; ?>
				</select></div>
					</div>



				<div class="row mb-3">
				<div class="col-md-3"><label>Title</label></div>
				<div class="col-md-9"><input  class="form-control" type="text" name="title" value="" required></div>
					</div>

				<div class="row mb-3">
					<div class="col-md-3"><label>Description</label></div>
				<div class="col-md-9"><textarea class="form-control"  name="productDescription" required id="productDescription" rows="4" cols="30"></textarea></div></div>


				<div class="row mb-3">
				<div class="col-md-3"><label>Quantity</label></div>
				<div class="col-md-9"><input class="form-control"  type="text" name="quantity" value="" required></div></div>


				<div class="row mb-3">
				<div class="col-md-3"><label>List Price</label></div>
				<div class="col-md-9"><input class="form-control" type="text" name="listPrice" value="" required></div></div>

				<div class="row mb-3">
					<div class="col-md-3"><label>Price</label></div>
				<div class="col-md-9"><input class="form-control"  type="text" name="price" value="" required></div></div>

				<div class="row mb-3">
					<div class="col-md-3"><label>Color</label></div>
				<div class="col-md-9"><input class="form-control" type="text" name="color" value="" required></div></div>



			<div class="row mb-3">
			<div class="col-md-3"><label>Image</label></div>
				<div class="col-md-3"><input type="hidden" name="imgPath" value="">
				<input type="file" name="uploadImage"></div>
			</div>


				<div class="text-right"><input type="submit" value="submit" name="addProduct" class="btn btn-primary"></div>
				<br><br>

			</form>
	</div>

</main>

<?php include('../includes/adminFooter.php'); ?>