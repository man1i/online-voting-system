<?php
require "../codes/dbmanager.php";
$s=$_GET['d'];
$sql="delete from feedback where star='$s'";
$db=new dbManager();
$x=$db->executenonquery($sql);
if($x==true)
{
	echo "<script>alert('Record Deleted');window.location.href='../adminzone/feedbackmanage.php';</script>";
}
else
{
	echo "<script>alert('Record not Delete ');window.location.href='../adminzone/feedbackmanage.php';</script>";
}

?>