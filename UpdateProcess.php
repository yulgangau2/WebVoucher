<?php 
	    session_start();
if (!isset($_SESSION['login'])){
   header("location:login.php");
    
}
    date_default_timezone_set("Asia/Bangkok");
    include ("connectdb.php");

$nowDat = date("Y-m-d");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$expDat =  $_POST['date'];
	$year = $_POST['academic'];
	$a=date("h:i:s");
	$nowDate = $nowDat.' '.$a;
	$date = $expDat.' 23.59.59';

	
	$update= mysqli_query($voucher,"UPDATE voucher SET description = '$name', price= '$price' ,exp_date='$date' ,academic_year='$year',last_update='$nowDate' where id ='$id' ") or die(mysql_error());

		header("location:CardView.php");