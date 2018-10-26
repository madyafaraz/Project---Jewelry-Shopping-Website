<?php include('../includes/adminHeader.php');
require_once('../includes/config.php');
require_once('../model/adminDB.php');
require_once('adminController.php');
//session_start();

$productID = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$_SESSION['editProductID'] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$product = getProductDetailsByID($productID);

?>
<main>
	
	<div class="fixedSpace"></div>
	<div class="container">
		<form action="productlist.php" enctype="multipart/form-data" method="post">
				
			
			
			<h3>Edit Product Details</h3>
			<p>Update or delete product details</p>
			
			
			
			<br>

				
			<div class="row mb-3">
			<div class="col-md-3"><label>Category</label></div>
			<div class="col-md-9"><select name="categoryID" class="form-control" >
					<?php foreach ( $categories as $category ) : ?>
					<option value="<?php echo $category['categoryID'].'_'.$category['categoryName']; ?>" <?php if($product[ 'categoryID'] == $category[ 'categoryID']) echo 'selected' ; ?> >
						<?php echo $category['categoryName']; ?>
					</option>
					<?php endforeach; ?>
				</select></div>
			</div>
			
			
				
			
			<div class="row mb-3">
			<div class="col-md-3"><label>Title</label></div>
			<div class="col-md-9"><input  class="form-control" type="text" name="title" value="<?php echo $product['title']; ?>"></div>
			</div>
			
				
			
			
			<div class="row mb-3">
			<div class="col-md-3"><label>Description</label></div>
			<div class="col-md-9"><textarea class="form-control"  name="productDescription" id="productDescription" ><?php echo $product['productDescription']; ?></textarea></div>
			</div>

				
				
				
			
				<div class="row mb-3">
			<div class="col-md-3"><label>Quantity</label></div>
			<div class="col-md-9"><input class="form-control"  type="text" name="quantity" value="<?php echo $product['quantity']; ?>"></div>
			</div>
			
			
			
			
			
			<div class="row mb-3">
			<div class="col-md-3"><label>List Price</label></div>
			<div class="col-md-9"><input class="form-control"  type="text" name="listPrice" value="<?php echo $product['listPrice']; ?>"></div>
			</div>
			
			
			
				
		
				
			<div class="row mb-3">
			<div class="col-md-3"><label>Price</label></div>
			<div class="col-md-9"><input  class="form-control" type="text" name="price" value="<?php echo $product['price']; ?>"></div>
			</div>
			
				
			
			
				
				
				<div class="row mb-3">
			<div class="col-md-3"><label>Color</label></div>
			<div class="col-md-9"><input class="form-control"  type="text" name="color" value="<?php echo $product['color']; ?>"></div>
			</div>
			
			
			
			
			
				<div class="row mb-3">
			<div class="col-md-3"><label>Image</label></div>
			<div class="col-md-9"><input class="form-control" type="hidden" name="imgPath" value="<?php echo $product['imgPath'];?>"></div>
			</div>
			
			
			
				
				<img class="smallImage" name="imgPath" src="<?php echo BASEURL . $product['imgPath']; ?>" alt="<?php echo $product['title']; ?>">

				
			
			<div class="row mb-3">
			<div class="col-md-12"><input type="checkbox" value="off"  name="uploadImage" id="changeImage">&nbsp;Upload New Image?</div>
			</div>
				
			
			<div id="imgDiv">
					<input type="file" name="uploadImage">

			</div>
				
			<br>

			<input type="submit" value="Update" name="updateProduct" class="btn btn-primary">
				
			
			<input  class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')" name="deleteProduct">
<br>
<br>


			</form>
	</div>

</main>

<?php include('../includes/adminFooter.php'); ?>