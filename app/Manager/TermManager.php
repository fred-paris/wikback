<?php

namespace Manager;

//c'est ici quon viendra faire des fonctions pour d'autre requetes
//en s'inspirant de ce qui est fait dans le Manager, genre requete âr mot-clef
//findWithKeyword à la place de findAll par exemple

class TermManager extends \W\Manager\Manager {

	//pour aller chercher de façon random le nouveau "mot du jour"
	//cf. la ligne is_wotd dans une des tables de la bdd du dico-quebecois)
	//récupère le mot du jour actuel
	public function getCurrentWordOfTheDay()
	{
		$sql = "SELECT * FROM $this->table WHERE is_wotd = 1";
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetch();
	}
}

//c'est ici quon viendra faire des fonctions pour d'autre requetes
//en s'inspirant de ce qui est fait dans le Manager, genre requete âr mot-clef
//findWithKeyword à la place de findAll par exemple
