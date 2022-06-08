<?php

require "../codes/dbmanager.php";
$s=$_GET['d'];

$sql="delete from feedback where phone='$s'";

$db=new dbmanager();

$x=$db->executenonquery($sql);
if($x==true)
{
	echo "<script>alert('Delete successfully');window.location.href='../adminzone/feedbackmanage.php';</script>";
}
else
{
	echo "<script>alert('Delete not successfully');window.location.href='../adminzone/feedbackmanage.php';</script>";
}

?>