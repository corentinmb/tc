<?php
$desc_fichier_arduino = '/dev/cu.usbmodem1411';

if(file_exists($desc_fichier_arduino))
  $etat = file_get_contents($desc_fichier_arduino, NULL, NULL, NULL, 2);
else
  $etat = '1';

function changerCouleur(){
  global $etat;
  if(strpos($etat,'1') !== false){
    echo "orange";
  }else if(strpos($etat,'0') !== false){
    echo "green";
  } else {
    echo "red";
  }
}

function changerTexte(){
  global $etat;
  if(strpos($etat,'1') !== false) { // toilette occupé
    echo "Occupé";
  } else if (strpos($etat,'0') !== false){ // toilette disponible
    echo "Disponible";
  } else {
    echo "Arduino non trouvé";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Toilette connecté</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Toilette connecté</a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h2 class="header center light-blue-text">Est-ce que le toilette est disponible ?</h2>
      <div class="row center">
        <h5 class="header col s12 light">Statut du toilette:</h5>
      </div>
      <div id="element" class="row center">
        <a href="#" class="btn-large waves-effect waves-light <?php changerCouleur(); ?>" >
          <?php changerTexte(); ?>
        </a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">
    </div>
    <br><br>

    <div class="section">

    </div>
  </div>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">L'équipe</h5>
          <p class="grey-text text-lighten-4">Richard MONTOUX - Corentin MOREAU - Simon RUIZ - Kevin VIBERT </p>


        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      EPSI <a class="orange-text text-lighten-3" href="#">Bordeaux</a>
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/script.js"></script>

  </body>
</html>
