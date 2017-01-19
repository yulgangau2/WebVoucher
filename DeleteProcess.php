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


	$query = mysqli_query($voucher,"SELECT * FROM student_has_voucher where voucher_id ='$id' ");
	$query2 =mysqli_fetch_assoc($query);

	if(isset($query2)){
		$de = mysqli_query($voucher,"DELETE FROM student_has_voucher where voucher_id = '$id' ");

		
	}


	$delete = mysqli_query($voucher,"DELETE FROM voucher where id ='$id'");

 	//header("location:Edit.php");
?>

	
</body>
</html>