

<!DOCTYPE html>
<html>
<head>

<script> 
          
             
            
</script>

	<title>online voting system</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/hover.css">
  
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css.css">
<style type="text/css">
	*{
		margin: 0px;
		padding:0px;
		font-family: sans-serif;
	}

	#sidebar
	{
		
		width: 200px;
		height: 100%;
		background-color: #151719;
		left: -30px;
		transition: all 500ms linear;

	}
	
	#sidebar ul li
	{
		color: rgba(230,230,230,0.9);
		list-style: none;
		padding: 15px 10px;
		border-bottom: 1px solid rgba(100,100,100,0.3);
	}

.c1
{

background: orange;
min-height: 200px;
margin-left: 40px;
margin-top: 40px;
}

</style>

</head>
<body>
	
<div class="container-fluid">
<?php include 'topmenu.php'?>

<!--------------------welcome------------------------>

<div class="row">
	<div class="col-sm-12" style="text-align: center;font-style: bold;font-size: 50px; min-height: 50px;" ><u>Wecome To Admin Panel</u><hr></div>

</div>



<!-----------------------------------mail contant------------------------------------>
<div class="row">
<div class="col-sm-12">

<center>
<form method="post" action="#">
<table>
<tr>
<td><label for="confirmPassword">Current Password</label></td>
<td><input type="password"  name="cp" title="Confirm new password" / required="required" class="form-control"></td><br><br><Br>
</tr>
<tr>
<td><label for="newPassword">New Password:</label></td>
<td><input type="password"  name="newp" title="New password" / required="required" class="form-control"></td><br><br><Br>
</tr>
<tr>
<td><label for="newPassword">Conferm Password:</label></td>
<td><input type="password"  name="ne" title="New password"  required="required" class="form-control"></td><br><br><Br>
</tr>



<tr>
<td><p class="form-actions">
<input type="submit" value="Change Password" title="Change password"  class="btn btn-success" />
</p></td></tr>
</form>
</table>
</div></div></center>


<form>
  <input type="button" value="GO BACK!" onclick="history.back(-1)" class="btn btn-danger form-control form-actions" style="width: 25%">
</form>
<!--------------------------foooter--------------------->
<div class="row">
  
  <div class="col-sm-12" style="min-height: 70px;background-color: black">
<div class="col-sm-12" ><h2 style="color:white;text-align:center">Developed by Vishal singh</h2></div>
         <div class="col-sm-12">
                                <marquee><h3 style="color:lightyellow;margin-top: 30px;">This webiste under Guided by Mr. rahule Singh</h3></marquee>                  </div>

</div>

        
        
</div>

</div>
</body>
</html>