### Projet toilette connecté

+ Lancer un serveur Apache et se rendre sur la page PHP (index.php).
+ Injecter le code Arduino dans l'Arduino
+ Attention: vérifier le chemin du descripteur de fichier de l'Arduino dans le fichier `index.php` : `$port = fopen("/dev/cu.usbmodem1411", "w+");` (par exemple)
+ Lancer le script `read-data.sh` qui va permettre de lire le fichier `donnees.txt` qui reçoit et envoie les données entre l'Arduino et l'interface.
