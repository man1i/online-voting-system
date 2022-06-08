<?php

require "DBManager.php";
$name=$_POST["name"];
$sub=$_POST["sub"];
$star=$_POST["star"];


//insert command

$sql="insert into feedback values('$name','$sub','$star')";

$db=new dbmanager();

$x=$db->executequery($sql);
if($x==true)
{
	echo "<script>alert('Thanks for feedback');window.location.href='../userzonezone/feedback.php';</script>";
}
else
{
	echo "<script>alert('Your quiry is not summited');window.location.href='../userzone/feedback.php';</script>";
}

?>