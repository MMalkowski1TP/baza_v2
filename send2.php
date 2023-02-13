<?php
session_start();
require "connections/connection.php";

if(empty($_SESSION["username"])){
  echo '<script language="javascript">';
  echo 'alert("Please, log in to create a post")';
  echo 'window.location = "send3.html"';
  echo '</script>';
}
else
{
  $username = $_SESSION["username"];
  $name = $_POST["name"];
  $data = $_POST["base64"];
  $opis = $_POST["opis"];
  $date = $_POST["date"];

  $sql = "INSERT INTO image (name, date, opis, data)
  VALUES ($name, $date, $opis, $data)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
 
?>