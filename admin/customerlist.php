<?php include('../includes/adminHeader.php');
require_once('../includes/config.php');
require_once('../model/customerDB.php');
require_once('customerController.php');
?>
<main>

	
	<div class="fixedSpace"></div>
    <div class="container">

                <h4 class="mb-4 mt-4">Customer List</h4>
                <div class="table-responsive">

<form action="" method="post" >
                    <table id="mytable" class="table border cartTable">

                        <thead>
                            <th class="text-center">Customer ID</th>
                            <th class="text-center">First Name</th>
                            <th class="text-center">Last Name</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">City</th>
                            <th class="text-center">Zipcode</th>
                            <th class="text-center">State</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Email</th>
                            <th>View Orders</th>

                        </thead>
                        <tbody>
                            <?php foreach($customers as $customer):?>
                            <tr>
                                <td>
								<input type="hidden" name="customerID" value="<?php echo $customer['customerID'];?>">
                                    <?php echo $customer['customerID']; ?>
                                </td>
                                <td>
                                    <?php echo $customer['firstName']; ?>
                                </td>
                                <td>
                                    <?php echo $customer['lastName']; ?>
                                </td>
                                <td><?php echo $customer['address']; ?></td>
                                <td class="text-center">
                                <?php echo $customer['city']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $customer['zipcode']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $customer['state']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $customer['phone']; ?>
                                </td>
                                <td class="text-center"> <?php echo $customer['email']; ?></td>
                                <td>

                                    <p data-placement="top" data-toggle="tooltip" title="customerOrders"><a class="btn btn-primary btn-xs btn-orders"
                                            name="customerOrders" href="customerorderlist.php?id=<?php echo $customer['customerID']; ?>"><i
                                                class="fas fa-hand-holding-usd"></i></a>
                                    </p>
                                </td>

                            </tr>
                            <?php endforeach; ?>

                        </tbody>

                    </table>
</form>
              

                </div>

    </div>

</main><br>


<?php include('../includes/adminFooter.php'); ?>