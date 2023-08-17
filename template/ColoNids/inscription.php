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
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
    <script>
        function afficherNouvelle(id)
        {
            //alert(numero);
            var ajax = new XMLHttpRequest();
            ajax.open('GET', 'http://colonids.net/inscription-detail.php?id=' + id, true);

            ajax.onreadystatechange = function()
            {
                if(ajax.readyState === 4)
                {
                    reponse = JSON.parse(ajax.responseText);
                    cible = document.getElementById("zone-nouvelle-" + id);
                    cible.innerHTML = reponse[0].longueur + " - " + reponse[0].lettre + " - " + reponse[0].caractere+ " - " + reponse[0].sens;
                }
            }
            ajax.send("");
        }
    </script>

<script>
        function afficherNouvelle2(id)
        {
            //alert(numero);
            var ajax = new XMLHttpRequest();
            ajax.open('GET', 'http://colonids.net/inscription-infoMail.php?id=' + id, true);

            ajax.onreadystatechange = function()
            {
                if(ajax.readyState === 4)
                {
                    reponse = JSON.parse(ajax.responseText);
                    cible = document.getElementById("zone-nouvelle-" + id);
                    cible.innerHTML = "Votre mail doit être sous le format suivant: " + reponse[0].exemple;
                }
            }
            ajax.send("");
        }
    </script>
</header>


<div class="content pt1"><div class="ic">More Website Templates @ TemplateMonster.com - June 10, 2013!</div>
  <div class="container_12">
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Informations personnelles</h2>
        <form id="form" action="administration/recup_donnees.php" method="post">
          <div class="success_wrapper">
            <div class="success"><br>
              <strong></strong> 
          </div></div>
          <fieldset>

          <label> <p>Prénom</p>
       <input type="text" name="prenom">
       <br class="clear">
       <span class="error error-empty"></span></label><br>


       <label><p>Adresse</p>
       <input type="text" name="adresse">
       <br class="clear">
       <span class="error error-empty"></span></label><br>

       <label><p>Code Postal</p>
       <input type="text" name="code">
       <br class="clear">
       <span class="error error-empty"></span></label><br>

       <label> <p>Ville</p>
       <input type="text" name="ville">
       <br class="clear">
       <span class="error error-empty"></span></label><br>





        
        </div>

         <div class="grid_5 prefix_1">
       <h2 class="ic1">Mail et mot de passe</h2>
       <ul class="list l1">
       <label> <p>Mail</p>
       <input type="text" name="email">
       <a onmousedown="afficherNouvelle2(2)">
            Informations         
            </a>
            <br class="clear">
            <span class="error error-empty"></span></label><br>
          
          <div class="nouvelle" id="nouvelle-7">
            <p id="zone-nouvelle-2"></p>
          </div>

       <label> <p>Numero de téléphone</p>
        <input type="text" name="numerotel">
        <br class="clear">
        <span class="error error-empty"></span></label><br>

        <label> <p>Mot de passe</p>
            <input type="password" name="motdepasse">
            <a onmousedown="afficherNouvelle(1)">
            ?            
            </a>
            <br class="clear">
            <span class="error error-empty"></span></label><br>
          
          <div class="nouvelle" id="nouvelle-6">
            <p id="zone-nouvelle-1"></p>
          </div>

       </ul>
       <input  type="submit" value="S'inscrire">
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