<?php include('../includes/adminHeader.php');
require_once('../includes/config.php');
require_once('../model/ordersDB.php');
require_once('customerController.php');

$orderID = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$order = getOrderByOrderID($orderID);
$details = getOrderDetailsByOrderID($orderID);
$status = getOrderStatus();


?>
<div class="fixedSpace"></div>
	<div class="container">
		

			<form action="customerlist.php"  method="post" class="myForm">
			<div>
			<input type="hidden" name="orderID" value="<?php echo $orderID; ?>">
             <h4>ORDER NUMBER: <?php echo $order['orderNo'] ?></h4>
			 <p>
			 <label>Order Status</label>
			 <select name="orderStatus">
					<?php foreach ( $status as $row ) : ?>
					<option value="<?php echo $row['status']; ?>" <?php if($order['orderStatus'] == $row['status']) echo 'selected' ; ?> >
						<?php echo $row['status']; ?>
					</option>
					<?php endforeach; ?>
				</select>
				<br>
			</p>
			</div>
				<h3>Products Ordered</h3>
				<table id="mytable" class="table border cartTable">
				<thead>
				<th>Product Name</th>
				<th>List Price</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
				</thead>
				<tbody>
				<?php foreach($details as $detail): ?>
				<tr>
				<td><?php echo $detail[0]; ?></td>
				<td>$<?php echo $detail[1]; ?></td>
				<td>$<?php echo $detail[2]; ?></td>
				<td><?php echo $detail[3]; ?></td>
				<td><?php echo ( $detail[3] * $detail[2] );  ?></td>
				</tr>
                <?php  endforeach; ?>
				</tbody>
				</table>
				<div class="clearfix"></div>
                <br><hr><br>
				<h3 class="text-uppercase"><strong>Shipping & Billing Details</strong></h3>
				<div id="shippingInfo">
				
					
				<label>Shipping Address</label>
					<input class="form-control" type="text" name="shipAddress" value="<?php echo $order['shipAddress']; ?>">
				
					
					
				<br>
				<input class="form-control"  type="text" name="shipCity" value="<?php echo $order['shipCity']; ?>" class="form-control"><br>
				<input class="form-control" type="text" name="shipZipcode" value="<?php echo $order['shipZipcode']; ?>"><br>
				<select name="shipState" class="form-control">
					<?php foreach ( $shipstates as $state ) : ?>
					<option value="<?php echo $state['stateCode'];?>" <?php if($state['stateCode'] == $order[ 'shipState']) echo 'selected' ; ?> >
						<?php echo $state['stateName']; ?>
					</option>
					<?php endforeach; ?>
				</select>
				<br>
				<label>Billing Address</label>
				<input  class="form-control" type="text" name="billAdress" value="<?php echo $order['billAdress']; ?>"><br>
				<input  class="form-control" type="text" name="billCity" value="<?php echo $order['billCity']; ?>"><br>
				<input  class="form-control" type="text" name="billZipcode" value="<?php echo $order['billZipcode']; ?>"><br>
				<select name="billState"  class="form-control">
					<?php foreach ( $billstates as $state ) : ?>
					<option value="<?php echo $state['stateCode'];?>" <?php if($state['stateCode'] == $order['billState']) echo 'selected' ; ?> >
						<?php echo $state['stateName']; ?>
					</option>
					<?php endforeach; ?>
				</select>
				</div>
				
				<h3 class="mt-5 text-uppercase"><strong>Payment Details</strong></h3>
				<div id="paymentInfo">
				<label><strong>Card Name</strong></label>
				<input  class="form-control" type="text" name="cardName" value="<?php echo $order['cardName']; ?>"><br>
                <label><strong>Card Number</strong></label>
				<input  class="form-control" type="text" name="cardNumber" value="<?php echo $order['cardNumber']; ?>"><br>
				<label><strong>Card Expiration</strong></label>
				<input  class="form-control" type="text" name="cardExpiration" value="<?php echo $order['cardExpiration']; ?>"><br>
				<label><strong>Card CVV</strong></label>
				<input class="form-control" type="text" name="cardCVV" value="<?php echo $order['cardCVV']; ?>"><br>
				
				</div>


				
				<div class="text-right mb-4">
				<input type="submit" value="Delete" onclick="return confirm('Are you sure?')" name="deleteOrder" class="btn btn-danger">
				<input type="submit" value="Update" name="updateOrder" class="btn btn-primary">
					
		</div>


			</form>
		</div>
	

<?php include('../includes/adminFooter.php'); ?>