<center><p>Sub Admin List </p></center>
<button><a href="addsubadmin.php">Add Sub Admin</a></button>
<?php	
	include("include/config.php");
	$sql="SELECT * FROM subadmin";
	$result=mysqli_query($myconn,$sql);
	echo'<table border="2px" align="center" text-align="center">
<tr><th>ID</th><th>Name </th><th>Email</th><th> Phone</th><th> password</th><th colspan="2">Action</th></tr>';
while($row=mysqli_fetch_array($result))
{
	$id=$row['id'];
	$name=$row['name'];
	$email=$row['email'];
	$phone=$row['phone'];
	$pass=$row['pass'];
	echo '<tr>
	<td width="2%">'.$id.'</td>
	<td>'.$name.'</td>
	<td>'.$email.'</td>
	<td>'.$phone.'</td>
	<td>'.$pass.'</td>
	<td><a href="delete.php">delete</a></td>
	<td><a href="delete.php">edit</a></td>
	</tr>';
}
echo'</table>';
?>