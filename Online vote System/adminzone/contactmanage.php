

<!DOCTYPE html>
<html>
<head>
	<title>Online voting system</title>
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

background: #e91e63;
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

<div class="row" style="min-height: 550px;">
	
<div class="col-sm-9" style="color: green">
	<h1 style="text-align: center;">Contact Managemnet</h1>
<center>
<?php 
$con=mysqli_connect("localhost","root","","hpldp");
if($con==true)
{
	$sql="select* from contact";
	$result=mysqli_query($con,$sql);
	echo "<table style='width:90%;color:black;font-size:25px;' border='1'><tr style='background:red;font-size:25px;'><th>First Name</th><th>Last Nmae</th><th>Email</th><th>Phone</th><th>Subject</th><th>Massage</th><th>Delete</th></tr>";
		while($row=mysqli_fetch_array($result))
		{
		echo "<tr><td>".$row['frist']."</td><td>".$row['last']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['subject']."</td><td>".$row['address']."</td><td><a href='delete.php?d=".$row['email']."'><span class='fa fa-trash' style='color:teal;font-size:25px;margin-left:50%' title='Click here to delete Record '></span></a></td></tr>";
		}
		echo "</table>";
}
?></center>


</div>


</div>

<!----------------fotteer-------------------->

<div class="row">
	
	<div class="col-sm-12" style="min-height: 70px;background-color: black">
<div class="col-sm-12" ><h2 style="color:white;text-align:center">Developed by Vishal Singh & Our Team</h2></div>
         <div class="col-sm-12">
                                <marquee><h3 style="color:lightyellow;margin-top: 30px;">This webiste under Guided by Mr. Rahul Singh</h3></marquee>                  </div>

</div>

        
        
</div>
</div>

</body>
</html>