<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="connect.css">

    <link rel="stylesheet" href="file:///C:/wamp64/www/site1/fontawesome-free-5.12.1-web/css/all.css">
    <title>Inscription</title>
</head>
<body>


    
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['submit'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $date = $_REQUEST['date'];
 $contact = $_REQUEST['contact'];
 $checkbox = $_REQUEST['checkbox'];

 
 
        $query = "INSERT into `users` (username, password, email, date, contact, checkbox)
VALUES ('$username', '".md5($password)."', '$email', '$date', '$contact', '$checkbox')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Inscription</h1>
<form name="inscription" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<label for="">Date de naissance</label>
<input type="date" name="date" > <br>
<input type="text" name="contact" placeholder="Numbers"> <br>
<input type="checkbox" name="checkbox"> <span>J'accepte les conditions</span>

<input type="submit" name="submit" value="Inscription" />
</form>
</div>
<?php } ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>