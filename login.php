<?php
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
	<form id="stdinfo" name="stdinfo" method="POST" action="include/admincheck.php">

<tr> <td><p>User name:</p></td>
<td><input id="user" name="user" type="text" /></td></tr>
<td><p>Password:</p></td>
<td><input id="pass" name="pass" type="text" /></td></tr>
<tr><td><input id="login" name="login" type="submit" value="Login" /></td></tr>
</form>
</table>
</center>
	</div>
	<div>
	<?php include("footer/footer.php")?>
	</div>
	</body>

</html>

   