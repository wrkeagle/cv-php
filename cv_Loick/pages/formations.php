<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cv-Loick;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT diplome, etablissement, lieu, annee FROM formation');

while ($donnees = $reponse->fetch()) {
    echo $donnees["diplome"] . '<br />';
    echo $donnees["etablissement"] . '<br />';
    echo $donnees["lieu"] . '<br />';
    echo $donnees["annee"] . '<br />';
    echo '<br />';
}

$reponse->closeCursor();
?>