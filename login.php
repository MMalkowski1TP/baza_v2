<?php
session_start();
require "connections/connection.php"
  if(isset($_POST['login_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password=hash("sha256", $password);
      $sql="USE task_maciej";
      $result=mysqli_query($conn,$sql);
      $sql="SELECT * FROM users WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($conn,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="Jesteś zalogowany";
            $_SESSION['username']=$username;
            header("location:home.php");
        }
       else
       {
              $_SESSION['message']="Zła nazwa użytkownika lub hasło";
       }
      }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zajerestruj</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="CSS/styles8.css">
</head>
<body>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<header>
        
		<h1 class="logo"><img class="beczka" src="logo2.png" alt="logo" id="logo"></h1>
		
		<nav id="topnav">
		
			<ul class="menu">
				<li><a href="send1.html">Muzyka</a></li>
				<li><a href="send2.html">Obrazki</a></li>
				<li><a href="send3.html">Notatki</a></li>
				<li><a href="send4.html">Czat</a></li>
			</ul>
			
		</nav>
        <nav id="topnav">
		
			<ul class="menu">
				<li><a href="show1.html">Muzyka/Pokaż</a></li>
				<li><a href="show2.html">Obrazki/Pokaż</a></li>
				<li><a href="show3.html">Notatki/Pokaż</a></li>
                <!--<li><a href="show4.html">Czat</a></li> -->
			</ul>
			
		</nav>
	
	</header>
<form method="post" action="register.php">
<form action="register.php">
        <label for="name"></label><input type="text" name="name"><br>
        <label for="passwrod"></label><input type="text" name="name"><br>
        <label for="password_repeat"></label><input type="text" name="name"><br>
        <input type="submit" name="register_btn" class="Register">
    </form>
</body>
</html>
