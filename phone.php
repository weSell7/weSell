<html>
<head>
	<title>weSell | Phone</title>
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
<body>
	<a href="homepage.php">
			<img src="logo\logo3.jpg">
		</a> 

		<center><h1>Phone</h1></center>

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
			<label style="font-size: 20; font-weight: bold;">Search: </label>
			<input type="text" id="input" onkeyup="search()" placeholder="Search for product..">
			<br>
			<form method="POST" action="filter/filterMo.php">
				<label style="font-size: 20; font-weight: bold;">Filter: </label>
				<select name="option">
					<option value="0"></option>
					<option name=option1 value="1">Discount</option>
					<option name=option2 value="2">Low to High</option>
					<option name=option3 value="3">High to Low</option>
				</select>
				<input type="submit" name="submit" value="Filter">
			</form>
		</div>
		<br><br>

		<center><h1><text><text style='color: red;'> SALE!! Up to 30% Discount on selected products! </text></h1></center>;
		
		<center>
			<table id="table1" style="border: solid; width: 80%; height: 70%;">
							<tr class="a">
				<td>
					<a href="linkmobile\honor5c.html"><img src="mobile\honor5c.jpg"></a>
						<a href="linkmobile\honor5c.html"><br>Honor5C</a><br>
						<text>RM799</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>

				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="linkmobile\oneplus.html"><img src="mobile\oneplus.jpg"></a>
						<a href="linkmobile\oneplus.html"><br>OnePlus 3T</a><br>
						<text><strike> RM2229 </strike></text> <script type="text/javascript">
							var a = 2229;
							var b = 0.85;

							document.write("<text style='color: red;'>15% OFF! RM " + discount(a,b) + "</text>");

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
					<a href="linkmobile\A5.html"><img src="mobile\A5.jpg"></a>
						<a href="linkmobile\A5.html"><br>Samsung A5</a><br>
						<text>RM1599</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="linkmobile\vivoy66.html"><img src="mobile\vivoy66.jpg"></a>
						<a href="linkmobile\vivoy66.html"><br>Vivo Y66</a><br>
						<text>RM999</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="linkmobile\iphone7.html"><img src="mobile\iphone7.jpg"></a>
						<a href="linkmobile\iphone7.html"><br>iphone7</a><br>
						<text><strike> RM2888 </strike></text> <script type="text/javascript">
							var a = 2888;
							var b = 0.95;

							document.write("<text style='color: red;'>5% OFF! RM " + discount(a,b) + "</text>");

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
					<a href="linkmobile\m8.html"><img src="mobile\m8.jpg"></a>
						<a href="linkmobile\m8.html"><br>HTC One M8</a><br>
						<text>RM820</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="linkmobile\Z5.html"><img src="mobile\Z5.jpg"></a>
						<a href="linkmobile\Z5.html"><br>Sony Xperia Z5</a><br>
						<text><strike> RM1239 </strike></text> <script type="text/javascript">
							var a = 1239;
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

			<tr class="a">
				<td>
					<a href="linkmobile\yotaphone.html"><img src="mobile\yotaphone.jpg"></a>
						<a href="linkmobile\yotaphone.html"><br>Yotaphone 2</a><br>
						<text><strike> RM763 </strike></text> <script type="text/javascript">
							var a = 763;
							var b = 0.70;

							document.write("<text style='color: red;'>30% OFF! RM " + discount(a,b) + "</text>");

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
					<a href="linkmobile\mbi.html"><img src="mobile\mbi.jpg"></a>
						<a href="linkmobile\mbi.html"><br>MBI i7</a><br>
						<text>RM499</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>

			<tr class="a">
				<td>
					<a href="linkmobile\nokia.html"><img src="mobile\nokia.jpg">
						</a>
						<a href="linkmobile\nokia.html"><br>Nokia 6500</a><br>
						<text>RM220</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
					
				</td>
			</tr>
				
			</table>
		</center> <br>
		
	<p>&copy; weSell 2017</p>	
</body>
</html>