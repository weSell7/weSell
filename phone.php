<?php 
	session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
	<a href="homepage.php">
			<img src="logo\logo3.jpg">
		</a> 

    <center><h1><b>Phone</b></h1></center>

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
                <li><a href="fashion.php">Fashions</a></li>
                <li><a href="kitchen.php">Kitchen</a></li>
                <li class="active"><a href="phone.php">Mobile</a></li>
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
            
		<div align="center">
			<form method="POST" action="includes/filterMo.php">
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

							
						</script>
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
  							</script>
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

							
						</script>
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

							
						</script>
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