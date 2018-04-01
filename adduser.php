<?php
	include("/include/config.php");
	$id=$_POST['userid'];
	$name=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=base64_encode($_POST['pass']);
$sql="INSERT INTO users(id,name,email,phone,pass) 
	VALUES('$id','$name','$email','$phone','$password')";
$result=mysqli_query($myconn,$sql);
if($result===true)
{ echo"user added";}
else
{
	header("location:userform.php");
}
	


?>