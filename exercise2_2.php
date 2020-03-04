<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bts1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/1.jpg','BTS','222','44')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
