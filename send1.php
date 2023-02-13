<?php
  require "connections/connection.php";
  session_start();
  if(empty($_SESSION["username"])){
    echo '<script language="javascript">';
    echo 'if(!alert("Please, login to create a post")) document.location = "send1.html"';
    echo '</script>';
  }
  else
  {
    $name = $_POST["name"];
    $data = $_POST["dane"];
    $opis = $_POST["des"];
    $date = $_POST["date"];
    $sql = "USE task_maciej";
  
    if ($conn->query($sql) === TRUE) {
      echo "Database selected succesfully!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    };


    $sql = "INSERT INTO sound (name, czas, opis, dane)
      VALUES ($name, $date, $opis, $data);";

  
    mysqli_query($conn,$sql);
  };
?>