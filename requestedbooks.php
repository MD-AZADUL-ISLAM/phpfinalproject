<?php 
	include("include/config.php");
	if(isset($_POST['submit']))
{
		$isbn=$_POST['isbn'];
		$title=$_POST['title'];
		$edition=$_POST['edition'];
		$year=$_POST['year'];		
	$sql="Insert into req_books(id,b_id,ISBN, title, edition, edition_year) 
						VALUES('','','$isbn','$title','$edition''$year')";	
	$result=mysqli_query($myconn,$sql);
		if($result===true)
		{
		echo "<script>window.open('requestedbooks.php','_top')</script>";
		}
		else
		{
			echo "data Not Added";
		}
		}
else
{
	header("location:index.php");
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
	<form method="post" action="requestedbooks.php" id="requestedbooks" enctype="multipart/form-data" bgcour = "blue">
<p><?php if(!empty($ert)){echo $ert;}?></p>
        <div align="center" colour= "blue">
        <p>
        	<label> ID:</label>
        <input type="text" name="id" Disabled />
        </p>
         <p>
        	<label>Book ID:  </label>
        <input type="text" name="b_id" required />
        </p>
         <p>
        	<label>ISBN: </label>
        <input type="text" name="isbn" required />
        </p>
         <p>
        	<label>Title: </label>
        <input type="text" name="title" required />
        </p>
 		<p>
        	<label>Edition: </label>
        <input type="text" name="edition" required />
        </p>
		<p>
        	<label>Edition year: </label>
        <input type="text" name="year" required />
        </p>
		<p>
		
         <input type="submit" name="submit" value="Add Rquested Book" />
        <input type="reset" name="Reset" value="Reset" />
    </form>
	</div>
	<div>
	<?php include("footer/footer.php")?>
	</div>
	</body>

</html>

