<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "FROZEN";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM films";

?>
