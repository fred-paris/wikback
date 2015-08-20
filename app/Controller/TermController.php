<?php

namespace Controller;

use \W\Controller\Controller;

class TermController extends Controller
{

	//affiche tous les termes
	public function showAll()
	{
		//créé une instance de notre TerMamanager
		$termManager = new \Manager\TermManager();
		// print_r(get_class_methods($termManager));
		$terms = $termManager->findAll("name", "ASC");

		// debug($terms);

		$this->show('term/show_all_terms', ['terms' => $terms]);
		//où terms est le nom de la variable; et $terms est la valeur. 
		//très souvent on les nommera pareil
		//ce concept existe ds tous les systèmes de templates comme Twig ou Smarty
		// http://twig.sensiolabs.org/
	}

	//on rajoute
	public function delete($id)
	{
		$termManager = new \Manager\TermManager();
		$termManager->delete($id);

		$this->redirectToRoute('show_all_terms');
	}

	//on rajoute
	public function edit($id){
		//récupérer en bdd le terme à modifier grâce à la 
		// méthode ->find() du (Manager >) TermManager et à l'id
		$termManager = new \Manager\TermManager();

		//si le formulaire est soumis...($_POST n'est pas vide)
		if(!empty($_POST)){

			// debug($_POST);
			// die();

			//si je ne fais pas confiance au framework, on peut 
			//ajouter un trim pour purifier ses données
			$name = trim($_POST['name']);

			//valider au moins un minimum..
			if(strlen($name) > 1){

				//array contenant les noms des colonnes à modifier
				//et les nouvelles valeurs
				$data = [
					"name" => $name,
					"modifiedDate" => date("Y-m-d H:i:s"),
				];

				//sauvegarder les modifications avec la 
				//méthode ->update() du TermManager
				$termManager->update($data, $id);

				$this->redirectToRoute('show_all_terms');
			}
		}

	//récupére en bdd le terme à modifier grâce à la 
	// méthode ->find() du (Manager >) TermManager et à l'id
	$term = $termManager->find($id);

	//passer le terme à la vue, afin de rendre la variable disponible
	//notamment pour préremplir le form
	$this->show('term/edit_term', ["term" => $term]);
	}

	//on rajoute
	public function changeWotd($id)
	{
		$termManager = new \Manager\TermManager();

		//sélectionner le mot du jour actuel
		$wotd = $termManager->getCurrentWordOfTheDay();
		// debug($wotd);

		//faire un update sur l'ancien mot du jour pour le mettre à 0
		$termManager->update(['is_wotd' => 0], $wotd['id']);

		//faire un update sur le nouveau terme pour le mettre à 1
		$termManager->update(['is_wotd' => 1], $id);

		//rediriger vers la page d'accueil
		$this->redirectToRoute('show_all_terms');
	}
}

//ici plus c'est petit, plus les fonctions sont courtes, plus notre code est efficace