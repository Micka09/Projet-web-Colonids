<?php session_start(); 

$objetPdo = new PDO('mysql:host=localhost;dbname=colonid','superadmin','H0l*kuY12M14/');

$pdoStat = $objetPdo->prepare('SELECT * from client where mail=?'); 

$pdoStat->bindValue(':mail', $_SESSION['email'], PDO::PARAM_STR);

$pdoStat->execute(array($_SESSION['email']));


while ($data = $pdoStat->fetch()) {

  $id=$data['id'];
  $prenom=$data['prenom'];
  $adresse=$data['adresse'];
  $mail=$data['mail'];
  $numero=$data['numero'];

  
}

$sql = "SELECT * FROM animal WHERE idProprietaire = :id";
$statement = $objetPdo->prepare($sql);

$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();


?>


<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Mon compte</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/form.css">
     <script src="js/jquery.js"></script>
     <script src="js/forms.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>     
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
          <script src="js/jquery.ui.totop.js"></script>

     <script>
    
    jQuery(document).ready(function() {
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body>
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="index.html"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li><a href="index.php">Accueil</a></li>
                   <li><a href="Services.html">Services</a></li>
                   <li><a href="Avis.html">Avis</a></li>
                   <li class="current"><a href="Contacts.html">Contacts </a></li>
                   <li><a href="administration/deconnexion.php">Deconnexion</a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>


<div class="content pt1"><div class="ic">Colonids & co 🐾 | Site réalisé par le groupe Colonids</div>
  <div class="container_12">
     <div class="grid_6">
      <h2>Vos infos</h2><br>
            <div class="map">
            <figure class="img_inner">
                          <img src= "images/chienMC.jpg"></img>
               </figure>
              <div class="btns"><a data-type="update" class="btn">Modifier mes informations</a><br class="clear">
              
              <a data-type="submit" class="btn" href="ajtAnimal.php">Ajouter un animal</a>
       <div class="clear"></div>
       </div>
                       
          </div>
     </div>
     <div class="grid_5 prefix_1">
       <h2 class="ic1"></h2>
       <form id="form">
       <div class="success_wrapper">
       <div class="success"><br>
       <strong></strong> </div></div>
       <fieldset>
       <label class="prenom">
       <input type="text" value= <?php echo $prenom?> readonly>
       <br class="clear">
	   </label>
     
       <label class="adresse">
       <input type="text" value= <?php echo $adresse?> readonly>
       <br class="clear">
       </label>
       <label class="email">
       <input type="text" value= <?php echo $mail ?> readonly>
       <br class="clear">
       </label>
       <label class="phone">
       <input type="tel" value= <?php echo $numero ?> readonly>
       </label>
       <br class="clear">
       <br class="clear">

       <?php
       if ($statement->rowCount() > 0) {
           echo "<table>";
           echo "<thead>";
           echo "<tr><th>Nom</th><th>Type</th><th>Genre</th><th>Race</th></tr>";
           echo "</thead>";
           echo "<tbody>";
             while ($row = $statement->fetch()) {
               echo "<tr>";
               echo "<td>" . $row["nom"] . "</td>";
               echo "<td>" . $row["type"] . "</td>";
               echo "<td>" . $row["genre"] . "</td>";
               echo "<td>" . $row["race"] . "</td>";
               echo "</tr>";
             }
             echo "</tbody>";
             echo "</table>";
            } else {
               echo "Aucun animal trouvé pour ce client.";
            }

          ?>
        
        
       
       <br class="clear">
       <div class="clear">
      


       
       
	  
       <br class="clear"></div>
	   
       </div></fieldset></form>
	   <div class="clear"></div>
        <div class="btns"><a data-type="reset" class="btn" href="index.php">Retour</a><a data-type="submit" class="btn" href="historique.html">Historique des services</a>

        
       
     </div>
   </div>
  </div>
<!--=======content================================-->



<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_12">
      <!--<div class="socials">
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
      </div>-->
     <p>Colonids & co 🐾 | Website made by Antonin, Clara and Mickaël</a></p>
     
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>

