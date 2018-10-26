<?php
require_once( '../includes/config.php' );
require_once( ROOT_PATH . 'core/init.php' );
include( ROOT_PATH . 'includes/header.php' );
?>

<div class="container">
	<div class="row">


		<div class="col-md-12">
			<h4 class="mb-4 mt-4">Cart list with items</h4>
			<div class="table-responsive">


				<table id="mytable" class="table border cartTable">

					<thead>

						<th><input type="checkbox" id="checkall"/>
						</th>
						<th>Item</th>
						<th class="cw">Product ID</th>
						<th>Product Details</th>
						<th class="text-center">Email</th>
						<th class="text-center">Quantity</th>
						<th>Edit</th>
						<th>Delete</th>
					</thead>
					<tbody>

						<tr>
							<td><input type="checkbox" class="checkthis"/>
							</td>
							<td>Ring Gold Pearl</td>
							<td class="cw">#1254</td>
							<td>Rose Gold Over Silver Simulated Morganite & Cubic Zirconia Square Halo Ring.</td>
							<td>isometric.mohsin@gmail.com</td>
							<td class="text-center">2</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
								</p>
							</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i></button>
								</p>
							</td>
						</tr>

						<tr>
							<td><input type="checkbox" class="checkthis"/>
							</td>
							<td>Orange Bracelet</td>
							<td class="cw">#227</td>
							<td>Rose Gold Over Silver Simulated Morganite & Cubic Zirconia Square Halo Ring.</td>
							<td>isometric.mohsin@gmail.com</td>
							<td class="text-center">1</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
								</p>
							</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i></button>
								</p>
							</td>
						</tr>


						<tr>
							<td><input type="checkbox" class="checkthis"/>
							</td>
							<td>Hand set</td>
							<td class="cw">#sh65</td>
							<td>Rose Gold Over Silver Simulated Morganite & Cubic Zirconia Square Halo Ring.</td>
							<td>isometric.mohsin@gmail.com</td>
							<td class="text-center">1</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
								</p>
							</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i></button>
								</p>
							</td>
						</tr>



						<tr>
							<td><input type="checkbox" class="checkthis"/>
							</td>
							<td>Jwellery</td>
							<td class="cw">#98yh</td>
							<td>Rose Gold Over Silver Simulated Morganite & Cubic Zirconia Square Halo Ring.</td>
							<td>isometric.mohsin@gmail.com</td>
							<td class="text-center">10</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
								</p>
							</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i></button>
								</p>
							</td>
						</tr>


						<tr>
							<td><input type="checkbox" class="checkthis"/>
							</td>
							<td>Gold plated Earings</td>
							<td class="cw">#67hy</td>
							<td>Rose Gold Over Silver Simulated Morganite & Cubic Zirconia Square Halo Ring.</td>
							<td>isometric.mohsin@gmail.com</td>
							<td class="text-center">1</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs btn-edit" data-title="Edit" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i></button>
								</p>
							</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs btn-delete" data-title="Delete" data-toggle="modal" data-target="#delete"><i class="fas fa-trash-alt"></i></button>
								</p>
							</td>
						</tr>





					</tbody>

				</table>

				<div class="clearfix"></div>
				

			</div>

		</div>
	</div>
</div>

<!-- Edit popup -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
				<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<input class="form-control " type="text" placeholder="Mohsin">
				</div>
				<div class="form-group">

					<input class="form-control " type="text" placeholder="Irshad">
				</div>
				<div class="form-group">
					<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


				</div>
			</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!-- Delete popup -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
				<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
			</div>
			<div class="modal-body">

				<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

			</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<?php include(ROOT_PATH . 'includes/footer.php'); ?>

<script>
	$( document ).ready( function () {
		$( "#mytable #checkall" ).click( function () {
			if ( $( "#mytable #checkall" ).is( ':checked' ) ) {
				$( "#mytable input[type=checkbox]" ).each( function () {
					$( this ).prop( "checked", true );
				} );

			} else {
				$( "#mytable input[type=checkbox]" ).each( function () {
					$( this ).prop( "checked", false );
				} );
			}
		} );

		$( "[data-toggle=tooltip]" ).tooltip();
	} );
</script>