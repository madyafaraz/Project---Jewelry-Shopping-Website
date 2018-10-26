<?php

function getProductsByCategoryID($categoryID){
    global $db;
    $sql = 'SELECT * FROM products WHERE categoryID = :categoryID';
    $query = $db->prepare($sql);
    $query -> bindValue(":categoryID", $categoryID);
    $query -> execute();
    $products = $query -> fetchAll();
    $query->closeCursor();
    return $products;
}


?>