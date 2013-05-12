<?php
	$host = "idiot-billing-phpmyadmin.ap01.aws.af.cm"
	$username = "evan406@hotmail.com";
	$password = "theones";
    $dbname = "idiot-billing-phpmyadmin";
    if(!@mysqli_connect($host, $username, $password)){
        die("fail");
    }
    #$con = mysqli_connect($host, $username, $password);
    if(!@mysqli_select_db($dbname){
        die("fail dbname");
    }
?>
