<html>
<head>
  <title>Toilette connecté</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

  <script src="pace.min.js"></script>
  <link rel="stylesheet" href="style-pace.css">

</head>
<body>
  <?php
  $port = fopen("/dev/cu.usbmodem1411", "w+");
  $file = fopen("donnees.txt","w+");
  $contents = fread($port, filesize("/dev/cu.usbmodem1411"));
  sleep(2);
  ?>
  <br>
  <?php
  // Turn Led ON ?>
  <div class="container center-align">
    <h1>Interface</h1>
    <div class="row">
        <form action="index.php" method="POST">
          <input type="hidden" name="turn" value="libre" />
          <input class="btn waves-effect waves-light btn-large green darken-1" type="Submit" value="Libre">
        </form>
        <?php
        // Turn Led OFF ?>
        <form action="index.php" method="POST">
          <input type="hidden" name="turn" value="occupe" />
          <input class="btn waves-effect waves-light btn-large deep-orange darken-2" type="Submit" value="Occupé">
        </form>
      </p>
      </div>
    </div>
  <?php
  echo $contents;
  if ($_POST['turn']=="libre"){
    echo '<h4 class="center-align">Le toilette est libre</h4>';
    fwrite($port, "ALLUME");
    fwrite($file, "ALLUME");
  }
  if ($_POST['turn']=="occupe"){
    echo '<h4 class="center-align">Le toilette est occupé</h4>';
    fwrite($port, "ETEINT");
    fwrite($file, "ETEINT");
  }
  fclose($port);
  fclose($file);
  ?>
</body></html>
