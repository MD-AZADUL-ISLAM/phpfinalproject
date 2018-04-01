<?php 
	include("/include/config.php");
	if(isset($_POST['submit']))
{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$pass=$_POST['pass'];		
	$sql="Insert into subadmin(id, name, email, phone, pass) 
						VALUES('','$name','$email','$phone','$pass')";	
	$result=mysqli_query($myconn,$sql);
		if($result===true)
		{
		echo "<script>window.open('addsubadmin.php','_top')</script>";
		}
		else
		{
			echo "Sub Admin Not Added";
		}
		}
else
{
	//header("location:addbooksform.php");
}
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
	<form method="post" action="addsubadmin.php" id="subadmin" enctype="multipart/form-data" bgcour = "blue">
<p><?php if(!empty($ert)){echo $ert;}?></p>
        <div align="center" colour= "blue">
        <p>
        	<label> ID:</label>
        <input type="text" name="id" Disabled />
        </p>
         <p>
        	<label>Name:  </label>
        <input type="text" name="name" required />
        </p>
         <p>
        	<label>Email: </label>
        <input type="text" name="email" required />
        </p>
         <p>
        	<label>phone: </label>
        <input type="text" name="phone" required />
        </p>
 		<p>
        	<label>password: </label>
        <input type="text" name="pass" required />
        </p>
		<p>
         <input type="submit" name="submit" value="Add Sub Admin" />
        <input type="reset" name="Reset" value="Reset" />
    </form>
	</div>
	<div>
	<?php include("footer/footer.php")?>
	</div>
	</body>

</html>

