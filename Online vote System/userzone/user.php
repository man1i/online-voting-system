

<!DOCTYPE html>
<html>
<head>
	<title>Online Voting system</title>
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

background: teal;
min-height: 150px;
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
	<div class="col-sm-12" style="text-align: center;font-style: bold;font-size: 50px; min-height: 50px;" ><u>Wecome To User Panel</u><hr></div>

</div>
<div class="row" style="min-height: 350px;">
	<div class="col-sm-3">
<div id="sidebar">
	
<ul>
	<a href="user.php"><li>Home</li></a>
	<a href="#"><li>Whats New Today?</li></a>
       <a href="#"><li>Discussion Board</li></a>
       <a href="feedback.php"> <li>Feedback</li></a>
     <a href="../about.php"><li>About Me</li></a>
     <a href="logout.php"><li>LOGOUT</li></a>


</ul>

</div>

</div>
<div class="col-sm-9">
<a href="user.php"><div class=" col-sm-3 c1" style="color:green;display: inline-block;text-align: center;vertical-align: bottom;"><i class="fa fa-home fa-5x" style="margin-top: 10px;" ></i><br><p style="font-size: 15px;color: white;font-style: bold;">HOME</p></div></a>

<a href="vote.php"><div class=" col-sm-3 c1" style="color:green;display: inline-block;text-align: center;vertical-align: bottom;"><i class="fa fa-calendar fa-5x" style="margin-top: 10px;" ></i><br><p style="font-size: 15px;color: white;font-style: bold;">vote now</p></div></a>

<a href="feedback.php"><div class=" col-sm-3 c1" style="color:green;display: inline-block;text-align: center;vertical-align: bottom;"><i class="fa fa-comments fa-5x" style="margin-top: 10px;" ></i><br><p style="font-size: 15px;color: white;font-style: bold;">FEEDBACK</p></div></a>



</div>
</div>

<!----------------fotteer-------------------->

<div class="row">
	
	<div class="col-sm-12" style="min-height: 150px;background-color: black">
<div class="col-sm-12" ><h2 style="color:white;text-align:center">Developed by Our Team</h2></div>
         <div class="col-sm-12">
                                <marquee><h3 style="color:lightyellow;margin-top: 30px;">This webiste under guided by C S Department</h3></marquee>                  </div>

</div>

        
        
</div>

</div>
</body>
</html>