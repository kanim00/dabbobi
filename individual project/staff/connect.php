<?php
$svrname = "localhost";
$uname = "root";
$pswd = "Nuclearbomb2.";
$db ="dabbobi";

// Create connection
$conn = new mysqli($svrname, $uname, $pswd,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?> 