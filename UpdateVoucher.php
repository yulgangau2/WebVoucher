<?php
    session_start();
if (!isset($_SESSION['login'])){
   header("location:login.php");
    
}
    date_default_timezone_set("Asia/Bangkok");
    include ("connectdb.php");


    $id = $_GET['id'];

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

    <style>
        
    div.col-lg-4.col-lg-offset-4.col-md-4.col-md-offset-4.col-sm-4.col-sm-offset-4.col-xs-10.col-xs-offset-1.margintop {
  margin-top:100px;
}

button.btn.btn-default.btn-block.create-next {
  background-color:rgba(255,153,0,0.75);
}

.create-next {
  background-color:rgba(255,153,0,1);
  color:#ffffff;
  font-weight:bold;
  transition:0.25s ease-in-out;
  margin-top:25px;
}

.create-next:hover {
  background-color:rgba(255,153,0,0.75);
  color:#ffffff;
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

 h1,h2,h3,h4{
    font-weight: bold;
 }
    </style>
</head>

<body>

<?php 
	
	$query = mysqli_query($voucher,"SELECT * FROM voucher where id = '$id' ");
	$row = mysqli_fetch_assoc($query);
?>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 margintop card">
            <div class="row">
                <div class="col-md-12">

                <form action="UpdateProcess.php" method="post">
                    <h1>Update Voucher</h1></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
    <h3>Voucher Name</h3>
    <input type="text" name="name" class="form-control" id="text-input" value="<?php echo $row['description']; ?>" />
</div>
<div class="form-group">
    <h3>Price</h3>
    <input type="text" name="price" class="form-control" id="text-input" value="<?php echo $row['price']; ?>" />
</div>
<div class="form-group">
    <h3>Expired Date</h3>
    <input type="date" name="date" value="<?php 
    $date = explode(" ", $row['exp_date']);
    echo $date[0]; ?>" />
      
     <input type="hidden" name="id" value="<?php  echo $id; ?>">
</div>

<div class="form-group">
    <h3>Academic Year</h3>
    <input type="text" name="academic" class="form-control" id="text-input" value="<?php echo $row['academic_year']; ?>" />
</div>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6">
                    <button type="submit" class="btn btn-block create-next">Update</button>
                </div>
            </div>
        </div>

       

</form>

    </div>

    

   
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Countdown.js"></script>


</body>

</html>