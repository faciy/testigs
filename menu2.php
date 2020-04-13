
  <!--Header-->



  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<!--new-->
 <!-- <div class="container">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Home</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Offres</a>
      <a href="#">About</a>
      <a href="#">Contacts</a>

</div> 
 -->
<!-- <div id="main">
<button class="openbtn" onclick="openNav()"> Open Menu</button>
</div> -->
<!-- juste un bouton pour essayer -->
<!-- <div>
  <button type="button" class="btn btn-success"> <a href="login.php">Connexion</a> </button> 
  <span> <button type="button" class="btn btn-primary"> <a href="inscription.php">inscription</a> </button> </span>
</div>
</div> -->





</div>
</div>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#header">Accueil<span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#partie2">Ressources <span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#temoignage">Temoignages <span class="sr-only"></span></a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#footer">Contacts <span class="sr-only"></span></a>
    </li>
  </ul>
  <p style="color:white; margin-right:20px; margin-top:10px;"><a href="edition.php"><img src="images.png" style="width:30px; border-radius:50%;"></a> <?php echo $userinfo['username']; ?></p>
  <button type="button" class="login" id="connect"> <a href="logout.php">Deconnexion</a> </button>

  
  
  
  
</div>

</nav>
