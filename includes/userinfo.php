<?php 
	session_start();

	$db = new mysqli('localhost','root','','wsdb');

	 if(isset($_SESSION['name'])){
	 	$name = $_SESSION['name'];
	 }

	$sql = "SELECT info.name, info.email, info.username, info.address, gender.gender 
			FROM info INNER JOIN gender ON info.gender = gender.id
			WHERE info.name = '$name' 
			" ;

	$result = mysqli_query($db, $sql);

	$row = mysqli_fetch_assoc($result);

	if($row){
		echo "<h1>User's Information</h1>
			<p>Name : ".$row['name']."</p>
			<p>E-mail : ".$row['email']."</p>
			<p>Username : ".$row['username']."</p>
			<p>Address : ".$row['address']."</p>
			<p>Gender : ".$row['gender']."</p>";

		echo "<a href='../computer.php'><input type='submit' name='back' value='Back'></a> ";

	}


?>