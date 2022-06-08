

<!DOCTYPE html>
<html>
<head>
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
		background-color: silver;
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

background: teal;
min-height: 200px;
margin-left: 20px;
margin-top: 40px;
float: left;
}

</style>

</head>
<body style="background-color: #e6e6ff">
	
<div class="container-fluid">
<?php include 'topmenu.php'?>

<!--------------------welcome------------------------>

<div class="row">
	<div class="col-sm-12" style="text-align: center;font-style: bold;font-size: 50px; min-height: 50px;" ><u>Wecome To Admin Panel</u><hr></div>

</div>

<div class="row" style="min-height: 450px;">
	
<div class="col-sm-12">
  <div class="col-sm-1"></div>





<div class=" col-sm-3 c1 dropdown" style="color:white;display:inline-block;text-align: center;vertical-align: bottom;"><i class="fa fa-user fa-5x" style="margin-top: 60px;" ></i><br><p style="font-size: 40px;color: white;font-style: bold;">User Zone</p>

  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: 00DD00;width: 100%">OPTIONS
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="votermgmt.php">voter profile</a></li>
    <li class="divider"></li>
  


    <li class="divider"></li>
    <li><a href="notimgmt.php">Add Notification
</a></li>
    
    <li class="divider"></li>
    <li><a href="loginmgmt.php">Login Info</a></li>
    
  </ul>
</div>






<div class=" col-sm-3 c1 dropdown" style="color:white;display: inline-block;text-align: center;vertical-align: bottom;"><i class="fa fa-tasks fa-5x" style="margin-top: 60px;" ></i><br><p style="font-size: 40px;color: white;font-style: bold;">Response Mgmt.</p>
 <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: 00DD00;width: 100%">OPTIONS
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Home
(Dashboard)</a></li>
    <li class="divider"></li>
    <li><a href="conmgmt.php">Contact Us
Mgmt.</a></li>
    <li class="divider"></li>
    <li><a href="feedbackmgmt.php">Feedback
Mgmt.</a></li>
<li class="divider"></li>
    <li><a href="#">Send Email &
SMS</a></li>
<li class="divider"></li>
    <li><a href="lcmgmt.php">Live Chat
Mgmt.</a></li>
    <li><a href="regmgmt.php">register
Mgmt.</a></li>

  </ul>
</div>

<div class=" col-sm-3 c1  dropdown" style="color:white;display: inline-block;text-align: center;vertical-align: bottom;"><i class="fa fa-cog fa-5x" style="margin-top: 60px;" ></i><br><p style="font-size: 40px;color: white;font-style: bold;">My Account
</p>
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:00DD00;width: 100%">OPTIONS
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    
   
    <li><a href="changepass.php">Change Password</a></li>

    <li class="divider"></li>
    <li><a href="logout.php">Log Out</a></li></div>



  </div>


<div class="col-sm-1"></div>
</div>

<!----------------fotteer-------------------->

<div class="row">
	
	<div class="col-sm-12" style="min-height: 70px;background-color: black">
<div class="col-sm-12" ><h2 style="color:white;text-align:center">Developed by Vishal Singh & our Team</h2></div>
         <div class="col-sm-12">
                                <marquee><h3 style="color:lightyellow;margin-top: 30px;">This webiste under Guided by Mr. Rahul singh</h3></marquee>                  </div>

</div>

        
        
</div>
</div>

</body>
</html>