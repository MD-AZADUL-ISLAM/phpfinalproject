<?php 
	include("/include/config.php");
	if(isset($_POST['submit']))
{
	// image Save 
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "image/".$filename;
    move_uploaded_file($filetmp,$filepath);
	// insert inti database	
		$ISBN=$_POST['isbn'];
		$title=$_POST['title'];
		$edition=$_POST['edition'];
		$year=$_POST['year'];
		$description=$_POST['des'];
		$category=$_POST['category'];
		
	$sql="Insert into books(id, ISBN, title, edition, edition_year, image,description, category) 
						VALUES('','$ISBN','$title','$edition','$year','$filepath','$description','$category')";	
	$result=mysqli_query($myconn,$sql);
		if($result===true)
		{
		echo "<script>window.open('addbooksform.php','_top')</script>";
		}
		else
		{
			echo "details Not Added";
		}
		}
else
{
	//header("location:addbooksform.php");
}
?>