<?php
require_once('../model/restDB.php');

if($_GET['format'] == 'json' and $_GET['action'] == 'products') {
    header('Content-Type: text/plain');
    echo json_encode(getProducts(), JSON_PRETTY_PRINT);

}elseif($_GET['format'] == 'json' and $_GET['action'] == 'productsbyprice') {
	header('Content-Type: text/plain');
	$from = filter_input(INPUT_GET, 'from');
	$to = filter_input(INPUT_GET, 'to');
    echo json_encode(getProductsByPrice($from, $to), JSON_PRETTY_PRINT);

}elseif ($_GET['format'] == 'xml' and $_GET['action'] == 'productsbyprice'){
	header('Content-Type: text/xml');
	$from = filter_input(INPUT_GET, 'from');
	$to = filter_input(INPUT_GET, 'to');
	$data = getProductsByPrice($from, $to);
	$xml = new SimpleXMLElement('<products/>');
   // function callback to create xml tags for file
	productArray2XML($xml, $data);
   // save as xml file
	$xml->asXML('data.xml');
	$file = file_get_contents('data.xml');
	echo $file;


}elseif ($_GET['format'] == 'xml' and $_GET['action'] == 'products'){
     header('Content-Type: text/xml');
     $data = getProducts();
     $xml = new SimpleXMLElement('<products/>');
    // function callback to create xml tags for file
     productArray2XML($xml, $data);
    // save as xml file
     $xml->asXML('data.xml');
     $file = file_get_contents('data.xml');
     echo $file;


}elseif ($_GET['format'] == 'xml' and $_GET['action'] == 'productsbycategory'){
	header('Content-Type: text/xml');
	$name = strtolower(filter_input(INPUT_GET, 'category'));
	if(strtolower($name) == "ring" OR strtolower($name) == "rings" ) {
		$id = 1;
		$data = getProductsByCategory($id);
		$xml = new SimpleXMLElement('<products/>');
	// function callback to create xml tags for file
		productArray2XML($xml, $data);
	// save as xml file
		$xml->asXML('data.xml');
		$file = file_get_contents('data.xml');
		echo $file;
	}
	elseif(strtolower($name) == "bracelet" OR strtolower($name) == "bracelets" ) {
		$id = 2;
		$data = getProductsByCategory($id);
		$xml = new SimpleXMLElement('<products/>');
	// function callback to create xml tags for file
		productArray2XML($xml, $data);
	// save as xml file
		$xml->asXML('data.xml');
		$file = file_get_contents('data.xml');
		echo $file;

	}
	elseif(strtolower($name) == "earrings" OR strtolower($name) == "earring" ) {
		$id = 3;
		$data = getProductsByCategory($id);
		$xml = new SimpleXMLElement('<products/>');
	// function callback to create xml tags for file
		productArray2XML($xml, $data);
	// save as xml file
		$xml->asXML('data.xml');
		$file = file_get_contents('data.xml');
		echo $file;

	}


}elseif($_GET['format'] == 'json' and $_GET['action'] == 'productsbycategory') {
	header('Content-Type: text/plain');
	$name = strtolower(filter_input(INPUT_GET, 'category'));
	if(strtolower($name) == "ring" OR strtolower($name) == "rings" ) {
		$id = 1;
		echo json_encode(getProductsByCategory($id), JSON_PRETTY_PRINT);
	}
	elseif(strtolower($name) == "bracelet" OR strtolower($name) == "bracelets" ) {
		$id = 2;
		echo json_encode(getProductsByCategory($id), JSON_PRETTY_PRINT);
	}
	elseif(strtolower($name) == "earrings" OR strtolower($name) == "earring" ) {
		$id = 3;
		echo json_encode(getProductsByCategory($id), JSON_PRETTY_PRINT);
	}


}else {
    die("Wrong parameter on url !");
}



