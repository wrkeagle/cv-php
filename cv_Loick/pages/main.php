<div class="center" style="text-align: center;">
    <img  style="width: 200px; height: 200px;" src="assets/images/IMG_20190720_024939_379.jpg">
</div>
<div style="text-align: center;">
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cv-Loick;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom,prenom,datedenaissance,adresse FROM user');

while ($donnees = $reponse->fetch()) {
    echo 'Nom: ' . $donnees["nom"] . '<br />';
    echo 'Prénom: ' .  $donnees["prenom"] . '<br />';
    echo 'Date de naissance: ' . $donnees["datedenaissance"] . '<br />';
    echo 'Adresse: ' . $donnees["adresse"] . '<br />';
    echo '<br />';
}

$reponse->closeCursor();
?>
</div>
