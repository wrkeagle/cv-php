  <?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cv-Loick;charset=utf8', "root", '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT poste, entreprise, lieu, annee, mois, description FROM exp');

while ($donnees = $reponse->fetch()) {
	echo $donnees["poste"] . '<br />';
	echo $donnees["entreprise"] . '<br />';
    echo $donnees["lieu"] . '<br />';
    echo $donnees["annee"] . '<br />';
    echo $donnees["mois"] . '<br />';
    echo $donnees["description"] . '<br />';
	echo '<br />';
}

$reponse->closeCursor();
?>
