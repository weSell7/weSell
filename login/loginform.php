<?php 
	session_start();
?>

<html>
  <head>
    <title>weSell | Login</title>

	<!-- include css file here-->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="styles.css"/>
	
	<!-- include javascript file here-->
    <script src="js/login.js"></script>
      
  </head>
  <body style="background-image: url('../img/background2.jpg');" id="demo">
  	<a href="..\homepage.php"><img src="..\logo\logo3.jpg" /></a>
	<div class="container">
	  <div class="main">

	  	<?php 
	  		if(isset($_SESSION['name'])){
	  			echo "You are already logged in!";
	  		}else {
	  			echo "<h2>Login</h2>
 
		<form method='POST' action='login.php'>
		  <label>User Name :</label><br>
		  <input type='text' name='username' id='username' required /><br>
          
		  <label>Password :</label><br>
		  <input type='password' name='password' id='password' required /><br>
 
		  <input type='submit' value='Login' id='submit' />
		</form>";
	  		}
	  	?>
	  </div>
	 </div>
 </body>
</html>