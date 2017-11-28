<?php 
	session_start();
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>weSell | Login</title>

	<!-- include css file here-->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="styles.css"/>
	
	<!-- include javascript file here-->
    <script src="js/login.js"></script>
      
  </head>
  <body style="background-image: url('../img/background2.jpg');" id="demo">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div style="background-color: #0D314B;"class="container-fluid">
        <div style="background-color: #0D314B;"class="navbar-header">
            <a class="navbar-brand" href="#"><label style="font-size: 50px;">weSell</label><span class="glyphicon glyphicon-shopping-cart"></span></a>
        </div>
        <ul class="nav navbar-nav">
        <li><a href="..\homepage.php">Home</a></li>
           
        </ul>
            
         <!--Time-->
            <div align="right">
            <script type="text/javascript">    
			    var date = new Date();
			    document.writeln("<label style='color: white;'>"+date.toDateString()+"</label>");
		    </script>
            </div>
        </div>
    </nav>
      
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