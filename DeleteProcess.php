<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	
	 session_start();
if (!isset($_SESSION['login'])){
   header("location:login.php");
    
}
    date_default_timezone_set("Asia/Bangkok");
    include ("connectdb.php");


	
	$id = $_GET['id'];

	$delete = mysqli_query($voucher,"DELETE FROM voucher where id ='$id'");
?>


</body>
</html>