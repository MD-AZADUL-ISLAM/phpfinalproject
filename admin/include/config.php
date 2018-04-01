<?php
	$host ="localhost";
	$user ="root";
	$password ="";
	$dbname="library";
	$sql = "Create Database practice";
$myconn= mysqli_connect("$host","$user","$password","$dbname");
if(mysqli_connect_error())
{
	echo mysqli_connect_error();
}	
else
{
	//echo"Database Connected"; 
}
?>