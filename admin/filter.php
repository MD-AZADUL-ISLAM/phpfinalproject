<?php
include("login/session.php");
?>

<?php
$category=$_POST['category'];
$sql="SELECT * FROM books WHERE category=".$category;
$query=mysqli_query($myconn,$sql);

echo'<center><table border="2px" width="80%" > <tr>
<th width="15%" >ID</td>
<th width="15%" >ISBN</td>
<th width="15%" >Title</td>
<th width="15%" >edition</td>
<th width="15%" >edition year</td>
<th width="15%" >Image</td>
<th width="15%" >Description</td>
<th width="15%" >category</td>
<th width="15%" colspan="2">Action</td>
</tr>';
while($row=mysqli_fetch_array($query))
{
$id=$row['id'];
$isbn=$row['ISBN'];
$title=$row['title'];
$edition=$row['edition'];
$year=$row['edition_year'];
$image=$row['image'];
$des=$row['description'];
$category=$row['category'];


echo'<center><table border="2px" width="80%" >
<tr>
<td width="15%">'.$id.'</td>
<td width="15%">'.$isbn.'</td>
<td width="15%">'.$title.'</td>
<td width="15%">'.$edition.'</td>
<td width="15%">'.$year.'</td>
<td><a><img src="'.$image.'" width="100px" height="50px"></a></td>
	<td>'.$description.'</td>
	<td>'.$category.'</td>
	<td><a href="delete.php">delete</a></td>
	<td><a href="delete.php">edit</a></td>

</tr>';
echo'</table></center>';

}

?>
