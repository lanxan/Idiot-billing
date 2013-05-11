<?php
    include ('init.php');

	mysqli_query($con, "INSERT INTO diary-billing(moneyStart, moneyEnd, moneyPlus, moneyTotal) 
		VALUES($_POST['moneyStart'], $_POST['moneyEnd'], $_POST['moneyPlus'], $_POST['moneyTotal'])");

	mysqli_close($con);
?>
