<?php

function getAllProducts(){
    global $db;
    $sql = 'SELECT * FROM products';
    $products = $db->prepare($sql);
    $products -> execute();
    //$products = $query -> fetchAll();
   //$query->closeCursor();
    return $products;
}

function getAllCategories(){

    global $db;
    $sql = 'SELECT * FROM category';
    $categories = $db->prepare($sql);
    $categories -> execute();
    return $categories;
}

function getProductDetailsByID($productID){
    global $db;
    $query = 'SELECT * FROM products WHERE productID = :productID';
    $statement = $db->prepare($query);
    $statement->bindValue(':productID', (int)$productID);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;

}

function updateProduct($categoryID, $title, $productDescription, $quantity, $listPrice, $price,$color,$imgPath, $productID){
     global $db;
     $data = [
    'categoryID' => $categoryID,
    'title' => $title,
    'productDescription' => $productDescription,
    'quantity' => $quantity,
    'listPrice' => $listPrice,
    'price' => $price,
    'color' => $color,
    'imgPath' => $imgPath,
    'productID' => $productID
     ];

     $query = 'UPDATE products SET categoryID=:categoryID,
              title=:title,
              productDescription=:productDescription,
              quantity=:quantity,
              listPrice =:listPrice,
              price =:price,
              color=:color,
              imgPath =:imgPath
              WHERE productID=:productID';

    $statement = $db->prepare($query);
    $statement->execute($data);
    $statement->closeCursor();
}

function addProduct($categoryID, $title, $productDescription, $quantity, $listPrice, $price,$color,$imgPath){
  global $db;
  $query ='INSERT INTO products (categoryID, title, productDescription, quantity, listPrice, price,color,imgPath) VALUES (:categoryID, :title, :productDescription, :quantity, :listPrice, :price, :color,:imgPath)';
  $statement = $db->prepare($query);
  $statement->bindValue(':categoryID', $categoryID);
  $statement->bindValue(':title', $title);
  $statement->bindValue(':productDescription', $productDescription);
  $statement->bindValue(':quantity', $quantity);
  $statement->bindValue(':listPrice', $listPrice);
  $statement->bindValue(':price', $price);
  $statement->bindValue(':color', $color);
  $statement->bindValue(':imgPath', $imgPath);
  $statement->execute();
  $statement-> closeCursor();
  $pID = $db->lastInsertId();
}


function deleteProduct($productID){
	global $db;
	$query = 'DELETE FROM products WHERE productID = :productID';
	$statement = $db->prepare($query);
	$statement->bindValue(':productID', $productID);
	$statement->execute();
	$statement->closeCursor();


}

function checkUser($email, $password){
	global $db;
    $query = 'SELECT * FROM customers WHERE
	isAdmin = 1 and email = :email and password = :password';
    $statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':password', $password);
    $statement->execute();
    $user = $statement->fetch();
    //$user->closeCursor();
    return $user;
}


?>

