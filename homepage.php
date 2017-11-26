<html>
	<head>
		<title>WELCOME to weSell</title>

		<!--external css-->
		<link rel="stylesheet" type="text/css" href="styles.css">	
		
		<!--embedded css-->
		<style type="text/css"> 
			text {
    				font-weight: bold;
    				color: blue;
    			}
    	</style>
	</head>
	<body style="background-image: url('img/background2.jpg');">
		
		<!--add link into logo-->
		<a href="homepage.php">
			<img src="logo\logo3.jpg"> 
		</a> 
		
		<center><h1>Welcome To weSell</h1></center>

		<!--show the current date and time-->
		<div align="right">
		<p><h5><a style="text-decoration: none;" href = "login\login.html">Login</a></text> or 
		<a style="text-decoration: none;" href = "register\register.html">Sign Up</a></text></h5></p>
		<p style="background: lightblue;">
		<script type="text/javascript" style="background: white;"> 
			var date = new Date();
			document.writeln(date.toDateString());
		</script>
		</div>
		
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
		
		<br>
		
		</center>
		<br><br><br> 
		
		<!-- Add Slideshow-->
		<div align="left">
		<center><table id="table1" style="border: blue ; width: 60%; height: 50%;">
				<tr>
					<td>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
		* {box-sizing:border-box}
		body {font-family: Verdana,sans-serif;}
		.mySlides {display:none}

		/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<div class="slideshow-container"> 

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="slideshow\rphone.png" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="slideshow\computer1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="slideshow\shirt1.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

<h4 class="unit-header">Your one-stop online store</h4>
<h5 class="unit-subheader">weSell online shop offers you variety of choices from fashion to computer equipment that will satisfy your needs without hurting your wallet. We never compromise the quality of the products because we make sure the suppliers are from trusted stores. </h5>				
					</td>
				</tr>
			</table>
		</div>
		</center>

		<p>&copy; weSell 2017</p>
	</body>
</html>