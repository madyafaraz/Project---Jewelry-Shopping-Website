<?php

function getProducts(){
	$connect = mysqli_connect("localhost", "root", "","jewelrydb");
    $sql = "SELECT * FROM products";
    $result = mysqli_query($connect,$sql);
    $json_array = array();
    while ($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
    }
	return $json_array;



}

function getProductsByCategory($id){
	$connect = mysqli_connect("localhost", "root", "","jewelrydb");
    $sql = "SELECT * from products WHERE categoryID ='".$id."'";
    $result = mysqli_query($connect,$sql);
    $json_array = array();
    while ($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
    }
    return $json_array;

}

function getProductsByPrice($from, $to){
	$connect = mysqli_connect("localhost", "root", "","jewelrydb");
    $sql = "SELECT * FROM products WHERE price BETWEEN $from AND $to";
    $result = mysqli_query($connect,$sql);
    $json_array = array();
    while ($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
    }
    return $json_array;

}

function getAllProductsInPriceRange(){
	global $db;
    $sql = "SELECT * FROM products";
    $result = mysqli_query($db,$sql);
    $json_array = array();
    while ($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
    }
    return $json_array;

}


function productArray2XML($obj, $array)
{
    foreach ($array as $key => $value)
    {
        if(is_numeric($key))
            $key = 'product';

        if (is_array($value))
        {
            $node = $obj->addChild($key);
            productArray2XML($node, $value);
        }
        else
        {
            $obj->addChild($key, htmlspecialchars($value));
        }
    }
}



?>