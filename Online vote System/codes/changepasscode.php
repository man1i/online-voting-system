<?php

require "dbmanager.php";
$cp=$_POST["cp"];
$new=$_POST["newp"];


//insert command

$sql="update login set pass='$new' where pass='$cp'";

$db=new dbmanager();

$x=$db->executenonquery($sql);
echo $x+$sql;

if($x==true)
{
	echo "<script>alert('Your Password Was Successfully Change');window.location.href='../userzone/user.php';</script>";
}
else
{
	echo "<script>alert('Technical error ! plese try letter');window.location.href='../userzone/user.php';</script>";
}

?>