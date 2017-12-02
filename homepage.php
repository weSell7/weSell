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
        
        <!--hover change text size-->
        <style>
            a:hover, a:active {font-size: 110%;}
        </style>
        
	</head>
	<body style="background-image: url('img/background2.jpg');">

        <br><br><br><br><br><br><br>    
		
        <center><h1><b>Welcome To weSell</b></h1></center>
        
		<center>
            
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div style="background-color: #0D314B ;" class="container-fluid">
            <div style="background-color: #0D314B ;" class="navbar-header">
                <a class="navbar-brand" href="#"><label style="font-size: 50px;">weSell</label><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </div>
            <div align="right">
		        <script type="text/javascript"> 
                    var date = new Date();
                    document.writeln("<label style='color: white;'>"+date.toDateString()+"</label>");
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
                        echo "<label><li style='font-size: 14px; color: white;'>Hello, ";
                        echo "<a href='includes/userinfo.php' action='includes/userinfo.php' method='POST' style='text-decoration: none;' ";
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
  		
		<br>
		</center>
        
		
		<!-- Add Slideshow-->
		<div align="left">
		<center>
        <table id="table1" style="border: blue ; width: 60%; height: 50%;">
            <tr>
                <td>
		          <meta name="viewport" content="width=device-width, initial-scale=1">
                  <style type="text/css">
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

        </div><br>

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
        </table></center></div><br>
        
        <!--Box-->
        <style type="text/css">
            a:hover {
                background-color: yellow;
            }
        </style>

        <center>
        <div class="container">    
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary" style="background-color:#0D314B;">
                        <div class="panel-heading">YEAR END SALES</div>
                        <div class="panel-body"><img src="img/hpage2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer">Crazy Sale is finally here!</div>
                    </div>
                </div>
            <div class="col-sm-4"> 
                <div class="panel panel-primary" style="background-color:#0D314B;">
                    <div class="panel-heading">COMING SOON!</div>
                    <div class="panel-body"><img src="img/hpage.jpg" class="img-responsive" style="width:100%; height:100%;" alt="Image"></div>
                    <div class="panel-footer">Don't Miss 12/12 Fever Sales!</div>
                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="panel panel-primary" style="background-color:#0D314B;">
                    <div class="panel-heading">Christmas DEAL</div>
                    <div class="panel-body"><img src="img/hpage3.jpg" class="img-responsive" style="width:100%; height:100%;" alt="Image"></div>
                    <div class="panel-footer">Up to 80% off Free Shipping Above RM80</div>
                </div>
            </div>
            </div>
        </div><br>
        </center>

		<p>&copy; weSell 2017</p>
	</body>
</html>