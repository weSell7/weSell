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
		echo "

		<head>
   			<meta name='viewport' content='width=device-width, initial-scale=1'>
    		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    
			<title>weSell | Registration</title>
		</head>

	<body style='background-image: url('../img/background2.jpg');'> 
    <nav class='navbar navbar-inverse navbar-fixed-top'>
        <div style='background-color: #0D314B;'class='container-fluid'>
        <div style='background-color: #0D314B;'class='navbar-header'>
            <a class='navbar-brand' href='#''><label style='font-size: 50px;'>weSell</label><span class='glyphicon glyphicon-shopping-cart'></span></a>
        </div>
        <ul class='nav navbar-nav'>
        <li><a href='..\homepage.php'>Home</a></li>
           
        </ul>
            
         <!--Time-->
         	<div align='right'>
            <script type='text/javascript'>    
			    var date = new Date();
			    document.writeln('<label style='color: white;'>'+date.toDateString()+'</label>');
		    </script>
            </div>
        </div>
    </nav><br><br><br><center>
			<h1>User's Information</h1>
			<p><b>Name : </b>".$row['name']."</p>
			<p><b>E-mail : </b>".$row['email']."</p>
			<p><b>Username : </b>".$row['username']."</p>
			<p><b>Address : </b>".$row['address']."</p>
			<p><b>Gender : </b>".$row['gender']."</p>";

		echo "<br><a href='../computer.php'><input type='submit' name='back' value='Back'></a></body> ";

	}


?>