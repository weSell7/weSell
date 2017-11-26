<?php
	session_start();
	
	$db = new mysqli("localhost","root","","wsdb");

	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}

	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}

	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}

	if(isset($_POST['zcode'])){
		$zcode = $_POST['zcode'];
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}

	if(isset($_POST['gender'])){
		$gender = $_POST['gender'];
	}

	$sql = "INSERT INTO info (username,pwd,name,address,zcode,email,gender) VALUES 
			('$username','$password','$name','$address','$zcode','$email','$gender' )" ;

	$result = mysqli_query($db,$sql);

	if(!$result){
		echo "Not complete";
	}else{
		header("Location: ..\homepage.php");
	}

?>