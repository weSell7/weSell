<?php 
    session_start();
?>

<html>   
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    
            <title>weSell | Edit Info</title>
        </head>

    <body style='background-image: url('../img/background2.jpg');'> 
    <nav class='navbar navbar-inverse navbar-fixed-top'>
        <div style='background-color: #0D314B;'class='container-fluid'>
        <div style='background-color: #0D314B;'class='navbar-header'>
            <a class='navbar-brand' href='#''><label style='font-size: 50px;'>weSell</label><span class='glyphicon glyphicon-shopping-cart'></span></a>
        </div>
        <ul class='nav navbar-nav'>
        <li><a href='..\homepage.php'>Home</a></li>
           
        </ul>
            
         <!--Time-->
            <div align='right'>
            <script type='text/javascript'>    
                var date = new Date();
                document.writeln('<label style='color: white;'>'+date.toDateString()+'</label>');
            </script>
            </div>
        </div>
    </nav><br><br><br><center>

        <?php 

        $db = new mysqli('localhost','root','','wsdb');

        if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
        }

        $sql = "SELECT name, email, username, address
                FROM info
                WHERE name = '$name' " ;

        $result = mysqli_query($db, $sql);

        $row = mysqli_fetch_assoc($result);


        if($row){


        echo "<h1>Edit Information</h1><br>

        <form action='../includes/editinfo.php' method='POST'>
            <p><label>Name: </label>
                <input type='text' name='name' value='".$row['name']."' >
            </p>

            <p><label>E-mail: </label>
                <input type='text' name='email' value='".$row['email']."' required>
                <label style='color: red;'>*</label>
            </p>

            <p><label>Username: </label>
                <input type='text' name='username' value='".$row['username']."' >
            </p>

            <p><label>Address: </label>
                <textarea required name='address' value='".$row['address']."'></textarea>
                <label style='color: red;'>*</label>
            </p>

            <input type='button' onclick='history.go(-1);'' value='Back'> <input type='submit' name='submit' value='Save'>
            
        </form>";
        }

        ?>

</html>