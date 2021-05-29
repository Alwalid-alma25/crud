<?php
$servername = "localhost";
$database = "crud_sbd";
$username = "root";
$password = "";
// create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// check connection
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}
echo "connected successfully";
mysqli_close($conn);
?>
 