<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/hover.css">
  
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" type="text/css" href="reg.css">

</head>

<body style="background-image: url(stefan.jpg);">
<div class="container-fluid">
	
	<div class="row">
<?php include 'header.php';?>
         
</div>

<!-------------------------form code ------------------------->
 <div class="container">
<div class="row">
    <div class="col-sm-8 col-sm-offset-2 alert alert-success">
        <form method="post" action="codes/regcode.php">
            <h3 class="text text-center bg-primary alert">User Registration</h3>
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="exampleInputEmail"placeholder="Enter Full Name"required/>
            </div><br/>
			
			 <div class="form-group">
                <input type="number" name="number" class="form-control"id="exampleInputEmail"placeholder="Enter your Number"required/><br/>
            </div>
          
            <div class="form-group">
                <input type="password" name="password" id="passwd" placeholder="password"class="form-control"required/><br/>
            </div>
			<div class="form-group">
                <input type="password" name="cpassword" id="passwd" placeholder="Confirm password"class="form-control"required/><br/>
            </div>

            <div class="form-group">
                <input type="text" name="address" id="address" placeholder="your Address"class="form-control"required/><br/>
            </div>
			

			            <div class="form-group">
                <select name="role" class="form-control" >
                <option value="select">Role</option>
                    <option value="male">voter</option>
                    <option value="female">Group</option>
                </select>
            </div>


            <button tybe="submit" class="btn btn-success btn-block" name="register">Submit</button><br/>
			<a href="login.php"> <button tybe="submit" class="btn btn-success btn-block" name="register">Login Here</button></a>
        </form>
    </div>
</div>
 </div>


<!----------------------fotter---------------------------->

<div class="row">
<?php include 'footer.php';?>
</div>
</div>
</body>
</html>