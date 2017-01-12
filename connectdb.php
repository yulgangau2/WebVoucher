
<?php
$voucher=mysqli_connect("cyanizestore.com","cyanizes_kai","123456","cyanizes_voucher");
$camt=mysqli_connect("cyanizestore.com","cyanizes_kai","123456","cyanizes_camt");

mysqli_set_charset($camt,'utf8');
mysqli_set_charset($voucher,'utf8');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



?>
