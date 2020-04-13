<?php
//session_start();
 
include('config.php');
 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
    $rows = mysqli_num_rows($query);
    if($rows!=0){
      while($userinfo = mysqli_fetch_assoc($query)) {
?>
<html>
   <head>
      <title>MON BLOG</title>
      <meta charset="utf-8">
   </head>
   <body>
      <nav>
      <!-- <?php
      if(!empty($userinfo['avatar']))
      {
      ?>
      <img src="membres/avatars/ <?php echo $userinfo['avatar'] ?>" width="100px">
      <?php
      }
      ?> -->
      <?php include('menu2.php');?>
      </nav>
      <div>
      <?php
         include('index3.php');
      ?>
         
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         

      </div>
   </body>
</html>
<?php   
}
    }
   }
}
?>