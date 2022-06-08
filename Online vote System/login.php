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
<!---------------------/head--------------------------------->




<!-------------------------main ------------------------->


  
    <div class="con" style="background-color:teal;">    
    <h1 style="color:red;margin-top: -12%;">Login Now</h1>
      <form action="codes/logincode.php" method="post">

<div class="form-group">
                    <label>Email</label>
                    <input  type="id" name="name" class="form-control" placeholder="Enter UserId" required="required">   
                </div>


<div class="form-group">
                    <label>password</label>
                    <input  type="password" name="password" class="form-control" placeholder="Enter password" required="required">   
                </div>
        
          
         
      <button type ="submit">Login</button>
          

      
    </form>
      </div>

<!----------------------fotter---------------------------->

<div class="row">
<?php include 'footer.php';?>
</div>
</div>
</body>
</html>