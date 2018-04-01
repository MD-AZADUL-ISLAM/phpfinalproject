<?php
session_start();

?>
<!DOCTYPE html>
<html lang= "en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
	<title> LSM </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	</head>
	<body> 
	<div class="head">
	<?php include("head/header.php");?>
	</div>
	<div id = "navbar">
		<?php include("menu/menu.php");   ?> 
	</div> 
	<div id= "left-side" font ="Time New Roman">
		<?php include("sidebar/left_sidebar.php")?>
	</div>
	<div id= "right-side">
	<?php include("sidebar/right_sidebar.php")?>
	</div>
	<div id = "con">
	<?php include("content/content.php");?>
	<center><b><u><h1 color="red";> If you are admin At first login using your user name and Password</h1><u></b></center>

<center><form id="form" action="login/admincheck.php" method="post">
<div id="name" "> User name :</div>
<input  name="name" id="email" type="text"  style="background-color:orange"/>
<div id="pass">password :</div>
<input name="pass" id="pass" type="text"style="background-color:#74DF00"/></br></br>
<input type="submit" value="Login Now" />
</form></center>
	</div>
	<div>
	<?php include("footer/footer.php")?>
	</div>
	</body>

</html>

