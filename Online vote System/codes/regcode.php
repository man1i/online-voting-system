<?php
require "DBManager.php";
$name=$_POST["name"];
$phoneno=$_POST["number"];
$pass=$_POST["password"];
$cpass=$_POST["cpassword"];
$add=$_POST["address"];
$role=$_POST["role"];
$dt=date('d/m/y');

if($pass==$cpass){
	$sql="insert into user(name, mobile,password,address,photo,role,status,votes) values('$name','$phoneno','$pass','$add','$role',0,0)";
	if($sql){
		echo'<script>alert("registration succesful");window.location.href="../login.php"</script>';
	}
	else{
		echo'<script>alert("registration not completed");window.location.href="../reg.php"</script>';
	}
}
else{
	echo"<script>alert('password and confirm password does not match');window.location.href='../reg.php'</script>";
}
/*
$db=new dbmanager();

//create command for register

$sql="insert into user values('$name','$phoneno','$email','$add','$img','$pass','$role','$dt')";

$db=new DBmanager();
$x=$db->executequery($sql);
if($x==true)
{ 
 if(move_uploaded_file($_FILES["file"]["tmp_name"],$uploadfile))
 {
	 echo"<script>alert('Your Registration is not completed');window.location.href='../reg.php' </script>"; 
 }	 
 else	 
 {
echo"<script>alert('Thanks for become a Registration');window.location.href='../reg.php' </script>";
 }
   $cmd="insert into login values('$email','$pass')";

   $y=$db->executequery($cmd);

              if ($y==true)
               {
	               echo "<script>alert('Thanks for ragistration');window.location.href='../reg.php';</script>";
               }

              else
              {
                  echo "<script>alert('ohhh ! some technical eror');window.location.href='../reg.php';</script>";
              }
}
else
{
  echo "<script>alert('ohhh ! some technical eror');window.location.href='../reg.php';</script>";
}

*/
?>