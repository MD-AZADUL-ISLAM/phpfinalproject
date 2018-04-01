<?php
	include("config.php");
	$user = "CREATE TABLE IF NOT EXISTS users(
							id INT(10) auto_incremet NOT NULL,
							PRIMARY KEY(id) ,
							name VARCHAR(50) NOT NULL,
							email VARCHAR(40) NOT NULL,
							phone VARCHAR(40) NOT NULL,
							pass VARCHAR(40) NOT NULL
							)";
$query = mysqli_query($myconn, $user);

if ($query === TRUE) {
	//echo "<h3>user table created OK :) </h3>";
} else {
	//echo "<h3>user table NOT created :( </h3>";
}
// books table 
$book= "CREATE TABLE IF NOT EXISTS books(
							id INT (10) auto_incremet NOT NULL,
							PRIMARY KEY(id) ,
							ISBN VARCHAR(50) NOT NULL,
							title VARCHAR(40) NOT NULL,
							edition VARCHAR(10) NOT NULL,
							edition_year VARCHAR(40) NOT NULL,
							image VARCHAR (50) NOT NULL,
							description VARCHAR (100) NOT NULL,
							category VARCHAR (100) NOT NULL
							)";
$query = mysqli_query($myconn, $book);

if ($query === TRUE) {
	//echo "<h3> books table created OK :) </h3>";
} else {
	//echo "<h3>user books table NOT created :( </h3>";
}
//Daily Read Books Table 
$de_books= "CREATE TABLE IF NOT EXISTS dailyre_books(
							id INT NOT NULL NULL AUTO_INCREMENT,
							b_id INT NOT NULL NULL AUTO_INCREMENT,
							ISBN VARCHAR(50)NOT NULL,
							title VARCHAR(40)NOT NULL,
							edition VARCHAR(10) NOT NULL,
							edition_year VARCHAR(40)NOT NULL,
							PRIMARY KEY(b_id),
							FOREIGN KEY(id)REFERENCES books(id)
							)";
$query = mysqli_query($myconn,$de_books);

if ($query === TRUE) {
	//echo "<h3> Daily read books table created OK :) </h3>";
} else {
	//echo "<h3>Daily read books table NOT created :( </h3>";
}
// requeste books table
$requ_book= "CREATE TABLE IF NOT EXISTS req_books(
							id INT NOT NULL AUTO_INCREMENT,
							b_id INT NOT NULL,
							ISBN VARCHAR(50)NOT NULL,
							title VARCHAR(40)NOT NULL,
							edition VARCHAR(10)NOT NULL,
							edition_year VARCHAR(40)NOT NULL,
							PRIMARY KEY(b_id),
							FOREIGN KEY (id)REFERENCES books(id)
							)";
$query = mysqli_query($myconn, $requ_book);

if ($query === TRUE) {
	//echo "<h3> requested_book table created OK :) </h3>";
} else {
	//echo "<h3>requested_book table NOT created :( </h3>";
}
$sub_admin= "CREATE TABLE IF NOT EXISTS subadmin(
							id INT(10)NOT NULL NULL AUTO_INCREMENT,
							PRIMARY KEY(id) ,
							name VARCHAR(50) NOT NULL,
							email VARCHAR(40) NOT NULL,
							phone VARCHAR(40) NOT NULL,
							pass VARCHAR(40) NOT NULL
							)";
$query = mysqli_query($myconn, $sub_admin);

if ($query === TRUE) {
	echo "<h3>subadmin table created OK :) </h3>";
} else {
	echo "<h3>sub admin table NOT created :( </h3>";
}


?>