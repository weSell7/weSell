<!DOCTYPE html>
<html>
<head>
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

		<center><h1>Computer Components</h1></center>

		<!--show the current date and time-->
		<p style="background: lightblue;">
		<script type="text/javascript" style="background: white;"> 
			var date = new Date();
			document.writeln(date.toDateString());
		</script>
		</p>

		<br>
		<center>
		<!--menu box using table (internal css)-->
		<table style="width: 80%;"> 
			<tr style="background: lightblue;">
				<th><a href="homepage.php">Homepage</a></th>
				<th><a href="computer.php">Computer Components</a></th>
				<th><a href="fashion.php">Fashions</a></th>
				<th><a href="kitchen.php">Kitchen</a></th>
				<th><a href="phone.php">Mobile</a></th>
				<th><a href="contactus.php">Contact Us</a></th>
			</tr>
		</table>
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
	<form id="form1" name="form1" action="">
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

</body>
</html>