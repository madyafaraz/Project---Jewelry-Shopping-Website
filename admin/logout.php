<?php
session_start();

unset($_SESSION['customerID']);
header("Location:index.php");

?>