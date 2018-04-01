<?php
include("login/session.php");
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
	<h3 align="center"><u>Add Books</u></h3> 
<form method="post" action="addbooks.php" id="contact" enctype="multipart/form-data" bgcour = "blue">
<p><?php if(!empty($ert)){echo $ert;}?></p>
        <div align="center" colour= "blue">
        <p>
        	<label>Books ID:</label>
        <input type="text" name="id" Disabled />
        </p>
         <p>
        	<label>ISBN:  </label>
        <input type="text" name="isbn" required />
        </p>
         <p>
        	<label>Books Title: </label>
        <input type="text" name="title" required />
        </p>
         <p>
        	<label>Edition: </label>
        <input type="text" name="edition" required />
        </p>
 		<p>
        	<label>Edition Year: </label>
        <input type="text" name="year" required />
        </p>
		<p>
        	<label>Book Category: </label>
        <input type="text" name="category" required />
        </p>
		<label>Description: </label></br>
        <textarea name="des" id="des" cols="30" rows="10" required></textarea>
        
		<p>
        	<label>Upload Image: </label>
        <input type="file" name="file_img" id ="file_img"required />
        </p>
         <input type="submit" name="submit" value="Save Data" />
        <input type="reset" name="Reset" value="Reset" />
    </form>
	</div>
	<div>
	<?php include("footer/footer.php")?>
	</div>
	</body>

</html>

	
	
	
	
	
	