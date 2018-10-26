<?php
	require_once('../core/init.php');
	require_once('config.php');
	session_start();

// Create a cart array if needed
if (empty($_SESSION['cart'])) { $_SESSION['cart'] = array(); }

     $_SESSION['selectedProductID'] = $_POST['id'];
	$id = $_POST['id'];
	$id = (int)$id;
	$result = $db->query("SELECT * FROM products WHERE productID = '$id'");
	$product = mysqli_fetch_assoc($result);
	$productID = $product['productID'];
?>

<!-- Details Modal -->
<?php ob_start(); ?>
<form action="../checkout/cart_view.php" method="post" >
<input type="hidden" name="action" value="add">
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<div><h4 class="modal-title text-center left" id="titl"><?php echo $product['title']; ?></h4>
                 <input type="hidden" name="title" value="<?php echo $product['title']; ?>" ></div>


				<button type="button" class="close right" onclick="closeModal()" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>


			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img class="details img-responsive" src="<?php echo BASEURL . $product['imgPath']; ?>" alt="<?php echo $product['title']; ?>" id="detailsImage">
							</div>
						</div>

						<div class="col-sm-6">
							<h4>Details</h4>
							<p><?php echo nl2br($product['productDescription']); ?></p>
							<hr>
							<p>Price: $<?php echo $product['price']; ?></p>
							<input type="hidden" name="price" value="<?php echo $product['price']; ?>" >
							<hr>


								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="quantity">Quantity:</label>
											<input type="number" class="form-control" id="quantity" name="quantity" min="0">
										</div>
									</div>

									<div class="col-sm-9">
										<div class="form-group">
											<label for="color">Color:</label>
											<select name="color" class="form-control" id="color">
												<option value=""></option>
												<option value="Rose Gold">Gold</option>
                                                <option value="Silver">Silver</option>

											</select>
										</div>
									</div>

								</div>
								<p><span class="text-danger"><strong>Items left:</strong></span> <span><?php echo $product['quantity']; ?></span></p>
						</div>
					</div>
				</div><!-- /.container-fluid -->
			</div><!-- /.modal-body -->

			<div class="modal-footer">
				<button type="button" class="btn btn-default" onclick="closeModal()">Close</button>
				<button type="submit" name="AddToCart" class="btn btn-primary" onclick="getItemID(<?php echo $itemID = $id; ?>)"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
			</div>
		</div>
	</div>
</div>
</form>
<script>
	function closeModal() {
		jQuery('#details-modal').modal('hide');
		setTimeout(function(){
			jQuery('#details-modal').remove();
			jQuery('.modal-backdrop').remove();
		},500);
	}
</script>
<?php echo ob_get_clean(); ?>