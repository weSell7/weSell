<?php 
	session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>weSell | Fashion</title>
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
		<!--add link into logo-->
		<a href="homepage.php">
			<img src="logo\logo3.jpg">
		</a> 
		

		<center><h1>Fashion</h1></center>
		
		<p style="background: lightblue;">
			<?php 
				if(isset($_SESSION['name'])){
					echo "Hello, ";
					echo $_SESSION['name'];
					echo "<label>. Click here to <a href='includes/logout.php'>Logout</a> </label>";	
				} 
			?>	
		</p>

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
                <li class="active"><a href="fashion.php">Fashions</a></li>
                <li><a href="kitchen.php">Kitchen</a></li>
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
			<form method="POST" action="includes/filterFa.php">
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
					<a href="Fshn\tshirt1.html"><img src="fashion\shirt1.jpeg"></a>
					<a href="Fshn\tshirt1.html"><br>
					Men's EcoSmart Soft Jersey Fabric Short Sleeve T-shirt</a><br>
					<text>RM69.00 </text><br><br>
					<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Fshn\tshirt2.html"><img src="fashion\shirt2.jpg"></a>
						<a href="Fshn\tshirt2.html"><br>
						Life Classic Logo T-Shirt</a><br>
						<text>RM59.00 </text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Fshn\tshirt3.html"><img src="fashion\shirt3.jpg"></a>
						<a href="Fshn\tshirt3.html"><br>
						Men's Cotton Polo Shirt in Navy</a><br>
						<text><strike> RM99.00 </strike></text> <script type="text/javascript">
							var a = 99;
							var b = 0.9;

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
					<a href="Fshn\tshirt4.html"><img src="fashion\shirt4.jpg"></a>
						<a href="Fshn\tshirt4.html"><br>
						Men's Cotton Polo Shirt in Moss Green</a><br>
						<text><strike> RM99.00 </strike></text> <script type="text/javascript">
							var a = 99;
							var b = 0.9;

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
					<a href="Fshn\tshirt5.html"><img src="fashion\shirt5.jpg"></a>
						<a href="Fshn\tshirt5.html"><br>
						Lebron Font Jersey Long Sleeve T-Shirt</a><br>
						<text>RM109.00</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Fshn\tshirt6.html"><img src="fashion\shirt6.jpg"></a>
						<a href="Fshn\tshirt6.html"><br>
						Greedland Denim Jeans Outerwear</a><br>
						<text>RM199</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Fshn\jaket1.html"><img src="fashion\jaket1.jfif"></a>
						<a href="Fshn\jaket1.html"><br>
						UNIQLO Revisable Parka - Grey</a><br>
						<text>RM149.00</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Fshn\jaket2.html"><img src="fashion\jaket2.jpg"></a>
						<a href="Fshn\jaket2.html"><br>
						Riviera Pure Cotton Heattech Limited Edition Jacket</a><br>
						<text><strike> RM249.00 </strike></text><script type="text/javascript">
							var a = 249;
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
					<a href="Fshn\jeans1.html"><img src="fashion\jeans1.jfif"></a>
						<a href="Fshn\jeans1.html"><br>
						Levi's 311 Women's Shaping Skinny Jeans</a><br>
						<text>RM299.00</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="Fshn\jeans2.html"><img src="fashion\jeans2.jfif"></a>
						<a href="Fshn\jeans2.html"><br>
						Levi's 519 Extreme Skinny Fit Jeans</a><br>
						<text><strike> RM369.00 </strike></text><script type="text/javascript">
							var a = 369;
							var b = 0.75;

							document.write("<text style='color: red;'>25% OFF! RM " + discount(a,b) + "</text>");

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
	