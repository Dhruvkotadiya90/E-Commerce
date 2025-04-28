<?php


$con = new mysqli("localhost", "root", "", "e-commerce");
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$user', '$pass', '$email')";

if ($con->query($sql) === TRUE) {
	header("Location: page2.html");
} else {
	echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close()
?>

