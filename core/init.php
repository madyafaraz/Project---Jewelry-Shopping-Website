<?php
	$db = mysqli_connect('localhost', 'root', '', 'jewelrydb');
	if(mysqli_connect_errno()) {
		echo 'Database connection failed with following errors: '.mysqli_connect_error();
		die();
	}



