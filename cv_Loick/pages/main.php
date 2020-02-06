
<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cv-Loick;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom,prenom,datedenaissance,adresse FROM user');

while ($donnees = $reponse->fetch()) {
    echo $donnees["nom"] . '<br />';
    echo $donnees["prenom"] . '<br />';
    echo $donnees["datedenaissance"] . '<br />';
    echo $donnees["adresse"] . '<br />';
    echo '<br />';
}

$reponse->closeCursor();
?>