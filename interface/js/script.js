var $element = $("#element");
setInterval(function () {
  console.log("Réception des données...");
  $element.load("index.php #element");
  console.log("Données à jour");
}, 1000);
