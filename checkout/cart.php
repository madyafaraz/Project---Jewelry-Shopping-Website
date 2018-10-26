<?php require_once('cart_view.php');
require_once('cartController.php');

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updatecart']))
{
    $new_qty_list = filter_input(INPUT_POST, 'newqty', FILTER_DEFAULT, 
    FILTER_REQUIRE_ARRAY);
    foreach($new_qty_list as $key => $qty) {
    if ($_SESSION['cart'][$key]['qty'] != $qty) {
    update_item($key, $qty);
    }
    }
} else if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['checkout'])){

    header("Location:checkout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div class="container">
	
	<h2>My Cart</h2>
    <main>
       
        <?php if (empty($_SESSION['cart']) || 
                  count($_SESSION['cart']) == 0) : ?>
            <p>There are no items in your cart.</p>
        <?php else: ?>
            <form action="" method="post">
            <input type="hidden" name="action" value="update">
            <div class="table-responsive">
            <table class="table table-bordered">
                <tr id="cart_header">
                    <th class="left">Item</th>
                    <th class="right">Item Price</th>
                    <th class="right">Quantity</th>
                    <th class="right">Item Total</th>
                </tr>

            <?php foreach( $_SESSION['cart'] as $key => $item ) :
                $price  = number_format($item['price'],  2);
                $total = number_format($item['total'], 2);
            ?>
                <tr>
                    <td>
                        <?php echo $item['title']; ?>
                    </td>
                    <td class="right">
                        $<?php echo $price; ?>
                    </td>
                    <td class="right">
                        <input type="number" class="cart_qty"
                            name="newqty[<?php echo $key; ?>]" min="0"
                            value="<?php echo $item['qty']; ?>">
                    </td>
                    <td class="right">
                        $<?php echo $total; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
                
                <!--<tr>
                    <td colspan="4" class="right">
                        <button type="submit" class="btn btn-warning">Update Cart</button>
                    </td>
                </tr> -->
            </table>
            </div>
            <div id="cart_footer" class="float-right mb-4">
          
                    <span class="font-weight-bold"><b>Subtotal</b></span>
                    <span class="font-weight-bold">$<?php echo $totalPrice = get_subtotal(); ?></span>
                </div>


                <div class="clearfix"></div>
                    <div class="d-flex flex-wrap flex-row justify-content-between">
                    <div>
                    <span>Enter Coupon :</span>
                    <span>
                    <div class="form-group d-inline-block"><input class="form-control" type="text" placeholder="Enter Coupon.."></div>
                    </span>
                    </div>
                    <div>
                    <button type="submit" name="updatecart" class="btn btn-primary"> Update Cart </button>
                    <button type="submit" name="checkout" class="btn btn-primary "> Checkout </button>
                
                    </div>
                    </div>


           
            </form>
        <?php endif; ?>

    </main>
	
	
	</div>
</body>
</html>