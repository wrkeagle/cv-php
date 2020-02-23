<h1>Bienvenue dans l'éditeur!</h1>
<button> <a href="/index.php">Revenir à la page principale</a></button>
<div style="text-align: center;">
    <h2>Informations principales</h2>
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
<div style="text-align: center;">
<h2>Experience</h2>

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
</div>
<div style="text-align: center;">
<h2>Loisirs</h2>

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
    echo '<br/>' . $donnees["loisir2"] . '<br />';
    echo '<br/>' . $donnees["loisir3"] . '<br /> ';
    echo '<br/>' . $donnees["loisir4"] . '<br />';
    echo '<br />';
}

$reponse->closeCursor();
?>
</div>
<div style="text-align: center;">
<h2>Formation</h2>

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
</div>

