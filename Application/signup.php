<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12.freesqldatabase.com";
$password = "vEzQWrl92P";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>