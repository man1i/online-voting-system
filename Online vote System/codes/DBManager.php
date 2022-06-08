<?php
class DBManager

	//create a function
	function ExecuteQuery($command) //insert, update, delete
	{
$conn=mysqli_connect("localhost","root","","votedb");
if($conn==true)
{
$x=mysqli_query($conn,$command);
if($x>0)
	return true;
else
	return false;  
}  
else
{
	mysqli_error($conn);
}
mysqli_close($conn);
	}
}
?>