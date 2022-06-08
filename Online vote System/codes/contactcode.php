<?php

require "DBManager.php";
$name=$_POST["name"];
$email=$_POST["email"];
$phoneno=$_POST["no"];
$subject=$_POST["subject"];
$msj=$_POST["message"];

//insert command

$sql="insert into contact values('$name','$email','$phoneno','$subject','$msj')";

$db=new dbmanager();

$x=$db->executequery($sql);
if($x==true)
{
	echo "<script>alert('Thanks for enquery as soon as we contact');window.location.href='../contact.php';</script>";
}
else
{
	echo "<script>alert('Your quiry is not summited');window.location.href='../contact.php';</script>";
}

?>