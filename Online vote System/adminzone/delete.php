<?php
require "../codes/dbmanager.php";
$s=$_GET['d'];
$sql="delete from contact where email='$s'";
$db=new dbManager();
$x=$db->executenonquery($sql);
if($x==true)
{
	echo "<script>alert('Record Deleted');window.location.href='../adminzone/contactmanage.php';</script>";
}
else
{
	echo "<script>alert('Record not Delete ');window.location.href='../adminzone/contactmanage.php';</script>";
}

?>