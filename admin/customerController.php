<?php
require_once('../model/database.php');
require_once('../model/ordersDB.php');
require_once('../model/customerDB.php');
session_start();



$customers = getAllCustomers();
$shipstates = getAllStates();
$billstates = getAllStates();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateOrder'])){
	$orderID = (int)filter_input(INPUT_POST, 'orderID');
   $orderStatus = filter_input(INPUT_POST, 'orderStatus');
	$shipAddress = filter_input(INPUT_POST, 'shipAddress');
	$shipCity = filter_input(INPUT_POST, 'shipCity');
	$shipZipcode = filter_input(INPUT_POST, 'shipZipcode');
	$shipState = filter_input(INPUT_POST, 'shipState');
	$billAdress = filter_input(INPUT_POST, 'billAdress');
	$billCity = filter_input(INPUT_POST, 'billCity');
	$billZipcode = filter_input(INPUT_POST, 'billZipcode');
	$billState = filter_input(INPUT_POST, 'billState');

	$cardName = filter_input(INPUT_POST, 'cardName');
	$cardNumber = filter_input(INPUT_POST, 'cardNumber');
	$cardExpiration = filter_input(INPUT_POST, 'cardExpiration');
	$cardCVV = filter_input(INPUT_POST, 'cardCVV');

	$result = updateOrder($orderID, $cardName, $cardNumber,$cardExpiration, $shipAddress, $shipCity, $shipZipcode, $shipState, $billAdress, $billCity, $billState, $billZipcode, $cardCVV, $orderStatus);
	//the line is used to refresh the productlist page before loading
	echo "<meta http-equiv='refresh' content='0'>";
 }


 if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteOrder'])){
	$deleteID = (int)$orderID = (int)filter_input(INPUT_POST, 'orderID');

	deleteOrder($deleteID);
	echo "<meta http-equiv='refresh' content='0'>";

 }







?>