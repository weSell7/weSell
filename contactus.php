<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>weSell | Contact Us</title>

		<!--external css-->
		<link rel="stylesheet" type="text/css" href="styles.css">	
		<script type="text/javascript">
		var helpArray = ["Please enter your name", "Please enter your email", "Please write any comments", 
							"", "Cleared",""];

		var helpText;

		function init(){
    		helpText = document.getElementById("helpText");

    		registerListeners(document.getElementById("pname"),0);
    		registerListeners(document.getElementById("email"),1);
    		registerListeners(document.getElementById("cbox"),2);
    		registerListeners(document.getElementById("submit"),3);
    		registerListeners(document.getElementById("reset"),4);
    } 

  		function registerListeners (object, messageNumber){
    		object.addEventListener("focus", function(){
    		helpText.innerHTML = helpArray[ messageNumber];
    		}, false);
  			object.addEventListener("blur", function() { helpText.innerHTML = helpArray[5];}, false);
  		}

		window.addEventListener("load", init, false);

		function validate() {
   		if (document.form1.name.value == 0) {
        	alert("Enter your name");
    		}
 
    	else if (document.form1.email.value == 0) {
        	alert("Enter an email");
    		}
    	else if (document.form1.cbox.value == 0) {
        	alert("Enter your comments");
    		}
    	else {
 			alert("Sucessfull Sent!");
    	}
	}		
</script>
</head>
<body style="background-image: url('img/background2.jpg');">
	<!--add link into logo-->
		<a href="homepage.php">
			<img src="logo\logo3.jpg">
		</a> 

		<center><h1>Contact Us</h1></center>

		<br>
		<center>
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><label style="font-size: 50px;">weSell</label></a>
            </div>
            <div align="right">
		        <script type="text/javascript"> 
                    var date = new Date();
                    document.writeln(date.toDateString());
		        </script>
		    </div>
            <ul class="nav navbar-nav ">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="homepage.php">Home</a></li>
                <li><a href="computer.php">Computer Components</a></li>
                <li><a href="fashion.php">Fashions</a></li>
                <li><a href="kitchen.php">Kitchen</a></li>
                <li><a href="phone.php">Mobile</a></li>
                <li class="active"><a href="contactus.php">Contact Us</a></li>
            </ul>
            </ul>    
            <ul class="nav navbar-nav navbar-right">
                <?php 
                
                    if(isset($_SESSION['name'])){
                        echo "<label><li style='font-size: 14px; color: white;'>Hello, ";
				        echo $_SESSION['name'].". <a href='includes/logout.php' action='includes/logout.php' method='POST'> Logout?</a></li></label>";
                        
                    }else{
                        echo "<li><a href='register/registerform.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                            <li><a href='login/loginform.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                    }
                ?>
            </ul>
            </div>
        </nav>
		</center><br><br>

<div style="background-color: lightblue;">		

	<label style="font-weight: bold; font-size: 20;">HQ Location Address:</label><br><br>
	<label>weSell Group</label><br>
	<label>Jalan Tuaran,</label><br>
	<label>Lorong Bun Inanam,</label><br>
	<label>Wisma K,</label><br>
	<label>88450 Kota Kinabalu,</label><br>
	<label>Sabah, MALAYSIA</label><br><br>

	<label style="font-weight: bold; font-size: 20;">Person in Charge:</label><br>
	<label>Mr.Maximalian / Mr.Carlson</label><br>
	<label>Tel: 010-5661553 / 013-8773991</label><br>
	<label>Email: max@wesell.com.my / carl@wesell.com.my</label>

</div>

	
	<h1>Customer Care: </h1>
	<center>
	<script type="text/javascript" src="form.js"></script>

	<form name="form1" id="form1" method="POST" action="complaintform.php" style="background: white;">
		<h2>Complaint Form</h2>
		<label>Simply mention your name and enter your e-mail, we(Sell) will response as soon as possible.</label><br><br>
		<label style="color: red;" id="helpText"></label><br><br>
		<div>
			<label>Name: </label>
			<input type="text" id="pname" name="name" placeholder="Enter your name.." required>
		</div>
		<br>
		<div>
			<label>Email: </label>
			<input type="text" id="email" name="email" placeholder="Enter your e-mail.." required>
		</div>
		<br>
		<div>
			<label>Comments: </label><br>
			<textarea id="cbox" name="comment" rows="5" cols="40" placeholder="Any comments.." required></textarea>
		</div>
		<br>
		<div>
			<input type="submit" value="Submit" onclick="validate()" id="submit">
			<input type="reset" value="Clear" id="reset">
		</div>
	</form>
	</center>
	<p>&copy; weSell 2017</p>
	</body>
</html>