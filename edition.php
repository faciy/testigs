<?php
session_start();
 
include('config.php');

if(!empty($_FILES)){
   $file_name = $_FILES['avatar']['name'];
   $file_extension = strrchr($file_name, ".");

   $file_tmp_name = $_FILES['avatar']['tmp_name'];
   $file_dest = 'membres/avatars/'.$file_name;

   $extensions_autorisees = array('.jpg', '.png', '.jpeg', '.gif');

   if(in_array($file_extension, $extensions_autorisees)){
      if(move_uploaded_file($file_tmp_name, $file_dest)){
         $query = ('INSERT INTO users(name, avatar) VALUES (?)');
         $query =array($file_name, $file_dest);
         echo 'Fichier envoyé avec succès';
      }else{
         echo 'Une erreur s\'est produite lors de l\'envoie du fichier ';
      }
   }else{
      echo 'seuls les fichiers jpg sont autorisés';
   }

   
}
   
?>
<html>
   <head>
      <title>EDITION</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Changer ma photo</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
               <label >Avatar</label>
               <input type="file" name="avatar"> <br> <br>
               <input type="submit" value="Mettre à jour mon profil !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
