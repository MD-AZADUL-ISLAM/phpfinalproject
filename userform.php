<?php 
	include("/include/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>user Add form</title>
</head>
<body>
<center>
<form id="userform" name="userform" method="POST" action="adduser.php">
<p>user Id:</p><br />
<input id="userid" name="userid" type="text" />
<p>User Name:</p><br />
<input id="username" name="username" type="text" />
<p>Email:</p><br />
<input id="email" name="email" type="text" /><br />
<p>User Phone:</p><br />
<input id="phone" name="phone" type="text" /><br />
<p>Password:</p><br />
<input id="pass" name="pass" type="text" /><br />
<input id="adduser" name="adduser" type="submit" value="ADD user"/>
</form>
</center>
</body>
</html>