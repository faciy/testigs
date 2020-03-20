<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="connect.css">
    

    <link rel="stylesheet" href="file:///C:/wamp64/www/site1/fontawesome-free-5.12.1-web/css/all.css">
    <title>Connexion</title>
   
</head>
<body>
<?php
 require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<div class="form" >
<h1>Connexion</h1>
<form action="" method="post" name="login">
<label for="">Username</label> <br>
<input type="text" name="username" placeholder="Username" required /> <br>
<label for="">Mot de passe</label> <br>
<input type="password" name="password" placeholder="Password" required /> <br>
<br>
<input name="submit" type="submit" value="Login" /> 

</form>
<p>Not registered yet? <a href='inscription.php'>Register Here</a></p>
</div>
<?php } ?>


 
    
    <script src="js/jquery-3.4.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>