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
<link rel="stylesheet" href="css/bootstrap.grid.css" />
<link rel="stylesheet" href="css/bootstrap.grid.min.css" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="icon" type="image/png" href="image/logoantoine.png" />
    
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Entreprise Antoine Couverture">
	<meta name="description" content="L'entreprise Antoine Couverture située à Saint Victor D'épine dans l'Eure est spécialisée dans la couverture, la charpente et la zinguerie.">
		<meta property="og:description" content="L'entreprise Antoine Couverture située à Saint Victor D'épine dans l'Eure est spécialisée dans la couverture, la charpente et la zinguerie.">
	<meta property="og:title" content="Entreprise Antoine Couverture">
	<meta property="og:type"  content="website">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.magnifier.js"></script>
            
        
    
		
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
    <h4>Cliquer sur les images pour les agrandir.</h4><br><br>
    
    
 <img style="cursor:pointer;" src="image\mini20160419_100736.jpg" alt="univers" src2="image\20160419_100736.jpg" onclick="changeTailleImg(this);" />   
    
 <img style="cursor:pointer;" src="image\mini20160515_171812.jpg" alt="univers" src2="image\20160515_171812.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini20160520_145912.jpg" alt="univers" src2="image\20160520_145912.jpg" onclick="changeTailleImg(this);" /> 
    
<img style="cursor:pointer;" src="image\mini20160728_074950.jpg" alt="univers" src2="image\20160728_074950.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini20170109_171947.jpg" alt="univers" src2="image\20170109_171947.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini_20151110_173004.jpg" alt="univers" src2="image\img_20151110_173004.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini20160823_205819.jpg" alt="univers" src2="image\20160823_205819.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini20160824_180156.jpg" alt="univers" src2="image\20160824_180156.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini20151031_191205.jpg" alt="univers" src2="image\IMG_20151031_191205.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini20151127_115824.jpg" alt="univers" src2="image\IMG_20151127_115824.jpg" onclick="changeTailleImg(this);" />
    
<img style="cursor:pointer;" src="image\mini20151029_105819.jpg" alt="univers" src2="image\IMG_20151029_105819.jpg" onclick="changeTailleImg(this);" />
</aside>
    
    
</div>

</div>
<style>
    
    </style>

<?php include("includes/footer.php") ?>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>
   function showGrandeImg(img){
            var srcGrande = img.src2;
            var srcPetite = img.src;
            img.src2 = srcPetite;
            img.src = srcGrande;
            img.taille = "grande";
                }
                 
                function showPetiteImg(img){
            var srcGrande = img.src;
            var srcPetite = img.src2;
            img.src2 = srcGrande;
            img.src = srcPetite;
            img.taille = "petite";
                }
                 
                function changeTailleImg(img){
                    if(!img.src2){
                        img.src2 = img.getAttribute("src2");
                    }
                    if(!img.taille || img.taille=="petite"){
                        showGrandeImg(img)
                    }else{
                        showPetiteImg(img)
                    }
                } 
    
    
    
    </script><style>
        
        body
{ 
  margin:0;
  padding:0;
 background-image: url("image/tuinenor2.jpg");
  background-attachment:fixed;
    

  -webkit-background-size: 80%; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
}

        
        </style>
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