<?php

function getAllCustomers(){
    global $db;
    $sql = 'SELECT * FROM customers  WHERE isAdmin = 0 ORDER BY customerID ASC';
    $customers = $db->prepare($sql);
    $customers -> execute();
    return $customers;
}








?>

