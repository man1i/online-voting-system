
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
	<div class="col-sm-12" style="text-align: center;font-style: bold;font-size: 50px; min-height: 50px;" ><u>Wecome To User Panel</u><hr></div>

</div>
<div class="row" style="min-height: 500px;">
	
<div class="col-sm-1"></div>
<div class="col-sm-9" style="color: green">
	<h1 style="text-align: center;">voter details</h1>
<center>
<!- start voting code ->
<?php 
$con=mysqli_connect("localhost","root","","votedb");
if($con==true)
{
	$sql="select* from register";
	$result=mysqli_query($con,$sql);
	echo "<table style='width:90%;color:black;font-size:25px;' border='1'><tr style='background:red;font-size:25px;'><th>Name</th><th>Mobile Number</th><th>Email</th><th>Address</th><th>City</th><th>Delete</th></tr>";
		while($row=mysqli_fetch_array($result))
		{
		echo "<tr><td>".$row['name']."</td><td>".$row['mobile']."</td><td>".$row['email']."</td><td>".$row['addd']."</td><td>".$row['city']."</td><td><a href='pasentdelete.php?d=".$row['email']."'><span class='fa fa-trash' style='color:teal;font-size:25px;margin-left:50%' title='Click here to delete Record '></span></a></td></tr>";
		}
		echo "</table>";
}
?></center>


</div>
<div class="col-sm-1"></div>



</div>

<!----------------fotteer-------------------->

<div class="row">
	
	<div class="col-sm-12" style="min-height: 70px;background-color: black">
<div class="col-sm-12" ><h2 style="color:white;text-align:center">Developed Our Team</h2></div>
         <div class="col-sm-12">
                                <marquee><h3 style="color:lightyellow;margin-top: 30px;">This webiste under Guided by C S Department</h3></marquee>                  </div>

</div>

        
        
</div>

</div>
</body>
</html>