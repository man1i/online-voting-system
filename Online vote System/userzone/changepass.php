

<!DOCTYPE html>
<html>
<head>

<script> 
          
             
            
</script>

	<title>Online Voting System</title>
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


<!-----------headerr--------------->


<!-----------------------------------mail contant------------------------------------>

<div class="col-sm-9"style="margin-top:-150px;">
<br><br><Br>
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<center><table>
<form method="post" action="#"  onSubmit = "return checkPassword(this)">

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
<td><input type="password"  name="ne" title="New password" / required="required" class="form-control"></td><br><br><Br>
</tr>



<tr>
<td><p class="form-actions">
<input type="submit" value="Change Password" title="Change password"  class="btn btn-danger" />
</p></td></tr>
</table>
</form></center>
</div>
<div class="col-sm-3"></div>
</div>

</div>

<form>
  <input type="button" value="BACk" onclick="history.go(-1)" class="btn btn-primary form-control">
</form>

<!--------------------------foooter--------------------->
<div class="row">
  
  <div class="col-sm-12" style="min-height: 70px;background-color: black">
<div class="col-sm-12" ><h2 style="color:white;text-align:center">Developed by Vishal Singh & Our Team</h2></div>
         <div class="col-sm-12">
                                <marquee><h3 style="color:lightyellow;margin-top: 30px;">This webiste under Guided by Mr. Rahul singh</h3></marquee>                  </div>

</div>

        
        
</div>

</div>
</body>
</html>