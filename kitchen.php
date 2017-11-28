<?php 
	session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>weSell | Kitchen</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css"> 
			text {
    				font-weight: bold;
    				color: blue;
    			}
    		.a {
    			display: inline;
    		}
    </style>
    <script type="text/javascript">
    	function search() {

        	// Declare variables 
        	var input, filter, table, tr, td, td1, td2, td3, i;
       		input = document.getElementById("input");
        	filter = input.value.toUpperCase();
        	table = document.getElementById("table1");
        	tr = table.getElementsByTagName("tr");

        	// Loop through all table rows, and hide those who don't match the search query
        	for (i = 0; i < tr.length; i++) {
          		td = tr[i].getElementsByTagName("td")[0];
        	if (td) {
            	if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              		tr[i].style.display = "";} 
            	else {
              		tr[i].style.display = "none";}
          		} 
        	}
    	}
    	</script>
</head>
<body style="background-image: url('img/background2.jpg');">
	<a href="homepage.php">
			<img src="logo\logo3.jpg">
		</a> 

		<center><h1>Kitchen</h1></center>

		<br>
		<center>
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><label style="font-size: 50px;">weSell</label></a>
            </div>
                
            <div>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" id="input" onkeyup="search()" placeholder="I'm looking for...">
                </div>
            </form>
                
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
                <li class="active"><a href="kitchen.php">Kitchen</a></li>
                <li><a href="phone.php">Mobile</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
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
		</center>
            
        <!--Filter-->
		<div align="center">
			<form method="POST" action="includes/filterKi.php">
				<label style="font-size: 20	; font-weight: bold;">Sort by: </label>
				<select name="option">
					<option value="0">Relevance</option>
					<option name=option1 value="1">Discount</option>
					<option name=option2 value="2">Price: Low to High</option>
					<option name=option3 value="3">Price: High to Low</option>
				</select>
				<input type="submit" name="submit" value="Sort">
			</form>
		</div>

    <center><h1><marquee><text style='color: red;'> SALE!! Up to 30% Discount on selected products! </text></marquee></h1></center>;
		
		<center>
			<table id="table1" style="border: solid; width: 80%; height: 70%;">
							<tr class="a">
				<td>
					<a href="Ktchen\refrigerator.html">
						<img src="Kitchen\refrigerator.jpg"></a>
					<a href="Ktchen\refrigerator.html"><br>
					Panasonic 210L-2Door Top Freezer Fridge</a><br>
					<text><strike> RM1099.00 </strike></text> <script type="text/javascript">
							var a = 1099;
							var b = 0.85;

							document.write("<text style='color: red;'>15% OFF! RM " + discount(a,b) + "</text>");

							function discount(x,y){
  								return Math.round(x*y);
  							}
						</script>
						<br><br>
					<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\microwave.html">
							<img src="Kitchen\microwave.jpg"></a>
						<a href="Ktchen\microwave.html"><br>
						Sharp Microwave R202Zs</a><br>
						<text>RM199.00 </text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\rice cooker.html">
							<img src="Kitchen\rice cooker.jpg"></a>
						<a href="Ktchen\rice cooker.html"><br>
						KHIND RC918 1.8L RICE COOKER</a><br>
						<text>RM92.00</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\blender.html"><img src="Kitchen\blender.jpg"></a>
						<a href="Ktchen\blender.html"><br>
						Sharp Personal Blender</a><br>
						<text>RM87.00</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\jugkettle.html"><img src="Kitchen\jugkettle.jpg"></a>
						<a href="Ktchen\jugkettle.html"><br>PHILIPS HD9303 JUG KETTLE 1.2L</a><br>
						<text><strike>RM89.99</strike></text> <script type="text/javascript">
							var a = 89.99;
							var b = 0.90;

							document.write("<text style='color: red;'>10% OFF! RM " + discount(a,b) + "</text>");

							function discount(x,y){
  								return Math.round(x*y);
  							}

							
						</script>
						<br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\tefal.html"><img src="Kitchen\tefal.jpg"></a>
						<a href="Ktchen\tefal.html"><br>Tefal Super Cook Wokpan 28cm + Lid</a><br>
						<text>RM115</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\tableware.html"><img src="Kitchen\tw.jpg"></a>
						<a href="Ktchen\tableware.html"><br>SOKANO Exclusive Premium</a><br>
						<text>RM47.90</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\dish drainer.html"><img src="Kitchen\dish drainer.jpg"></a>
						<a href="Ktchen\dish drainer.html"><br>S Shape Dish Drain (2Layer)</a><br>
						<text><strike>RM21.00</strike></text> <script type="text/javascript">
							var a = 21;
							var b = 0.95;

							document.write("<text style='color: red;'>5% OFF! RM " + discount(a,b) + "</text>");

							function discount(x,y){
  								return Math.round(x*y);
  							}

							
						</script>
						<br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\stove.html"><img src="Kitchen\gasstove.jpg"></a>
						<a href="Ktchen\stove.html"><br>MORGAN Glass Gas Stove MGS-8312G (Black)</a><br>
						<text>RM159.00</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Ktchen\juicer.html"><img src="Kitchen\juicer.jpg"></a>
						<a href="Ktchen\juicer.html"><br>PENSONIC JUICER PJ37</a><br>
						<text><strike>RM107.00</strike></text> <script type="text/javascript">
							var a = 107;
							var b = 0.85;

							document.write("<text style='color: red;'>15% OFF! RM " + discount(a,b) + "</text>");

							function discount(x,y){
  								return Math.round(x*y);
  							}

							
						</script>
						<br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>
			</table>
		</center> <br>
		<p>&copy; weSell 2017</p>
	</body>
</html>