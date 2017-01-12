<?php
session_start();
if (isset($_session['login'])){
    header("location:CardView.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnglishVoucher_10Jan</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/AllVoucher.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="loginprocess.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/Subtraction 67.png" class="logo"></div>
            <div class="form-group">
                <input class="form-control" type="email" name="id" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Countdown.js"></script>
</body>

</html>