<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--jQuery library-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/cookies.js"></script>
    <script type="text/javascript">
    	//this.startupCheck();
    </script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>UniPass</title>
	<link href='http://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope' rel='stylesheet' type='text/css'>
	
</head>

<body>
    <ul class="topnav">
<?php
  session_start();

  
  
    if(!isset($_SESSION["UserID"])){
      
      echo '    <li><a class="active" href="#home">Home</a></li>
                <li><a href="loginpage.php">Login</a></li>
                  
                <li class="right"><a href="signup.html">Sign Up</a></li>';

  }else{
       echo '   <li><a class="active" href="#home">Home</a></li>
                <li><a href="unisearch.php">Uniserach</a></li>
                
                 <li><a href="logout.php">logout</a></li>
                 <li><a href="#contact">Contact</a></li>
                ';

  
  
  }?>
 
	



</ul>
		



	<div id="footer">
		<p>&copy; 2017 Team Johnny, Siv I & Leo</p>
	</div>

</body>

</html>

