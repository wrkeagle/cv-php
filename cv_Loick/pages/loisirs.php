<div style="text-align: center;">
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cv-Loick;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT loisir1, loisir2, loisir3, loisir4 FROM loisir');

while ($donnees = $reponse->fetch()) {
    echo $donnees["loisir1"] . '<br /> <img src="assets/images/Capture.PNG" style="width: 576px; height: 309.6px; text-align: center;">';
    echo '<br/>' . $donnees["loisir2"] . '<br /> <img src="assets/images/VTT.png" style="width: 576px; height: 309.6px; text-align: center;">';
    echo '<br/>' . $donnees["loisir3"] . '<br /> <img src="assets/images/snowboard.jpg" style="width: 576px; height: 309.6px; text-align: center;">';
    echo '<br/>' . $donnees["loisir4"] . '<br /> <img src="assets/images/EFT.jpg" style="width: 576px; height: 309.6px; text-align: center;">';
    echo '<br />';
}

$reponse->closeCursor();
?>
</div>
