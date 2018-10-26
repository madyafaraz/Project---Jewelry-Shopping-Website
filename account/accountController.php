<?php
require_once(ROOT_PATH .'model/database.php');
require_once(ROOT_PATH .'model/accountsDB.php');
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])){

	$useremail = filter_input(INPUT_POST, 'useremail', FILTER_VALIDATE_EMAIL);
	$userpassword = filter_input(INPUT_POST, 'userpassword');

	$user = checkUser($useremail, $userpassword);
	if($user){
		$_SESSION['customerID'] = (int)$user['customerID'];
		header("Location:home.php?user=".$user['firstName']);
		exit();

	}else{
		echo "invalid login attempt";
	}

}


?>