|<?php
require "connections/connection.php"
$sql="USE task_maciej";
$result=mysqli_query($conn,$sql);
$sql="SELECT * FROM chat";
$result=mysqli_query($conn,$sql);
echo $result;
?>