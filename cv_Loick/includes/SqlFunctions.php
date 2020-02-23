<?php 
	
	function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "";
			$pdo = new PDO('mysql:host=localhost;dbname=cv-Loick', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	
	// récupere les données de la page principale
	function getUser() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from user';
		$rows = $con->query($requete);
		return $rows;
	}
    // récupere les données de la page Loisir
    function getLoisirs() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from loisir';
    $rows = $con->query($requete);
    return $rows;
}
    // récupere les données de la page Formation
    function getFormation() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from formation';
    $rows = $con->query($requete);
    return $rows;
}
    // récupere les données de la page Expérience
    function getExp() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from exp';
    $rows = $con->query($requete);
    return $rows;
}


	// ajouter une experience en plus
	function createExp($poste, $entreprise, $lieu, $annee, $mois , $description) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO exp (poste, entreprise, lieu, annee, mois, description) 
					VALUES ('$poste', '$entreprise', '$lieu' ,'$annee', '$mois', '$description')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
    // ajouter une formation en plus
    function createForm($diplome, $etablissement, $lieu, $annee) {
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO formation (diplome, etablissement, lieu, annee) 
					VALUES ('$diplome', '$etablissement', '$lieu' ,'$annee')";
        $con->exec($sql);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    }
    // ajouter un Loisir en plus
    function createLoisir($loisir1, $loisir2, $loisir3, $loisir4) {
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO loisir (loisir1, loisir2, loisir3, loisir4) 
					VALUES ('$loisir1', '$loisir2', '$loisir3' ,'$loisir4')";
        $con->exec($sql);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    }

	//lire l'experience
	function readExp($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from exp where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
	}
    function readForm($id) {
    $con = getDatabaseConnexion();
    $requete = "SELECT * from formation where id = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}
    function readLoisir($id) {
    $con = getDatabaseConnexion();
    $requete = "SELECT * from loisir where id = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}

	function updateUser($id, $adresse) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE user set 
						adresse = '$adresse' 
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
    function updateEXP($poste, $entreprise, $lieu, $annee, $mois, $description) {
    try {
        $con = getDatabaseConnexion();
        $requete = "UPDATE exp set 
						poste = '$poste'
						entreprise = '$entreprise'
						lieu = '$lieu'
						annee ='$annee'
						mois = '$mois'
						description = '$description'
						where id = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
    function updateForm($diplome, $etablissement, $lieu, $annee) {
    try {
        $con = getDatabaseConnexion();
        $requete = "UPDATE formation set 
						diplome = '$diplome'
						etablissement = '$etablissement'
						lieu = '$lieu'
						annee ='$annee'
						where id = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
function updateLoisir($loisir1, $loisir2, $loisir3, $loisir4) {
    try {
        $con = getDatabaseConnexion();
        $requete = "UPDATE loisir set 
						loisir1 = '$loisir1'
						loisir2 = '$loisir2'
						loisir3 = '$loisir3'
						loisir4 = '$loisir4'
						where id = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

	// supprime un user
	function deleteExp($id) {
		try {
                $con = getDatabaseConnexion();
                $requete = "SELECT * from exp where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}
    function deleteForm($id) {
    try {
        $con = getDatabaseConnexion();
        $requete = "SELECT * from formation where id = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
    function deleteLoisir($id) {
    try {
        $con = getDatabaseConnexion();
        $requete = "SELECT * from loisir where id = '$id' ";
        $stmt = $con->query($requete);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

	


 ?>