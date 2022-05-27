<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytube";
$conn = new mysqli($servername, $username, $password,
$dbname);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
 $password = $_POST['password'];
$sql = "INSERT INTO login (username,password) VALUES ('$username', '$password')";
if(mysqli_query($conn,$sql)){
	//include("index.html");
	exit();
}
?>