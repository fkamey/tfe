<?php

if(isset($_POST) && isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['nom']) && isset($_POST['histoire'])
	 && isset($_POST['ingredient1']) && isset($_POST['etape1']) && isset($_POST['ingredient2']) && isset($_POST['etape2']) && isset($_POST['ingredient3']) && isset($_POST['etape3'])){

	if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['nom']) && !empty($_POST['histoire']) && !empty($_POST['ingredient1']) && !empty($_POST['etape1']) && !empty($_POST['ingredient2']) && !empty($_POST['etape2']) && !empty($_POST['ingredient3']) && !empty($_POST['etape3'])){

		$destinataire = "camilleflorquin@gmail.com";
		$sujet = "Ajout de fête";
		$message = "Nom : ".$_POST['name']."\r\n";
		$message .= "Adresse email : ".$_POST['mail']."\r\n";
		$message .= "Titre : ".$_POST['nom']."\r\n";
		$message .= "Histoire : ".$_POST['histoire']."\r\n";
		$message .= "ingredient1 : ".$_POST['ingredient1']."\r\n";
		$message .= "etape1 : ".$_POST['etape1']."\r\n";
		$message .= "ingredient2 : ".$_POST['ingredient2']."\r\n";
		$message .= "etape2 : ".$_POST['etape2']."\r\n";
		$message .= "ingredient3 : ".$_POST['ingredient3']."\r\n";
		$message .= "etape3 : ".$_POST['etape3']."\r\n";


		$entete = 'From: '.$_POST['mail(to, subject, message)']."\r\n".
        	'Reply-To: '.$_POST['mail']."\r\n".
		'X-Mailer: PHP/'.phpversion();

		if (mail($destinataire,$sujet,$message,$entete)){

			 header('Location: contact.php'); 

		} else { 
       		
       		$alerte = '	Echec de envoi.'; 
    	} 
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, width=device-width">
  
  <meta name="description" content="Idées pour créer des fêtes faciles et pas chers pour enfants.">
  
  
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:200,400,700">
  
	<link rel="icon" type="image/png" href="images/favicon.ico" />
 
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/custom.css" />
    
  <title>Yummy! - Et toc !</title>
  

    <!-- caption-->
       <link rel="stylesheet" type="text/css" href="css/component.css" />

  
   <!-- Slider-->
 
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

  
</head>





      <header>

	      <nav id="principal">


	      <div id="centrer">
          <a href="index.html" id="logo"><img src="images/logo.png" width="124" height="56"/></a>
        
          <div class="yum-wrap">

            <a href="index.html" class="nav-size nav-link" title="Les Fêtes">Les Fêtes</a>
            <a href="astuces.html" class="nav-size nav-link" title="Les Astuces">Les Astuces</a>
        
            <a href="contact.php" class="yummly-login-sheet btn-tertiary" id="contact-phone">Propose ta propre fête</a>

            
          </div>
        
        </div>
        
        

		
		  </nav>
		</header>



<body>
    
	
<div id="content" style="height:1300px; margin-top:100px;">

	    <div class="y-grid">
				      
			<div id="entete">
				
				<div class="entete-wrapper">
						
					<div class="titre-entete">
						<div class="title">Propose ta propre fête</div>
							
					</div>
						
					<div class="img-entete">
							
						<img src="images/entete/contact.jpg" class="bigimage">
			
					</div>
				</div>
					
					
					
			</div>	
		</div>





	<form method="post" action="" class="formulaire">
	   	
		<h4 class="title">Ma propre fête</h4>
		<input type="text" class="mail" name='name' placeholder="Quel est ton prénom et ton nom">
		<input type="text" class="mail" name='mail' placeholder="Donne ton email" style="margin-left:56px;">
	    
	    <input type="text" class="name" name='nom' placeholder="Donne un titre à ta fête" style="margin-top:0;">


	   		<textarea class="histoire" name='histoire' placeholder="Décris ta fête, raconte son histoire"></textarea>
	    
<div id="textrct">

	    <div class="inputrecette stop">

	    	<p class="contacter">Partage ta recette n°1</p>
	    	
	    	<textarea class="texte" name='ingredient1' placeholder="Les ingrédients"></textarea>
	    	
	    	<textarea class="texte" name='etape1' placeholder="Les étapes de la recette"></textarea>
	    	
	    	<div  class="photo">
	    		<input type="file" name="photo"/>
	    			<p>Télécharge une photo<p>
	    	</div>

		</div>

			<div id="btnplus"></div>


		<div class="inputrecette deuxieme-input">
	    	
	    		<p class="contacter">Partage ta recette n°2</p>
	   			
	   			<textarea class="texte" name='ingredient2' placeholder="Les ingrédients"></textarea>
	    		
	    		<textarea class="texte" name='etape2' placeholder="Les étapes de la recette"></textarea>
	    		
	    		<div  class="photo">
	    			<input type="file" name="photo"/>
	    			<p>Télécharge une photo<p>
	    		</div>
		</div>

			<div id="btnplus-2"></div>

	    
	    <div class="inputrecette troisieme-input">
	  		
	  		<p class="contacter">Partage ta recette n°3</p>
	   		
	   		<textarea class="texte" name='ingredient3' placeholder="Les ingrédients"></textarea>
	    	
	    	<textarea class="texte" name='etape3' placeholder="Les étapes de la recette"></textarea>
	    	
	    	<div  class="photo">
	    		<input type="file" name="photo"/>
	    		<p>Télécharge une photo<p>
	    	</div>

		</div>

	</div>



	    <input type="submit" name="submit" class="submit-c" value="Envoyer"/>

	</form>






    

<footer>
		<div id="footer-container">
			<div id="taches-bg"></div>
				<div class="footer-col-first">
					<h3>Qui sommes-nous?</h3>
					<ul>
						<li><a href="#">Le Projet Yummy!</a></li>
						<li style="width:150px;"><a href="contact.php">Proposer un idée</a></li>
						<li><a href="#">Nous Contacter</a></li>
					</ul>
				</div><!-- end footer col -->
				
				<div class="footer-col">
					<h3>Restez connecté!</h3>
					<ul>
						<li>
							<a href="https://www.facebook.com/yummyetoc" target="_blank" class="facebook">Page Facebook</a>
							<a href="https://www.facebook.com/yummyetoc" target="_blank"><p class="facebook">Retrouvez-nous sur <span class="bold">Facebook</span>.</p></a>
						</li>
						<li>	
							<a href="https://www.youtube.com/yummyetoc" target="_blank" class="youtube">Page Youtube</a>
							<a href="https://www.youtube.com/yummyettoc" target="_blank"><p class="facebook">Les tutos sur <span class="bold">Youtube</span>.</p></a>
						</li>
					</ul>	
				</div><!-- end footer col -->
				
				<div class="footer-col-last">


					<form action="#" method="post">
						<label for="newsletter">Newsletter</label>
						<p>Inscrivez-vous à notre newsletter pour recevoir nos dernières fêtes :</p>
						<input type="email" id="newsletter" placeholder="ex: martindupuis@mail.com">
						<input type="submit" value="Go">
					</form>
					
   				 </div>

				</div><!-- end footer col --> 
				<ul id="credits">
					<li><a href="#">Mentions légales</a></li>
					<li>© 2013-2014 Created by Camille Florquin, tous droits réservés</li>
				</ul>
			</div><!-- end footer container -->
		</div>

</footer>

        
   
  
  
  
  

    </div>
    



     	<script type='text/javascript' src='js/jquery.min.js'></script>


     			<script type='text/javascript' src='js/changeRecette.js'></script>


		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>


		
		  </body>
</html>

<!-- Localized -->