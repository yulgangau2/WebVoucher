<?php
session_start();
if (isset($_session['login'])){
    header("location:login.php");
}
include ("connectdb.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

	$name = $_POST['name'];
	$des = $_POST['des'];
	$date = $_POST['date'];

	$insert = mysqli_query($voucher,"INSERT INTO voucher values ('','$name','$des','$date','','','','')")or die(mysql_error());//or die(mysql_error());

	//$inserQuery = mysql_query(" INSERT INTO video VALUES('','$name','$path','$volume','$code','$chapter','$stamp','$id') ") or die(mysql_error());

	 header("location:uppicture.php?des=".$name);
?>
	
</body>
</html>