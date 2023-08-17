<?php session_start(); 

$objetPdo = new PDO('mysql:host=localhost;dbname=colonid','superadmin','H0l*kuY12M14/');

$pdoStat = $objetPdo->prepare('SELECT * from client where mail=?');


$pdoStat->bindValue(':mail', $_SESSION['email'], PDO::PARAM_STR);

$pdoStat->execute(array($_SESSION['email']));


while ($data = $pdoStat->fetch()) {

        $id=$data['id'];

  
}



?>




<!DOCTYPE html>
<html lang="en">
     <head>
     <title>S'inscrire</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">

     
     </head>
     <body>
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="index.php"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li><a href="index.php">Accueil</a></li>
                   <li><a href="Services.html">Services</a></li>
                   <li><a href="Avis.html">Avis</a></li>
                   <li><a href="Contacts.html">Contacts </a></li>
                   <li><a href="administration/deconnexion.php">Deconnexion</a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>

    
    
</header>



<div class="content pt1"><div class="ic">More Website Templates @ TemplateMonster.com - June 10, 2013!</div>
  <div class="container_12">
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Informations personnelles</h2>
        <form id="form" action="administration/traitementAnimal.php" method="post">
          <div class="success_wrapper">
            <div class="success"><br>
              <strong></strong> 
          </div></div>
          <fieldset>

               <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br>

               <br class="clear">

              <label for="type">Type :</label>
                <select id="type" name="type" required>

                 <option value="">--Choisir un type--</option>
                 <option value="chien">Chien</option>
                 <option value="chat">Chat</option>
                 <option value="oiseau">Oiseau</option>
                 <option value="poisson">Poisson</option>
               </select><br>
               <br class="clear">

             <label for="genre">Genre :</label>
             <input type="radio" id="femelle" name="genre" value="femelle" required>
             <label for="femelle">Femelle</label>
             <input type="radio" id="male" name="genre" value="male" required>
             <label for="male">Mâle</label><br>

              <br class="clear">

             <label for="race">Race :</label>
              <input type="text" id="race" name="race" required><br>

  <br class="clear">

  <input type="submit" value="Ajouter">
  <input type="button" onclick="window.location.href = 'MonCompte.php';" value="Retour"/>
	   </form>
	   
     </div>
   </div>
   
  </div>

  </fieldset>
  
<!--=======content================================-->



<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_12">
      <div class="socials">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
      </div>
     <p>Pet Club  &copy; 2013 | <a href="#">Privacy Policy</a> | Website  designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></p>
     
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>