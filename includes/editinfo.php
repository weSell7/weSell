<?php 
 	session_start();
	
	$db = new mysqli('localhost','root','','wsdb');

	if(isset($_GET['name'])){
		$name = $_GET['name'];
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}

	if(isset($_GET['username'])){
		$username = $_GET['username'];
	}

	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}

	$sql = "UPDATE info 
			SET name = '$name', email = '$email', username = '$username', address = '$address' 
			WHERE name = '$name' ";

	$result = mysqli_query($db,$sql);

	if(!$result){
		echo "Not complete";
	}else{
		header("Location: ..\homepage.php");
	}

?>

