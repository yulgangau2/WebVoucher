<?php
include ("connectdb.php");

$id = $_GET['id'];
$subject =$_GET['subject'];
$num = $_GET['num'];
$com = "completed";

$update = mysqli_query($voucher,"UPDATE student_has_voucher SET status = '$com' where code = '$id' ")or die(mysql_error());

header("location:Details.php?subject=".$subject."&num=".$num);