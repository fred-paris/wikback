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
		$terms = $termManager->findAll("name", "DESC");

		// debug($terms);

		$this->show('term/show_all_terms', ['terms' => $terms]);
		//où terms est le nom de la variable; $terms est la valeur. très souvent 
		//on les nommera pareil
		//ce concept existe ds tous les systèmes de templates comme Twig ou Smarty
		// http://twig.sensiolabs.org/
	}

}

//ici plus c'est petit, plus les fonctions sont courtes, plus notre code est efficace