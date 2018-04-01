<?php 
$host ="localhost";
$user ="root";
$password ="";
$sql = "Create Database library";
$myconn= mysqli_connect("$host","$user","$password");
$result= mysqli_query($myconn,$sql); 
if($result === true)
{
	echo"Database created successful";
}
else
{
	echo"database Not created";
}
?>