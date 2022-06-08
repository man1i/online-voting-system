<?php
session_start();
$con=mysqli_connect("localhost","root","","votedb");
if ($con==true)
 {
	$userid=$_POST["email"];
	$pass=$_POST["password"];
	$user=$_POST["USERtype"];


if ($user=="USER") {
	# code...


	$query="select * from login where userid='$userid' and pass='$pass'";

	$result=mysqli_query($con,$query);

	if ($row=mysqli_fetch_array($result))
	 {
		$user=$row[0];
		$p=$row[1];
		if ($userid==$user&&$pass==$p)
		 {
		 	//set sesison here

		 	$_SESSION["email"]=$userid;
		echo "<script>window.location.href='../userzone/user.php';</script>";
	
	     }
	     else
	     {
	     	echo "<script>aler('invalid userid & password');window.location.href='../index.php';</script>";
	     }
}
else
{
	echo "<script>alert('invalid userid & password');window.location.href='../index.php';</script>";
	mysqli_error($con);
}

}


else
{
	$query="select * from admin where login='$userid' and pass='$pass'";

	$result=mysqli_query($con,$query);

	if ($row=mysqli_fetch_array($result))
	 {
		$user=$row[0];
		$p=$row[1];
		if ($userid==$user&&$pass==$p)
		 {

		 	//set sesison here

		 	$_SESSION["email"]=$userid;
		echo "<script>window.location.href='../adminzone/admin.php';</script>";
	
	     }
	     else
	     {
	     	echo "<script>aler('invalid userid & password');window.location.href='../login.php';</script>";
	     }
}
else
{
	echo "<script>aler('invalid userid & password');window.location.href='../login.php';</script>";
	
}

}
}
else
{
	mysqli_error($con);
}
?>