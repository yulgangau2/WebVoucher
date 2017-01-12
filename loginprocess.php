<?php
session_start();
	$id = $_POST['id'];
	$pass = $_POST['pass'];

	if($id == "admin@admin"){
		if($pass == "123456"){
			$_SESSION ['login'] = $id;
				header("location:CardView.php");
		}else {
		echo "password ผิด";
		header("location:login.php");
		}
	}else{
		echo "email ผิด";
		header("location:login.php");
	}
