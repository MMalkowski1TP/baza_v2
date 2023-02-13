<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Czat</title>
    <link rel="stylesheet" href="CSS/styles4.css">
</head>

<body>
    <header>
        
    <center><h1 id="Username">
       <?php
        echo "Witaj". "<br>". $username;
       ?> 
    </h1>
    </center>
		
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
    
    <?php
    
    ?>
</body>
</html>