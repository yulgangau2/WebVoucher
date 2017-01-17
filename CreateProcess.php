<?php
date_default_timezone_set("Asia/Bangkok");


session_start();
if (isset($_session['login'])){
    header("location:login.php");
}
include ("connectdb.php");


	$name = $_POST['name'];
	$price = $_POST['price'];
	$expDat = $_POST['date'];
	$timenow = $_POST['xxx'];
	$nowDate = date("Y-m-d");
	$academic_year = $_POST['academic'];


	$expDate = $expDat.' 23.59.59';
	$date = $nowDate.' '.$timenow;


	

	$insert = mysqli_query($voucher,"INSERT INTO voucher  VALUES ('','$name','$price','$expDate','$academic_year','','$date','')") or die(mysql_error());

	

		header("location:uppicture.php?t=".$date);