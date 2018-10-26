<?php

function AddOrder($orderNo, $customerId, $totalPrice, $cardName, $cardNumber,$cardExpiration, $shipAddress, $shipCity, $shipZipcode, $shipState, $billAdress, $billCity, $billState, $billZipcode, $cardCVV){
    global $db;
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,TRUE);
    $query = 'INSERT INTO orders (orderNo, customerId, totalPrice, cardName, cardNumber,
     cardExpiration, shipAddress, shipCity, shipZipcode, shipState, billAdress, billCity,
     billState, billZipcode, cardCVV,orderDate, orderStatus) VALUES (:orderNo, :customerId, :totalPrice, :cardName, :cardNumber, :cardExpiration, :shipAddress, :shipCity, :shipZipcode, :shipState, :billAdress, :billCity, :billState, :billZipcode, :cardCVV, :orderDate, :orderStatus)';
    $statement = $db->prepare($query);
    $statement->bindValue(':orderNo', $orderNo);
    $statement->bindValue(':customerId', $customerId);
    $statement->bindValue(':totalPrice', $totalPrice);
    $statement->bindValue(':cardName', $cardName);
    $statement->bindValue(':cardNumber', $cardNumber);
    $statement->bindValue(':cardExpiration', $cardExpiration);
    $statement->bindValue(':shipAddress', $shipAddress);
    $statement->bindValue(':shipCity', $shipCity);
    $statement->bindValue(':shipZipcode', $shipZipcode);
    $statement->bindValue(':shipState', $shipState);
    $statement->bindValue(':billAdress', $billAdress);
    $statement->bindValue(':billCity', $billCity);
    $statement->bindValue(':billState', $billState);
    $statement->bindValue(':billZipcode', $billZipcode);
	$statement->bindValue(':cardCVV', $cardCVV);
	$statement->bindValue(':orderDate', date('Y/m/d'));
	$statement->bindValue(':orderStatus', 'New');
    $statement->execute();
    $oID = $db->lastInsertId();
    $statement->closeCursor();
   return $oID;

}

function AddOrderDetails($orderID, $price, $productID, $quantity){

    global $db;
    $query = 'INSERT INTO orderdetails (orderID, price, productID, quantity) VALUES (:orderID, :price, :productID, :quantity)';
    $result = $db->prepare($query);
    $result->bindValue(':orderID', $orderID);
    $result->bindValue(':price', $price);
    $result->bindValue(':productID', $productID);
    $result->bindValue(':quantity', $quantity);
    $result->execute();
    $result->closeCursor();
    $odID = $db->lastInsertId();
}


function getOrderDetailsByOrderID($orderID){
  global $db;
  $query ='SELECT p.title as title, p.listPrice as listPrice, od.price as price, od.quantity as quantity FROM orderdetails as od join products as p
  on od.productID = p.productID
  where od.orderID = :orderID';
  $statement = $db->prepare($query);
  $statement->bindValue(':orderID', $orderID);
  $statement-> execute();
  $orderDetails = $statement->fetchAll();
  $statement->closeCursor();
  return $orderDetails;

}

function getOrderByOrderID($orderID){
	global $db;
	$query ='SELECT * FROM orders WHERE id = :orderID';
	$statement = $db->prepare($query);
	$statement->bindValue(':orderID', $orderID);
	$statement-> execute();
	$orders = $statement->fetch();
	$statement->closeCursor();
	return $orders;

}


function getOrderStatus(){

    global $db;
    $sql = 'SELECT * FROM orderstatus';
    $status = $db->prepare($sql);
    $status -> execute();
    return $status;
}


function updateOrder($orderID, $cardName, $cardNumber,$cardExpiration, $shipAddress, $shipCity, $shipZipcode, $shipState, $billAdress, $billCity, $billState, $billZipcode, $cardCVV, $orderStatus){

	global $db;
	$data = [
   'orderID' => $orderID,
   'cardName' => $cardName,
   'cardNumber' => $cardNumber,
   'cardExpiration' => $cardExpiration,
   'shipAddress' => $shipAddress,
   'shipCity' => $shipCity,
   'shipZipcode' => $shipZipcode,
   'shipState' => $shipState,
   'billAdress' => $billAdress,
   'billCity' => $billCity,
   'billState' => $billState,
   'billZipcode' => $billZipcode,
   'cardCVV' => $cardCVV,
   'orderStatus' => $orderStatus
	];

	$query = 'UPDATE orders SET cardName=:cardName,
			 cardNumber=:cardNumber,
			 cardExpiration=:cardExpiration,
			 shipAddress=:shipAddress,
			 shipCity =:shipCity,
			 shipZipcode =:shipZipcode,
			 shipState=:shipState,
			 billAdress=:billAdress,
			 billCity =:billCity,
			 billZipcode =:billZipcode,
			 billState=:billState,
			 cardCVV =:cardCVV,
			 orderStatus=:orderStatus
			 WHERE id=:orderID';

   $statement = $db->prepare($query);
   $statement->execute($data);
   $statement->closeCursor();
   $result = $statement -> rowCount();
   return $result;
}


function getAllStates(){

    global $db;
    $sql = 'SELECT * FROM states';
    $states = $db->prepare($sql);
    $states -> execute();
    return $states;
}

function deleteOrder($deleteID){
	global $db;
	$query = 'DELETE FROM orders WHERE id = :deleteID';
	$statement = $db->prepare($query);
	$statement->bindValue(':deleteID', $deleteID);
	$statement->execute();
	$statement->closeCursor();


}

function getAllOrdersByCustomerID($customerID){
	global $db;
	$query = 'SELECT o.id, o.orderNo, o.orderDate, SUM(od.price) as total, o.orderStatus, CONCAT(o.shipAddress,",", o.shipCity,",", o.shipZipcode,"-", o.shipState) AS ShippingAddress, CONCAT(o.billAdress,",", o.billCity,",",o.billZipcode,"-", o.billState) AS BillingAddress FROM orders as o join orderdetails as od on o.id = od.orderID where customerId = :customerID
	group by o.orderNo';
	$statement = $db->prepare($query);
	$statement->bindValue(':customerID', (int)$customerID);
	$statement-> execute();
	$orders = $statement -> fetchAll();
    $statement->closeCursor();
    return $orders;
}

?>