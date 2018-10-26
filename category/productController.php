<?php
require_once('../model/database.php');
require_once('../model/productDB.php');?>


<?php //function calls start here

$products = getProductsByCategoryID($categoryID);
    

?>