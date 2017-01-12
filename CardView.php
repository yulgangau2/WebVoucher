<?php
session_start();
if (isset($_session['login'])){
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
</head>

<body>
<?php
$date = date("Y-m-d");


?>

    <div class="col-md-12 hidden" id="YellowLine">
        <p>Paragraph</p>
    </div>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 firstcard">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="title bold">ALL VOUCHER</h1></div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                    <!-- button -->
<div class="dropdown btn-group" role="group">
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-right:5px;">View <span class="caret"></span></button>
        <ul role="menu" class="dropdown-menu">
            <li>
                <a href="ListView.php">
                    <table>
                        <tr>
                            <td style="width:50px"><span class="glyphicon glyphicon-list-alt"></span></td>
                            <td>List</td>
                        </tr>
                    </table>
                </a>
            </li>
            <li>
                <a href="CardView.php">
                    <table>
                        <tr>
                            <td style="width:50px"><span class="glyphicon glyphicon-th-list"></span></td>
                            <td>Card</td>
                        </tr>
                    </table>
                </a>
            </li>
            <li class="hidden-sm hidden-xs">
                <a href="GridView.php">
                    <table>
                        <tr>
                            <td style="width:50px"><span class="glyphicon glyphicon-th-large"></span></td>
                            <td>Grid</td>
                        </tr>
                    </table>
                </a>
            </li>
        </ul>
    </div>
    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#createvoucher">Create Voucher</button>
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
                    <li role="presentation"><a href="logout.php" class="page-scroll"><strong>LOG OUT</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>

<?php

    $getsubject=mysqli_query($voucher,"SELECT * FROM voucher");
   
    while($row=mysqli_fetch_assoc($getsubject)){
 $count = mysqli_query($voucher,"SELECT * From student_has_voucher where student_has_voucher.voucher_id = ".$row['id']);

         $num_rows = mysqli_num_rows($count);
         $row2=mysqli_fetch_assoc($count);
?>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-3 col-sm-10 col-xs-10 col-xs-offset-1 card">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img src="https://udemy-images.udemy.com/course/750x422/62606_8221_7.jpg" class="img-responsive"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                    <h2 class="text-center bold">ENGLISH @ CAMT'59</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="left">Status </td>
                            <?php 
                            if ($date <= $row['exp_date']){
                            echo '<td class="right"> <span class="badge public ">Activate</span></td>';
                            }else {
                            echo '<td class="right"> <span class="badge expired">Expired</span></td>';
                            }
                            ?>

                                </tr>
                                <tr>
                                    <td class="left">Enrollment </td>
                                    <td class="right"><?php echo $num_rows;?></td>
                                </tr>
                                <tr>
                                    <td class="left">Expired Date</td>
                                    <td class="right"><?php 
                                    $show_date = explode(" ",$row['exp_date']);
                                    echo $show_date[0];
                                    ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                    <?php
                        echo '<div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1"><a class="btn btn-primary bold list-margin" role="button" href="Details.php?subject='.$row['id'].'&num='.$num_rows.'">More Details</a></div>';
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}

?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Countdown.js"></script>
</body>

</html>