-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour cv-Loick
CREATE DATABASE IF NOT EXISTS `cv-Loick` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cv-Loick`;

-- Listage de la structure de la table cv-Loick. experiencepro
CREATE TABLE IF NOT EXISTS `experiencepro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poste` varchar(1024) DEFAULT NULL,
  `entreprise` varchar(1024) DEFAULT NULL,
  `lieu` varchar(1024) DEFAULT NULL,
  `annee` varchar(1024) DEFAULT NULL,
  `mois` varchar(1024) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Listage des données de la table cv-Loick.experiencepro : ~0 rows (environ)
/*!40000 ALTER TABLE `experiencepro` DISABLE KEYS */;
INSERT INTO `experiencepro` (`id`, `poste`, `entreprise`, `lieu`, `annee`, `mois`, `description`) VALUES
	(1, 'Employé étudiant', 'Leclerc Drive Rouffiac', 'Rouffiac-Tolosan(31)', '2019', 'Septembr', 'Préparation et livraison des commandes'),
	(2, 'Stagiaire', 'Airbus St-Eloi', 'Toulouse(31)', '2015', 'Janvier', 'Stage d observation de 3eme'),
	(3, 'Bénévole', 'Comité des fêtes de Roquesérière', 'Roquesérière(31)', '2019', 'Juillet', 'Service à la clientelle, préparation de la fête'),
	(4, 'Bénévole', 'Comité des fêtes de Roquesérière', 'Roquesérière(31)', '2019', 'Décembre', 'Animation du repas de noël');
/*!40000 ALTER TABLE `experiencepro` ENABLE KEYS */;

-- Listage de la structure de la table cv-Loick. formation
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diplome` varchar(1024) DEFAULT NULL,
  `etablissement` varchar(1024) DEFAULT NULL,
  `lieu` varchar(1024) DEFAULT NULL,
  `annee` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table cv-Loick.formation : ~1 rows (environ)
/*!40000 ALTER TABLE `formation` DISABLE KEYS */;
INSERT INTO `formation` (`id`, `diplome`, `etablissement`, `lieu`, `annee`) VALUES
	(1, 'Baccalauréat', 'Lycée Raymond Naves', 'Toulouse', '2019'),
	(2, 'Brevet des collèges', 'Collège Georges Brassens', 'Montastruc-la-conseillère', '2015');
/*!40000 ALTER TABLE `formation` ENABLE KEYS */;

-- Listage de la structure de la table cv-Loick. loisir
CREATE TABLE IF NOT EXISTS `loisir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loisir1` varchar(1024) DEFAULT NULL,
  `loisir2` varchar(1024) DEFAULT NULL,
  `loisir3` varchar(1024) DEFAULT NULL,
  `loisir4` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table cv-Loick.loisir : ~1 rows (environ)
/*!40000 ALTER TABLE `loisir` DISABLE KEYS */;
INSERT INTO `loisir` (`id`, `loisir1`, `loisir2`, `loisir3`, `loisir4`) VALUES
	(1, 'Musique (FLstudio)', 'Sport (VTT sportif)', 'Voyage (Pologne, Angleterre, Martinique, Espagne)', 'Jeux Vidéo');
/*!40000 ALTER TABLE `loisir` ENABLE KEYS */;

-- Listage de la structure de la table cv-Loick. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(1024) DEFAULT NULL,
  `prenom` varchar(1024) DEFAULT NULL,
  `date de naissance` varchar(1024) DEFAULT NULL,
  `adresse` varchar(1024) DEFAULT NULL,
  `mail` varchar(1024) DEFAULT NULL,
  `tel` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Listage des données de la table cv-Loick.user : ~0 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `nom`, `prenom`, `date de naissance`, `adresse`, `mail`, `tel`) VALUES
	(1, 'Odry', 'Loick', '17/01/2001', '3c route de moutou, castelmaurou', 'loick.odry@ynov.com', '+3375028....');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
