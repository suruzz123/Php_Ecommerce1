<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "blog";
$con = mysqli_connect($hostname, $username, $password, $db_name);
if (!$con) {
	//echo "Database connection failed".mysql_error();
}
else {
	//echo "Successfully Connected";
}

?>

