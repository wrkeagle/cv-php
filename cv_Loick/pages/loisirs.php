<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cv-Loick;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT loisir1, loisir2, loisir3, loisir4 FROM loisir');

while ($donnees = $reponse->fetch()) {
    echo $donnees["loisir1"] . '<br />';
    echo $donnees["loisir2"] . '<br />';
    echo $donnees["loisir3"] . '<br />';
    echo $donnees["loisir4"] . '<br />';
    echo '<br />';
}

$reponse->closeCursor();
?>