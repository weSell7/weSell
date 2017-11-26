<?php
	session_start();

	$db = new mysqli("localhost","root","","wsdb");

	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}

	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	$sql = "SELECT * FROM info WHERE username='$username' AND pwd='$password' ";

	$result = mysqli_query($db,$sql);

	if(!$row = mysqli_fetch_assoc($result)){
		//header("Location: login.html");
		//echo "<script>window.alert('Wrong username or password!');</script>";
		echo "Wrong username or password!";
	}else{
		//echo "You have been successfully logged in!";
		$_SESSION['name'] = $row['name'];
		header("Location: ..\homepage.php");
	}

?>