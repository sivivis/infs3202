<!--search-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Search University</title>
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

<div class = "main">

  <div class="body-content">
  <div class="module">
    <h3>Find Universities around you...</h3>
  <!--It should come up with a map and to show a list of universities-->



  
  


  <input id='search' type="text">
  <div id='result'></div>
  <script>
  $("#search").on("input",function(){
      $search=$("#search").val();
      if($search.length>0){
          $.get("res.php",{"search":$search},function($data){
              $("#result").html($data);
              
          })
          
      }
      
      
  });
  
  
  </script>


  </div>
</div>
</div>
	<footer>
		<p>&copy; 2017 Team Johnny, Siv I & Leo</p>
	</footer>
</body>
</html>