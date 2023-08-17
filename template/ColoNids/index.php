<?php session_start(); 

if(empty($_SESSION['email'])){ 

  $menu_html = '<li><a href="Connexion.php">Connexion</a></li>';

}
else{

  $menu_html = '<li><a href="MonCompte.php">Mon Compte</a></li>';


}


?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Accueil</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/slider.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
     
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/tms-0.4.1.js"></script>
     <script src="js/jquery.ui.totop.js"></script>

     <script>
      $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:true,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
      
      
      
          $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 3,
       max: 3},
height: 'auto',
 width: 300,

    }, responsive: true, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: true, onTouch: true}});
    
    
    } );   
    
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
     <body  class="page1">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="index.php"><img src="images/LOGOC.png" ></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="index.php">Accueil</a></li>
                   <li><a href="Services.html">Services</a></li>
                   <li><a href="Avis.html">Avis</a></li>
                   <li><a href="Contacts.html">Contacts </a></li>
                    <?php echo $menu_html; ?>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>




<div > Bonjour et bienvenue sur notre site ! <?php if(!empty($_SESSION['email'])){ echo $_SESSION['email'];}?> </div>

  
  

<!--==============================Content=================================-->

<div class="top_block">
 <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide1.jpg" alt="">
            <div class="banner"> Venez découvrir les <span>services</span> pour vos <i> CHIENS </i><p></p></div>
          </li>
          <li><img src="images/slide.jpg" alt="">
            <div class="banner"> Venez découvrir les <span>services</span> pour vos <i> CHATS </i><p>...</p></div>
          </li>
          <li><img src="images/slide2.jpg" alt="">
            <div class="banner"> Venez découvrir les <span>services</span> pour vos <i> OISEAUX </i><p> </p></div>
          </li>
		  <li><img src="images/slide2.jpg" alt="">
            <div class="banner"> Venez découvrir les <span>services</span> pour vos <i> RONGEURS </i><p></p></div>
          </li>
          <li><img src="images/slide2.jpg" alt="">
            <div class="banner"> Venez découvrir les <span>services</span> pour vos <i> ANIMAUX SAUVAGES </i><p></p></div>
          </li>
        </ul>
      </div>
    </div>
  </div>

 </div> 
 <div class="page1_block">
   <div class="container_12">
     <div class="grid_6">
      <h2>Bienvenue sur notre site</h2><br>
      <img src="images/page1_img5.jpg" alt="" class="img_inner fleft">
      <div class="extra_wrapper style1"><p class="text1"><a href="APropos.html">Cliquez ici</a> pour en savoir plus sur nous</p>
      Pour toutes questions contactez-nous!!

      </div>
      <div class="clear"></div>
      Retrouvez sur notre site tous les services que nous pouvons offrir ainsi que toutes les actualités nous concernant<br>
      <a href="Services.html" class="btn">En savoir plus</a>
     </div>
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Les actualités</h2>
       <ul class="list">
         <li>
           <span>
             <time datetime="2013-01-01">18<span>OCT.</span></time></span>
             <div class="extra_wrapper">
           <div class="col1"><a href="#">Concours</a><time datetime="2013-01-01">Octobre 18.10.2022</time></div>Tentez de gagner une prestation gratuite grace a notre grand tirage au sort !</div>
         </li>
         <li>
           <span class="cnt">
             <time datetime="2013-01-01">20<span>DÉC.</span></time></span> <div class="extra_wrapper">
           <div class="col1"><a href="#">PROMOTIONS DE NOEL</a><time datetime="2013-01-01">Décembre 20.12.2022</time></div> Venez profiter de nos offres spéciales noel </div>
         </li>
         <li>
           <span>
             <time datetime="2013-01-01">14<span>JAN.</span></time></span> <div class="extra_wrapper">
           <div class="col1"><a href="#">Aimez-vous les animaux ?</a><time datetime="2013-01-01">Janvier 14.01.2023</time></div> Nous vous proposons des activités afin d'en savoir plus sur vos animaux  </div>
         </li>
       </ul>
     </div>
   </div>
 </div>
<!--=======content================================-->
<!--
<div class="content page1"><div class="ic">More Website Templates @ TemplateMonster.com - June 10, 2013!</div>
  <div class="container_12">
  <div class="grid_12">
    <a href="#" class="next"></a><a href="#" class="prev"></a>
    <h2>Pets for Adoption</h2>
  </div>
  <div class="clear"></div>
<ul class="carousel1">
	<li class="grid_4">
		<img src="images/carousel1_img1.jpg" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Praesent quis orcidiam viverralopr </a></p>Raes quis orci eget diam viverralopr con equat. Fusce sagit quam ihui hyhy kolo opirlo pulvinarhjkjo.
		</div>
	</li>
	<li class="grid_4">
		<img src="images/carousel1_img2.jpg" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
	<li class="grid_4">
		<img src="images/carousel1_img3.jpg" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Tyeraesent quis hojo rcieget iam iverralji.</a></p>Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk equat. Usce sagittis ki quam ihui hyhy opirp. 
		</div>
	</li>
	<li class="grid_4">
		<img src="images/carousel1_img4.jpg" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
	<li class="grid_4">
		<img src="images/carousel1_img5.jpg" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
	<li class="grid_4">
		<img src="images/carousel1_img6.jpg" alt="" class="img_inner fleft">
		<div class="extra_wrapper pad1">
			<p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit.
		</div>
	</li>
</ul>
  </div>
</div>
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_6">
      <h2>Pet Care Tips </h2><br>
      Praesent quis orci eget diam viverra consequat. Fusce sagittis quam in pulvinar sollicitudin velit velit cursus nibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis posuere velit a convallis neque ullamcorper quis. Integer posuere ipsum eu risus sollicitudin nec varius erat luctus. Fusce fringilla erat ac urna pe llentesque congue. Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Vivamus est quam dapibus ullamco rper imperdiet nec, euismod ut arcu. Nulla facilisi. Etiam mauris lorem pulvinar vel con sequat ut pretium ac erat. Morbi facilisis elit eu nisl blandit ac blandit enim faucibus. Praesent quis orci eget diam viverra consequat. Fusce sagittis. 
    </div>
    <div class="grid_4 prefix_2">
      <h2 class="ic1">Any Question?</h2>
      <img src="images/page1_img4.jpg" 
       alt="" class="fleft img_inner">
       <div class="extra_wrapper">
         <div class="cont">
           Call Us Free:  
           <span>+1 800 559 6580</span>
         </div>
       </div>
       <div class="clear"></div>
       Nunc fringilla, diam sit amet adipi scing bibendum turpis velit feugiat urna, et pharetra neque nisi ac nunc. Viv amus est quam dapibus ullamco rper imperdiet nec euismod ut arcu. Nulla facilisi. Etiam mauris. 
    </div>
  </div>
</div>-->
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
     <p>Colonids & co 🐾 | Website made by Antonin, Clara and Mickaël</p>
     
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>