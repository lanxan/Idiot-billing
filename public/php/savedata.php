<?php
	include 'init.php';
	
	$_data = json_decode($data);
	mysqli_query($con, "INSERT INTO diary-billing(date, moneyStart, moneyEnd, moneyPlus, moneyTotal) 
		VALUES($_data->{'date'}, $_data->{'moneyStart'}, $_data->{'moneyEnd'}, $_data->{'moneyPlus'}, $_data->{'moneyTotal'})");
	
	mysqli_close($con);
?>