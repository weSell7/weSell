<?php 
 	session_start();
	
	$db = new mysqli('localhost','root','','wsdb');

	if(isset($_SESSION['name'])){
		$n = $_SESSION['name'];
	}

	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}

	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}

	if(isset($_POST['address'])){
		$address = $_POST['address'];
	}

	$sql = "UPDATE info 
			SET name = '$name', email = '$email', username = '$username', address = '$address' 
			WHERE name = '$n' ";

	$result = mysqli_query($db,$sql);

	if(!$result){
		echo "Not complete";
	}else{
		header("Location: userinfo.php");
	}

?>

