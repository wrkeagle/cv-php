<?php
	include 'SqlFunctions.php';
	include 'mesFunctionsTable.php';
	$action = $_GET["action"];

	if ($action == "DELETE") {
		$id = $_GET["id"];
	} else {
		$id = $_GET["id"];
		$nom = $_GET["nom"];
		$prenom = $_GET["prenom"];
		$age = $_GET["age"];
		$adresse = $_GET["adresse"];
		
	}
	

	if ($action == "CREATE EXP") {
		createExp($poste, $entreprise, $lieu, $annee, $mois , $description);

		echo "Nouvelle experience ajoutée <br>";
		echo "<a href='http://cv_loick.test/index.php?page=exp'>Mes experiences</a>";
		
	}
    if ($action == "CREATE Form") {
    createForm($diplome, $etablissement, $lieu, $annee);

    echo "Nouvelle formation ajoutée <br>";
    echo "<a href='http://cv_loick.test/index.php?page=formations'>Mes Formations</a>";

}
    if ($action == "CREATE Loisir") {
    createLoisir($loisir1, $loisir2, $loisir3, $loisir4);

    echo "Nouvelle activité ajoutée <br>";
    echo "<a href='http://cv_loick.test/index.php?page=loisirs'>Mes Loisirs</a>";

}
	
	if ($action == "UPDATE User") {
        updateUser($id, $adresse);
		echo "user update <br>";
		echo "<a href='http://cv_loick.test/index.php?page=main'>Page principale</a>";
	}
    if ($action == "UPDATE EXP") {
    updateEXP($poste, $entreprise, $lieu, $annee, $mois, $description);
    echo "exp update <br>";
    echo "<a href='http://cv_loick.test/index.php?page=exp'>Mes Experiences</a>";
}
    if ($action == "UPDATE FORM") {
        updateForm($diplome, $etablissement, $lieu, $annee);
    echo "Formation update <br>";
    echo "<a href='http://cv_loick.test/index.php?page=formations'> Mes Formation</a>";
}
    if ($action == "UPDATE Loisir") {
    updateLoisir($loisir1, $loisir2, $loisir3, $loisir4);
    echo "Loisir update <br>";
    echo "<a href='http://cv_loick.test/index.php?page=loisirs'>Mes loisirs</a>";
}
	if ($action == "DELETE") {
		deleteUser($id);
		echo "user delete <br>";
		echo "<a href='index.php'>Liste des utilisateurs</a>";
	}
if ($action == "DELETE User") {
    deleteUser($adresse);
    echo "user update <br>";
    echo "<a href='http://cv_loick.test/index.php?page=main'>Page principale</a>";
}
if ($action == "DELETE EXP") {
    deleteEXP($poste, $entreprise, $lieu, $annee, $mois, $description);
    echo "exp update <br>";
    echo "<a href='http://cv_loick.test/index.php?page=exp'>Mes Experiences</a>";
}
if ($action == "DELETE FORM") {
    deleteForm($diplome, $etablissement, $lieu, $annee);
    echo "Formation update <br>";
    echo "<a href='http://cv_loick.test/index.php?page=formations'> Mes Formation</a>";
}
if ($action == "DELETE Loisir") {
    deleteLoisir($loisir1, $loisir2, $loisir3, $loisir4);
    echo "Loisir update <br>";
    echo "<a href='http://cv_loick.test/index.php?page=loisirs'>Mes loisirs</a>";
}

	
?>