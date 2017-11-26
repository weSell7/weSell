<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>weSell | Registration</title>
</head>
<body style="background-image: url('../img/background2.jpg');">
  	<a href="..\homepage.php"><img src="..\logo\logo3.jpg" /></a>
	<center>

		<?php 
			if(isset($_SESSION['name'])){
				echo "You are already logged in!";
			}else{
				echo "<h1>Registration</h1>
			<form method='POST' action='register.php'>
			<p><label>Username: </label>
				<input type='text' name='username' required>
			</p>
			<p><label>Password: </label>
				<input type='password' name='password' required>
			</p>
			<p><label>Name: </label>
				<input type='text' name='name' required>
			</p>
			<p><label>Address: </label>
				<textarea required name='address'></textarea>
			</p>
			<p><label>Zip Code: </label>
				<input type='text' name='zcode' required>
			</p>
			<p><label>E-mail: </label>
				<input type='text' name='email' required>
			</p>
			<p><label>Gender: </label>

				<label>Male</label><input type='radio' name='gender' value='1' checked required> 
				<label>Female</label><input type='radio' name='gender' value='2'>
			</p>
			<p><input type='submit' name='submit'> <input type='reset' name='reset' value='Clear'></p>
		</form>";
			}


		?>

	</center>

</body>
</html>