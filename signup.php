 
<?php
	include("include/config.php");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=base64_encode($_POST['pass']);
$sql="INSERT INTO users(id,name,email,phone,pass) 
	VALUES('','$name','$email','$phone','$password')";
$result=mysqli_query($myconn,$sql);
if($result===true)
{
	// echo"user added";
}
else
{
	header("location:signup.php");
}
?>
<!Doctype html>
 <html>
<center>
<form id="userform" name="userform" method="POST" action="signup.php">
<p>user Id:</p><br />
<input id="userid" name="id" type="text" />
<p>User Name:</p><br />
<input id="username" name="name" type="text" />
<p>Email:</p><br />
<input id="email" name="email" type="text" /><br />
<p>User Phone:</p><br />
<input id="phone" name="phone" type="text" /><br />
<p>Password:</p><br />
<input id="pass" name="pass" type="text" /><br />
<input id="adduser" name="adduser" type="submit" value="signup"/>
</form>
</center>
</html>