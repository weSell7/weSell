<?php
	$db = new mysqli("localhost","root","","wsdb");

	if(isset($_POST['name'])){
		$name = $_POST['name'];
	}

	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}

	if(isset($_POST['comment'])){
		$comment = $_POST['comment'];
	}

	$sql = "INSERT INTO complaint (name,email,comment) VALUES ('$name','$email','$comment')";

	$result = mysqli_query($db, $sql);

	if($result){
		header("Location: ../contactus.php");
	}

?>