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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--hover change text size-->
    <style>
            a:hover, a:active {font-size: 110%;}
    </style>

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

    <center><h1><b>Contact Us</b></h1></center>

		<br>
		<center>
            <nav class="navbar navbar-inverse navbar-fixed-top">
             <div style="background-color: #0D314B ;" class="container-fluid">
            <div style="background-color: #0D314B ;" class="navbar-header">
                <a class="navbar-brand" href="homepage.php"><label style="font-size: 50px;">weSell</label><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </div>
            <div align="right">
		        <script type="text/javascript"> 
                    var date = new Date();
                    document.writeln("<label style='color: white;'>"+date.toDateString()+"</label>");
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
                        echo "<a href='includes/userinfo.php' action='includes/userinfo.php' method='POST' ";
                        echo "</a >". $_SESSION['name']. " . " ;
                        echo "<a href='includes/logout.php' action='includes/logout.php' method='POST'> Logout?</a></li></label>";
                        
                    }else{
                        echo "

                    <li><a href='register/registerform.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                            
                    <li class='dropdown'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-log-in'></span> Login</a>
                        <div class='dropdown-menu'>
                        <form id='formLogin' class='form container-fluid' method='POST' action='includes/login.php'>
                        <div class='form-group'>
                            <label>Username :</label>
                            <input type='text' class='form-control' name='username' id='username' required>
                        </div>
                        <div class='form-group'>
                            <label for='pwd'>Password:</label>
                            <input type='password' class='form-control' name='password' id='password' required>
                        </div>
                            <button type='submit' id='submit' class='btn btn-block'>Login</button>
                        </form>
                        </div>
                    </li>";
                    }
                ?>
            </ul>
            </div>
        </nav>
		</center><br><br>

<div style="background-color: lightblue;">
    <style>
        /* Create three equal columns that floats next to each other */
        .column {
        float: left;
        width: 50%;
        padding: 15px;
        }

    </style>
    <div class="row">
        <div class="column">
            <h2><span class="glyphicon glyphicon-globe"></span>HQ Location Address: </h2>
        <center>
            <label>weSell Group</label><br>
	       <label>Jalan Tuaran,</label><br>
	       <label>Lorong Bun Inanam,</label><br>
	       <label>Wisma K,</label><br>
	       <label>88450 Kota Kinabalu,</label><br>
	       <label>Sabah, MALAYSIA</label><br><br>
        </center>
        </div>
        <div class="column">
            <h2><span class="glyphicon glyphicon-user"></span>Person in charge:</h2>
        <center>
	       <label>Mr.Maximalian / Mr.Carlson</label><br>
	       <label>Tel: 010-5661553 / 013-8773991</label><br>
	       <label>Email: max@wesell.com.my / carl@wesell.com.my</label>
        </center>
        </div>
    </div>

</div>

	<h1><span class="glyphicon glyphicon-heart"></span>Customer Care: </h1>
	<center>

    <div style='background-color: rgba(129, 165, 233, 0.4);'>
	<script type="text/javascript" src="form.js"></script>

	<form name="form1" id="form1" method="POST" action="complaintform.php" style="background: background.png;">
		<h2>Complaint Form</h2>
		<label>Simply mention your name and enter your e-mail, we(Sell) will response as soon as possible.</label><br>
		<label style="color: red;" id="helpText"></label>
		<div>
			<label>Name: </label>
			<input type="text" id="pname" name="name" placeholder="Enter your name.." required><label style="color: red;">*</label>
		</div>
		<br>
		<div>
			<label>Email: </label>
			<input type="text" id="email" name="email" placeholder="Enter your e-mail.." required><label style="color: red;">*</label>
		</div>
		<br>
		<div>
			<label>Comments: </label><br>
			<textarea id="cbox" name="comment" rows="5" cols="40" placeholder="Any comments.." required></textarea><label style="color: red;">*</label>
		</div>
		<br>
		<div>
			<input type="submit" value="Submit" onclick="validate()" id="submit">
			<input type="reset" value="Clear" id="reset">
		</div>
	</form>
    </div>
	</center>
	<p>&copy; weSell 2017</p>
	</body>
</html>