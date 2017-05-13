
<?php
 session_start();
 require 'databaseconnect.php';
  
    if(isset($_POST['Login'])){
            
          
            $EM=$_POST['email'];
            $PW=$_POST['password'];
          
            $result=$DBcon->query("select * from user where Email='".$EM."' AND Password='".$PW."'");
            
            $row=$result->fetch_array(MYSQLI_BOTH);
            
       
            $_SESSION["UserID"]=$row['UserID'];
             header('Location:index.php');
         
        }
     
            
        
  ?>
  


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
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="newpage.php">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="signup.php">Sign Up</a></li>
</ul>
		

	<div class="main">
			
		<h1>UniPass</h1>
		<p class="introSub">Share your experiences in Uni</p>

		<div class="module">
	       <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">   
            <div class="alert alert-error"></div>
                <input type="text" placeholder="Email" name="email" required />
                <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
                <input type="submit" value="Login" name="Login" class="btn btn-block btn-primary" />
               </br>
               <p><a href="/forgot.html">Forgot Password</a></p>
            </form>
		</div>
    </div>

	<div id="footer">
		<p>&copy; 2017 Team Johnny, Siv I & Leo</p>
	</div>

</body>

</html>

