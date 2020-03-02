<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bts1";

// Create connection
$conn = mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO genre (genreID, genre) VALUES ('', 'fiction')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
