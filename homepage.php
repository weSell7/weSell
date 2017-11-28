<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang = " en ">
	<head>
		<title>WELCOME to weSell</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
		
		
        <br><br><br><br><br><br><br><br>
		
		<center><h1>Welcome To weSell</h1></center>

		
		<p style="background: lightblue;">
		
		</p>

		<!--show the current date and time-->
		<div align="right">

		<p style="background: lightblue;">
		<script type="text/javascript" style="background: white;"> 
			var date = new Date();
			document.writeln(date.toDateString());
		</script>
		</p>
		</div>
		

		<br>
		<center>
            
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="homepage.php"><label style="font-size: 50px;">weSell</label></a>
            </div>
            <div align="right">
		        <script type="text/javascript"> 
                    var date = new Date();
                    document.writeln(date.toDateString());
		        </script>
		    </div>
            <ul class="nav navbar-nav ">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="homepage.php">Home</a></li>
                <li><a href="computer.php">Computer Components</a></li>
                <li><a href="fashion.php">Fashions</a></li>
                <li><a href="kitchen.php">Kitchen</a></li>
                <li><a href="phone.php">Mobile</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
            </ul>    
            <ul class="nav navbar-nav navbar-right">
                <?php 
                
                    if(isset($_SESSION['name'])){
                        echo "<li>Hello, ";
				        echo $_SESSION['name']."</li>";
                        
                    }else{
                        echo "<li><a href='register/registerform.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>
                            <li><a href='login/loginform.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                    }
                ?>
            </ul>
            </div>
        </nav>
  		
		<br>
		</center>
		
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
            </table></center></div>

		<p>&copy; weSell 2017</p>
	</body>
</html>