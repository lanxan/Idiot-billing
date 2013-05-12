<?php
include("init.php");

$date = "2013/05/09";
$moneyStart = $_POST['moneyStart'];
$moneyEnd = $_POST['moneyEnd'];
$moneyPlus = $_POST['moneyPlus'];
$moneyTotal = $_POST['moneyTotal'];


$sql = "INSERT INTO 'diary-billing' ('date', 'moneyStart', 'moneyEnd', 'moneyPlus', 'moneyTotal') VALUES ($date, $moneyStart, $moneyEnd, $moneyPlus, $moneyTotal);";
if(mysqli_query($sql)){
    echo "新增成功！";
}
else{
    echo "新增失敗！";
}
mysqli_close($con);

?>
