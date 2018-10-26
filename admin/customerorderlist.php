<?php include('../includes/adminHeader.php');
require_once('../includes/config.php');
require_once('../model/ordersDB.php');
require_once('customerController.php');


$customerID = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
//$_SESSION['customerIDOrders'] = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$results = getAllOrdersByCustomerID($customerID);


?>
<main>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <h4 class="mb-4 mt-4">All Orders for Customer : <?php echo $customerID; ?> </h4>
                <div class="table-responsive">

<form action="" method="post" >
                    <table id="mytable" class="table border cartTable">

                        <thead>
                            <th class="text-center">Order No.</th>
                            <th class="text-center">Order Date</th>
                            <th class="text-center">Order Status</th>
                            <th class="text-center">Shipping Address</th>
                            <th class="text-center">Billing Address</th>
                            <th class="text-center">Order Total</th>
                            <th>View Details</th>


                        </thead>
                        <tbody>
                            <?php foreach($results as $result):?>
                            <tr>
                                <td>
								<input type="hidden" name="DeleteorderID" value="<?php echo $result['id'];?>">

                                    <?php echo $result['orderNo'].'-'. $result['id']; ?>
                                </td>
                                <td>
                                    <?php echo $result['orderDate']; ?>
                                </td>
                                <td>
                                    <?php echo $result['orderStatus']; ?>
                                </td>
                                <td><?php echo $result['ShippingAddress']; ?></td>
                                <td class="text-center">
                                <?php echo $result['BillingAddress']; ?>
                                </td>
                                <td class="text-center">
                                    $<?php echo $result['total']; ?>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="viewOrder"><a class="btn btn-primary btn-xs btn-orders"
                                            name="viewOrder" href="vieworder.php?id=<?php echo $result['id']; ?>"><i
                                                class="fas fa-hand-holding-usd"></i></a>
                                    </p>
                                </td>


                            </tr>
                            <?php endforeach; ?>

                        </tbody>

                    </table>
</form>
                    <div class="clearfix"></div>


                </div>

            </div>
        </div>
    </div>

</main>

<?php include('../includes/adminFooter.php'); ?>