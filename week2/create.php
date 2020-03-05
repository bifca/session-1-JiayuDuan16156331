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


$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/1.jpg','BTS','2013.06.13','WORLDWIDE BTS COME BACK!!BTS issused new album that named <i>MAP OF THE SOUL:7 </I>in 21st Feb. 2020.')";
$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/2.jpg','Jin','1992.12.04','The most handsome man in the group.')";
$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/3.jpg','J-HOPE','1994.09.12','The main dancer that hoping to bring hope to people.')";
$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/4.jpg','V','1995.12.30','Good at singing and belong in vocal line in the group.')";
$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/5.jpg','Jung Kook','1997.09.01','He is the youngest member of the team, also a very attractive member, is recognized as ACE.')";
$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/6.jpg','SUGA','1993.03.09','A very powerful rapper, once an underground rapper.')";
$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/7.jpg','RM','1994.09.12','Leader of BTS, my favorite member.')";
$sql = "INSERT INTO bts_group (Img, Name, Birthday, Description) VALUES ('images/8.jpg','Jimin','1995.10.13','He is a crucial dancer with high-pitched voice in the group.')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
