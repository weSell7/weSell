<?php 
	session_start();
?>

<html>
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<title>weSell | Computer Components1</title>

		<!--external css-->
		<link rel="stylesheet" type="text/css" href="styles.css">	
		
		<!--embedded css-->
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
        	var input, filter, table, tr, td, i;
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
        
        <!--hover change text size-->
        <style>
            a:hover, a:active {font-size: 110%;}
        </style>
        
	</head>
	<body style="background-image: url('img/background2.jpg');">

		<!--add link into logo-->
		<a href="homepage.php">
			<img src="logo\logo3.jpg">
		</a> 

        <center><h1><b>Computer Components</b></h1></center>

		<br>
		<center>
            <nav class="navbar navbar-inverse navbar-fixed-top">
             <div style="background-color: #0D314B ;" class="container-fluid">
            <div style="background-color: #0D314B ;" class="navbar-header">
                <a class="navbar-brand" href="#"><label style="font-size: 50px;">weSell</label><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </div>
                
            <div>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" id="input" onkeyup="search()" placeholder="I'm looking for...">
                </div>
            </form>
            
            <!--Time-->
            <div align="right">
            <script type="text/javascript">    
			    var date = new Date();
			    document.writeln("<label style='color: white;'>"+date.toDateString()+"</label>");
		    </script>
            </div>
            </div>
            
           

            <ul class="nav navbar-nav ">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="homepage.php">Home</a></li>
                <li class="active"><a href="computer.php">Computer Components</a></li>
                <li><a href="fashion.php">Fashions</a></li>
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
			<form method="POST" action="includes/filterCom.php">
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


		<center><h1><marquee><text style='color: red;'> SALE!! Up to 30% Discount on selected products! </text></marquee></h1>
		</center>
        
      

		<center>
			<table id="table1" style="border: solid; width: 75%; height: 70%;" >
				
				<tr class="a"><td><a href="cc\gpu.html"><img src="computer\gpu.jpg"></a>
						<a href="cc\gpu.html"><br>MSI GEFORCE® GTX 1080 TI</a><br>
						<text><strike> RM3999 </strike> </text> <script type="text/javascript">
							var a = 3999;
							var b = 0.7;

							document.write("<text style='color: red;'>30% OFF! RM " + discount(a,b) + "</text>");

							function discount(x,y){
  								return Math.round(x*y).toFixed(2);
  							}
						</script><br><br><button>Add to Cart</button> <button>Buy Now</button>
					</td>
			</tr>

			<tr class="a">
				<td><a href="cc\gpu2.html"><img src="computer\gpu2.jpg"></a>
					<a href="cc\gpu2.html"><br>ZOTAC GTX 1060 AMP Edition SE 6GB</a><br>
					<text><strike> RM1399 </strike> </text> <script type="text/javascript">
							var a = 1799;
							var b = 0.85;

							document.write("<text style='color: red;'>15% OFF! RM " + discount(a,b) + "</text>");

							function discount(x,y){
  								return Math.round(x*y);
  							}
							
							
						</script><br><br>
					<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\gpu3.html"><img src="computer\gpu3.jpg"></a>
						<a href="cc\gpu3.html"><br>MSI RADEON™ RX 580 GAMING X 8G</a><br>
						<text>RM1799</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\ssd.html"><img src="computer\ssd.jpg"></a>
						<a href="cc\ssd.html"><br>Samsung 250GB SSD 850 EVO</a><br>
						<text>RM458</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\ssd1.html"><img src="computer\ssd1.jpg"></a>
						<a href="cc\ssd1.html"><br>Kingston 480GB SSD</a><br>
						<text>RM839</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\Keyboard.html">
							<img src="computer\Keyboard.jpg"></a>
						<a href="cc\Keyboard.html"><br>Logitech G213 RGB Keyboard</a><br>
						<text><strike> RM225 </strike></text><script type="text/javascript">
							var a = 225;
							var b = 0.80;

							document.write("<text style='color: red;'>20% OFF! RM " + discount(a,b) + "</text>");

							function discount(x,y){
  							return Math.round(x*y);
  							}
							
							
							</script>
						<br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\Keyboard1.html">
							<img src="computer\Keyboard1.jpg">
						</a>
						<a href="cc\Keyboard1.html"><br>CORSAIR K70 LUX RGB Mechanical</a><br>
						<text>RM625</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\mouse.html">
							<img src="computer\mouse.jpg">
						</a>
						<a href="cc\mouse.html"><br>Logitech G502 Proteus Spectrum</a><br>
						<text>RM259</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\mouse1.html">
							<img src="computer\mouse1.jpg">
						</a>
						<a href="cc\mouse1.html"><br>Logitech B170 Wireless Mouse</a><br>
						<text>RM28</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>

			<tr class="a">
				<td><a href="cc\headset.html">
							<img src="computer\headset.jpg">
						</a>
						<a href="cc\headset.html"><br>Kingston HyperX(HX-HSCR-BK)</a><br>
						<text>RM463</text><br><br>
						<button>Add to Cart</button> <button>Buy Now</button>
				</td>
			</tr>
			</table>
		</center> <br>
		<p>&copy; weSell 2017</p>
	</body>
</html>