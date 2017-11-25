<html>
<head>
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
			<script type="text/javascript" style="background: white;"> 
				var date = new Date();
				document.writeln(date.toDateString());
			</script>
		</p>

		<br>
		<center>
		<table style="width: 80%;"> <!--menu box using table (internal css)-->
			<tr style="background: lightblue;">
				<th><a href="homepage.php">Homepage</a></th>
				<th><a href="computer.php">Computer Components</a></th>
				<th><a href="fashion.php">Fashions</a></th>
				<th><a href="kitchen.php">Kitchen</a></th>
				<th><a href="phone.php">Mobile</a></th>
				<th><a href="contactus.php">Contact Us</a></th>
			</tr>
		</table>
		</center><br>
		<div align="center">
			<input style="font-size: 25;" type="text" id="input" onkeyup="search()" placeholder="I'm looking for...">
			<br>
			<form method="POST" action="filter/filterFa.php">
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
		<br><br>

		<center><h1><text><text style='color: red;'> SALE!! Up to 30% Discount on selected products! </text></h1></center>;
		
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

							
						</script></text>
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

							
						</script></text>
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

							
						</script></text>
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

							
						</script></text>
						<br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>
			</table>
		</center> <br>
		<p>&copy; weSell 2017</p>
	</body>
</html>
	