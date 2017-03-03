<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link href="css\bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css\bootstrap.css.map" media="screen" rel="stylesheet" type="text/css" />
<link href="includes/anto.css" media="screen" rel="stylesheet" type="text/css" />
<link href="includes/ant.css" media="screen" rel="stylesheet" type="text/css" />
<link href="includes/an.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="icon" type="image/png" href="image/logoantoine.png" />
  <!-- Basic stylesheet -->
<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  
<!-- Default Theme -->
<link rel="stylesheet" href="owl-carousel/owl.theme.css">
  
<!-- You can use latest version of jQuery  -->
<script src="jquery-1.9.1.min.js"></script>
  
<!-- Include js plugin -->
<script src="owl.carousel.js"></script>  
    
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Entreprise Antoine Couverture">
	<meta name="description" content="L'entreprise Antoine Couverture située à Saint Victor D'épine dans l'Eure est spécialisée dans la couverture, la charpente et la zinguerie.">
		<meta property="og:description" content="L'entreprise Antoine Couverture située à Saint Victor D'épine dans l'Eure est spécialisée dans la couverture, la charpente et la zinguerie.">
	<meta property="og:title" content="Entreprise Antoine Couverture">
	<meta property="og:type"  content="website">

  
            
        
    
		
  <title>Antoine Couverture</title>
    
</head>

<body>

<?php include("includes/header.php") ?>
    <div class="hidden-md-up row justify-content-center">
    <div class="col-4">
      <a href="tel:0634122977"><span class="badge badge-default"><h1>06.34.12.29.77</h1></span></a>
        </div></div>
<?php include("includes/menuresp.php") ?>
<div id="corp">
<div class="row justify-content-around">
    
<?php include("includes/menu.php") ?>

    
   
    
<aside class="col-7 col-offset-4 " >
    <br>
<?php include("includes/carousel.php") ?>
    

<br><br><br>

<p>L’entreprise Antoine Couverture est située à Saint Victor D'épine dans le canton de Brionne, arrondisssement de Bernay. L'entreprise réalise des travaux de couverture et de zinguerie aussi bien en neuf qu'en rénovation. Nous travaillons notamment l'ardoise, la tuile et le zinc. Nous pouvons également réaliser vos travaux de zinguerie destinée à l'évacuation des eaux pluviales. Nous intervenons dans un rayon de 150 klms aux alentours.</p><br><br>
N'hésitez pas à faire appel à nos services pour le démoussage de vos tuiles, la pose de votre Velux ou encore pour votre ramonage.<br><br>

Nous vous invitons à nous contacter pour de plus amples informations.<br><br>
    
    <h1>Zone d'intervention</h1>
 <div id="EmplacementDeMaCarte"></div>
		<noscript>
			<p>Attention : </p>
			<p>Afin de pouvoir utiliser Google Maps, JavaScript doit être activé.</p>
			<p>Or, il semble que JavaScript est désactivé ou qu'il ne soit pas supporté par votre navigateur.</p>
			<p>Pour afficher Google Maps, activez JavaScript en modifiant les options de votre navigateur, puis essayez à nouveau.</p>
		</noscript>
		<script>
			function initialisation(){
				var optionsCarte = {
					zoom: 7,
					center: {lat: 49.214610, lng: 0.595510},
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var maCarte = new google.maps.Map(document.getElementById("EmplacementDeMaCarte"), optionsCarte);
				var optionsCercle = {
					map: maCarte,
					center: maCarte.getCenter(),
					radius: 140000
				}
				var monCercle = new google.maps.Circle(optionsCercle);
			}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRl1Yvrahyin-4qJRtFnD7qee641e8A8w&callback=initialisation"></script><br>
    
    
    
    
    </aside>


</div>

</div>
<?php include("includes/footer.php") ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
        
        body
{ 
  margin:0;
  padding:0;
 background-image: url("image/tuinenor3.jpg");
  background-attachment:fixed;
    

  -webkit-background-size: 80%; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
}

        
        </style>
	</body>
		
		
</html>