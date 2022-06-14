<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Company</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<header>
		<h1>MyCandy</h1>
		<!-- hieronder wordt het menu opgehaald. -->
		<?php
			  require_once("dbconnect.php");
			  session_start();
			  echo "is ingelogd als " . $_SESSION["surname"] . " ". $_SESSION["givenname"] . " ". $_SESSION["idclient"];
			  include "navadmin.html";
  
		
		
		?>
	</header>

<body>  
	
 
	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
 	<main>	
		  <img class="centreer" src="img/logo.PNG" alt="main page image" width="1000px" height="500px"> 
		  <p> Welkom op de beheer pagina van MyCandy</p> 
		  <p>
			  hier kun je spullen toevoegen,Verwijderen, en producten op inactief zetten
		  </p>
		  <p>
			  Om u een indruk te geven van onze producten, ziet u hieronder een overzicht van
			  de eerste zes van onze producten.
		  </p>
		  <p>
			  <?php
			  // in onderstaande php source worden 6 producten op scherm getoond
			  include "zesproducten.php";
			  ?>
		  </p>
	</main>
	
</body>
</html>