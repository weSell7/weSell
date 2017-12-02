<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
	<title>weSell | Registration</title>
</head>
<body style="background-image: url('../img/background2.jpg');">
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
    
    <br><br><br><br>

	<center>

		<?php 
			if(isset($_SESSION['name'])){
				echo "You are already logged in!";
			}else{
				echo "<div style='background-color: rgba(129, 165, 233, 0.4);'>
				<h1>Registration</h1>
			<form method='POST' action='register.php'>
			<p><label>Username: </label>
				<input type='text' name='username' required>
				<label style='color: red;'>*</label>
			</p>
			<p><label>Password: </label>
				<input type='password' name='password' required>
				<label style='color: red;'>*</label>
			</p>
			<p><label>Name: </label>
				<input type='text' name='name' required>
				<label style='color: red;'>*</label>
			</p>
			<p><label>Address: </label>
				<textarea required name='address'></textarea>
				<label style='color: red;'>*</label>
			</p>
			<p><label>Zip Code: </label>
				<input type='text' name='zcode' required>
				<label style='color: red;'>*</label>
			</p>
			<p><label>E-mail: </label>
				<input type='text' name='email' required>
				<label style='color: red;'>*</label>
			</p>
			<p><label>Gender: </label>

				<label>Male</label><input type='radio' name='gender' value='1' checked required> 
				<label>Female</label><input type='radio' name='gender' value='2'>
				<label style='color: red;'>*</label>
			</p>
			<p><input type='submit' name='submit'> <input type='reset' name='reset' value='Clear'></p>
		</form></div>";
			}


		?>

	</center>

</body>
</html>