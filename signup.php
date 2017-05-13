    <?php
    
 require 'databaseconnect.php';
        if(isset($_POST['Register'])){
            
            session_start();
            $FNmae=$_POST['First_Name'];
            $LName=$_POST['Last_Name'];
            $Email=$_POST['Email'];
            $PW=$_POST['password'];
            $CPW=$_POST['cpassword'];
            if($PW==$CPW){
            $sql=$DBcon->query("INSERT INTO user (Fname,Lname,Email,Password)Values('".$FNmae."','".$LName."','".$Email."','".$PW."')");
            
            header('Location:loginpage.php');}
            else{
                 header('Location:signup.php'); 
                
            }
            
        }
    
    
    
    
    
        ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--jQuery library-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Sign Up</title>
</head>


<body>

<ul class="topnav">
  <li><a class="active" href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="index.php">Back</a></li>
</ul>


  <div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="First_Name"id="First_Name" required />
      <input type="text" placeholder="User Name" name="Last_Name"id="Last_Name" required />
      <input type="email" placeholder="Email" name="Email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="cpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="Register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

	<div id="footer">
		<p>&copy; 2017 Team Johnny, Siv I & Leo</p>
	</div>
</body>
</html>