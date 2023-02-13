<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzyka</title>
    <link rel="stylesheet" href="CSS/styles5.css">
</head>

<body>
    <header>
        
		<h1 class="logo"><img class="beczka" src="logo1.png" alt="logo" id="logo"></h1>
		
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
    
    <article>
        <?php
            require "connection.php"
            $sql = "USE task_maciej";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            $sql = "SELECT * from sound";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            $result = mysql_query($sql);
            echo $result;
        ?>
    </article>
</body>
</html>