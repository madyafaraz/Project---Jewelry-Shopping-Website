<?php
require_once( '../includes/config.php' );
require_once( ROOT_PATH . 'core/init.php' );
include( ROOT_PATH . 'includes/header.php' );
?>
<main>
	<?php
	require_once( '../core/init.php' );
	session_start();

	$_SESSION['selectedProductID'] = $_GET['id'];
	$id = $_POST[ 'id' ];
	$id = ( int )$id;
	$result = $db->query( "SELECT * FROM products WHERE productID = '$id'" );
	$product = mysqli_fetch_assoc( $result );
	$productID = $product[ 'productID' ];
	?>
	<!-- display product image on left   -->
	<form action="../checkout/cart_view.php" method="post">
		<input type="hidden" name="action" value="add">




		<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
						<h4 class="modal-title" id="myModalLabel">
							<?php echo $product['title']; ?>
						</h4>
					</div>


					<div class="modal-body">
						
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-6">
									<div class="center-block">
										<img class="details img-fluid" src="<?php echo BASEURL . $product['imgPath']; ?>" alt="<?php echo $product['title']; ?>" id="detailsImage">
									</div>
								</div>

								<div class="col-sm-6">
									<h4>Details</h4>
									<p>
										<?php echo nl2br($product['productDescription']); ?>
									</p>
									<hr>
									<p>Price: $
										<?php echo $product['price']; ?>
									</p>
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
												<select name="size" class="form-control" id="size">
													<option value=""></option>
													<option value="Rose Gold">Gold</option>
													<option value="Silver">Silver</option>

												</select>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
						<!-- /.container-fluid -->
					</div>
					<!-- /.modal-body -->

					<div class="modal-footer">
						<button type="button" class="btn btn-default" onclick="closeModal()">Close</button>
						<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Show product image  -->
		<div class="left">
			<img class="thumbnailImage" src="<?php echo BASEURL . $product['imgPath']; ?>" alt="<?php echo $product['title']; ?>">
		</div>

		<div class="right">
			<p>
				<?php echo $product['title']; ?>
			</p>
			<p>
				<?php echo $product['productDescription']; ?>
			</p>
			<p class="list-price text-danger">Price:
				<s>
					<?php echo $product['listPrice']; ?>
				</s>
			</p>
			<p class="price">Our Price:
				<?php echo $product['price']; ?>
			</p>

			<div class="col-sm-3">
				<div class="form-group">
					<label for="quantity">Quantity:</label>
					<input type="number" class="form-control" id="quantity" name="quantity" min="0">
				</div>
			</div>

			<div class="col-sm-9">
				<div class="form-group">
					<label for="color">Color:</label>
					<select name="size" class="form-control" id="size">
						<option value=""></option>
						<option value="Rose Gold">Gold</option>
						<option value="Silver">Silver</option>

					</select>
				</div>
			</div>


			<button type="submit" class="btn btn-sm btn-success" href="ProductDetails.php">Details</button>
		</div>
	</form>


</main>

<?php include(ROOT_PATH . 'includes/footer.php'); ?>