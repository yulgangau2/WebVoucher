<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="modal-dialog text-left">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header" style="background-color:#ff9900; color:white; border-radius : 5px 5px 0px 0px">
            
            <h2 class="modal-title" style="font-weight:bold; padding-left:15px; padding-right:30px">Create Voucher</h2>
        </div>

        <form action="CreateVoucherProcess.php" method="post">
        <div class="modal-body" style="padding-left:30px; padding-right:30px">
            <div class="form-group">
                <h3>Voucher Name</h3>
                <input type="text" name="name" class="form-control" id="text-input" />
            </div>
            <div class="form-group">
                <h3>Description</h3>
                <input type="text" name="des" class="form-control" id="text-input" />
            </div>
            <div class="form-group">
                <h3>Expired Date</h3>
                <input type="date"  name="date" />
            </div>
            <input type="hidden">
            <div class="form-group">
                <h3>Voucher Picture</h3>
                <span class="btn btn-default btn-file">
                    Browse <input type="file">
                </span>
            </div>
           

        </div>
        <div class="modal-footer">
        <div class="col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-8">
            <button type="submit" class="btn btn-success btn-block" data-dismiss="modal">Submit</button>
        </div>
        </div>
        </form>
    </div>
  </div>
</body>
</html>