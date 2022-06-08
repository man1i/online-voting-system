<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/hover.css">
  
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


	<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>
<div class="container-fluid">
	
	<div class="row">

          <?php include 'header.php';?>
</div>
<!---------------------/head--------------------------------->

<div class="row">
	
<div class="col-sm-12">
	<h1 style="text-align: center;font-size: 50px;">Contact Us</h1>
	<center><i class="fa fa-user" style="color: red;font-size:30px;"></i>
		<p style="font-size: 20px;font-style: bold">please contact us.</p></center><hr>
</div>
</div>



<div class="row">
<div class="col-sm-12">
	
	<div class="col-sm-2"></div>
	
	<form action="codes/contactcode.php" method="post">
	<div class="col-sm-8">

		  <div class="controls">

        <div class="row">

            <div class="col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input  type="text" name="name" class="form-control" placeholder="Please enter your firstname" required="required">
                    
                </div>
            </div>
          
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Email</label>
                    <input  type="email" name="email" class="form-control" placeholder="Please enter your email" required="required">
                    
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Phone No</label>
                    <input  type="text" name="no" class="form-control" placeholder="Please enter your Phone Number" required="required">
                    
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Subject</label>
                    <input  type="text" name="subject" class="form-control" placeholder="Please enter your subject" required="required">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" class="form-control" placeholder="Message for me" rows="5" required="required"></textarea>
                    
                </div>
            </div>
            <div class="col-sm-12" style="text-align: center;margin-top: 30px;">
                <input type="submit" class="btn btn-success btn-send" value="Send message" style="width: 75%;">
            </div>
        </div>
        
            </div>
        </div>
			<div class="col-sm-2"></div>

    </div>

</form>
</div>








<!----------------------fotter---------------------------->

<div class="row">
<<?php include 'footer.php';?>

</div>
</div>
</body>
</html>