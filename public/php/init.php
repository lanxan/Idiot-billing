<?php
	$host = "idiot-billing-phpmyadmin.ap01.aws.af.cm"
	$username = "evan406@hotmail.com";
	$password = "theones";
	$dbname = "diary-billing";
	$con = mysqli_connect($host, $username, $password, $dbname);
	if(mysqli_connect_errno($con)){
		echo "Error: " . mysqli_connect_error();
		mysqli_close($con);
	}
?>
