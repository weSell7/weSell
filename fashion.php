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
    
    <!--hover change text size-->
    <style>
            a:hover, a:active {font-size: 110%;}
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
		

    <center><h1><b>Fashion</b></h1></center>
		

		<br>
		<center>
        <nav class="navbar navbar-inverse navbar-fixed-top">
             <div style="background-color: #0D314B ;" class="container-fluid">
            <div style="background-color: #0D314B ;" class="navbar-header">
                <a class="navbar-brand" href="homepage.php"><label style="font-size: 50px;">weSell</label><span class="glyphicon glyphicon-shopping-cart"></span></a>
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
                    document.writeln("<label style='color: white;'>"+date.toDateString()+"</label>");
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
					Men's EcoSmart Short Sleeve T-shirt</a><br>
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
	