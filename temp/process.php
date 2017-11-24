<?php
	$db = new mysqli("localhost","root","","wsdb");

	if(isset($_POST['pname'])){
		$pname = $_POST['pname'];
	}

	if(isset($_POST['brand'])){
		$brand = $_POST['brand'];
	}

	if(isset($_POST['price'])){
		$price = $_POST['price'];
	}

	if(isset($_POST['unit'])){
		$unit = $_POST['unit'];
	}

	if(isset($_POST['discount'])){
		$discount = $_POST['discount'];
	}

	$sql = "INSERT INTO fashion (pname, brand, price, unit, discount)
			VALUES ('$pname','$brand',$price,$unit,$discount)";

	$result = mysqli_query($db, $sql);

	if($result){
		header("Location: insert.php");
	}else{
		echo "nope";
	}

?>