<?php
	$db = new mysqli('localhost','root','','wsdb');

	$i = 0;

	if(isset($_POST['option'])){
		$option = $_POST['option'];
	}

	if($option==0){
		header("Location: fashion.html");
	}

	else if($option==1){

	$sql = "SELECT * FROM fashion WHERE discount != 0";

	$result = mysqli_query($db,$sql);

	if($result->num_rows){
		echo "<center><a href='fashion.html'><button>Back</button></a>";
		echo "<h1>List of Discount Items: </h1>";
		echo "<table width='50%' height='30%' border='1'><tr>
		<th>No.</th>
		<th>Brand</th>
		<th>Product name:</th>
		<th>Price after discount(MYR)</th>
		</tr>";
	while ($row = $result->fetch_assoc()){
		$i += 1;
		echo "<tr><td>$i</td><td> ".$row ["brand"]."</td><td> ".$row["pname"]."</td><td>".$row["discount"]."</td></tr>";
			}
		}
	}else if($option==2){

	$sql = "SELECT * FROM fashion ORDER BY price";

	$result = mysqli_query($db,$sql);

	if($result->num_rows){
		echo "<center><a href='fashion.html'><button>Back</button></a>";
		echo "<h1>Price from Low to High: </h1>";
		echo "<table width='50%' height='30%' border='1'><tr>
		<th>No.</th>
		<th>Brand</th>
		<th>Product name:</th>
		<th>Price(MYR)</th>
		</tr>";
	while ($row = $result->fetch_assoc()){
		$i += 1;
		echo "<tr><td>$i</td><td> ".$row ["brand"]."</td><td> ".$row["pname"]."</td><td>".$row["price"]."</td></tr>";
			}
		}

	}else if($option==3){

	$sql = "SELECT * FROM fashion ORDER BY price DESC";

	$result = mysqli_query($db,$sql);

	if($result->num_rows){
		echo "<center><a href='fashion.html'><button>Back</button></a>";
		echo "<h1>Price from High to Low: </h1>";
		echo "<table width='50%' height='30%' border='1'><tr>
		<th>No.</th>
		<th>Brand</th>
		<th>Product name:</th>
		<th>Price(MYR)</th>
		</tr>";
	while ($row = $result->fetch_assoc()){
		$i += 1;
		echo "<tr><td>$i</td><td> ".$row ["brand"]."</td><td> ".$row["pname"]."</td><td>".$row["price"]."</td></tr>";
			}
		}

	}
	mysqli_free_result($result);
	mysqli_close($db);
?>