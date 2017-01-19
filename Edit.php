
<?php
session_start();
if (!isset($_SESSION['login'])){
   header("location:login.php");
    
}


include ("connectdb.php");


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

 .CreV  {
    color: white;
}

.CreV:hover {
  text-decoration: none;
  color: #ffffff;
}

</style>
</head>

<body>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 firstcard">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="title bold">ALL VOUCHER</h1></div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                    <!-- button -->

    <button class="btn btn-success darc" type="button"   data-toggle="modal" ><a href="Create.php" class="CreV"> Create Voucher</a> </button>
<!-- /button -->

<!-- Modal -->
<div id="createvoucher" class="modal fade" role="dialog">
  <div class="modal-dialog text-left">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header" style="background-color:#ff9900; color:white; border-radius : 5px 5px 0px 0px">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="modal-title" style="font-weight:bold; padding-left:15px; padding-right:30px">Create Voucher</h2>
        </div>
        <div class="modal-body" style="padding-left:30px; padding-right:30px">
            
            
            <div class="form-group">
                <h3>Voucher Name</h3>
                <input type="text" name="text-input" class="form-control" id="text-input" />
            </div>
            <div class="form-group">
                <h3>Description</h3>
                <input type="text" name="text-input" class="form-control" id="text-input" />
            </div>
            <div class="form-group">
                <h3>Expired Date</h3>
                <input type="date" />
            </div>
            <div class="form-group">
                <h3>Voucher Picture</h3>
                <span class="btn btn-default btn-file">
                    Browse <input type="file">
                </span>
            </div>
            
            
        
        </div>
        <div class="modal-footer">
        <div class="col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-8">
            <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Submit</button>
        </div>
        </div>
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link"><strong>CAMT ENGLISH VOUCHER</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                 <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#"><strong>OVERVIEW </strong></a></li>
                    <li role="presentation"><a href="CardView.php"><strong>ALL VOUCHER</strong></a></li>
                    <li role="presentation"><a href="#"><strong>STUDENT INFO</strong></a></li>
                    <li role="presentation"><a href="Edit.php"><strong>EDIT VOUCHER</strong></a></li>
                    <li role="presentation"><a href="logout.php" class="page-scroll"><strong>LOG OUT</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-xs-10 col-xs-offset-1 card">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="edit-col-1">Picture </th>
                            <th class="edit-col-2">Name </th>
                            <th class="edit-col-3"> </th>
                            <th class="edit-col-4"> </th>
                        </tr>
                    </thead>
                    <tbody>
<?php 
    $query = mysqli_query($voucher,'SELECT * FROM voucher ORDER BY date_created DESC ');
    while ($row = mysqli_fetch_assoc($query)) {
       
    
?>
                        <tr>
                            <td> <img src="<?php echo $row['img']; ?>" class="list-img"></td>
                           <td>
                                <p class="list-margin"><?php echo $row['description']; ?> </p>
                            </td>
                            <td>
                                <button class="edit"><a href="UpdateVoucher.php?id=<?php echo $row['id'] ?>">Edit</a></button>
                            </td>
                            <td>
                                <button class="delete"><a href="DeleteProcess.php?id=<?php echo $row['id'] ?>">Delete</a></button>
                            </td>
                        </tr>
<?php 
}
?>

                    </tbody>
                </table>
            </div>
            <hr>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Countdown.js"></script>
</body>

</html>
