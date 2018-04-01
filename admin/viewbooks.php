
<?php	
	include("include/config.php");
	$sql="SELECT * FROM books";
	$result=mysqli_query($myconn,$sql);
	echo'<table border="2px" align="center" text-align="center">
<tr><th>ID</th><th>ISBN </th><th>Title</th><th> Edition</th><th> Edition Year</th><th> Image</th><th> Description</th><th>Category</th><th colspan="2">Action</th></tr>';
while($row=mysqli_fetch_array($result))
{
	$id=$row['id'];
	$isbn=$row['ISBN'];
	$title=$row['title'];
	$edition=$row['edition'];
	$year=$row['edition_year'];
	$path=$row['image'];
	$description=$row['description'];
	$category=$row['category'];
	echo '<tr>
	<td width="2%">'.$id.'</td>
	<td>'.$isbn.'</td>
	<td>'.$title.'</td>
	<td>'.$edition.'</td>
	<td>'.$year.'</td>
	<td><a><img src="'.$path.'" width="100px" height="50px"></a></td>
	<td>'.$description.'</td>
	<td>'.$category.'</td>
	<td><a href="delete.php">delete</a></td>
	<td><a href="delete.php">edit</a></td>
	</tr>';
}
echo'</table>';



?>
	