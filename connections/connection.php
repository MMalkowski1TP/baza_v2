<?php
  $servername = "localhost";
  $username = "root";
  $conn = new mysqli($servername, $username);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return "Connected successfully";
?>
