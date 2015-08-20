<?php
	
	$w_routes = array(
		['GET', '/admin/termes', 'Term#showAll', 'show_all_terms'],
		
		//pour supprimer on a besoin d'avoir ds l'url l'id du terme à effacer
		['GET', '/admin/termes/suppression/[i:id]/', 'Term#delete', 'delete_term'],
		
		//pour modifier/éditer
		['GET|POST', '/admin/termes/modification/[i:id]/', 'Term#edit', 'edit_term'],
		
		//change le mot du jour
		['GET', '/admin/termes/nouveau-mdj/[i:id]/', 'Term#changeWotd', 'change_wotd'],
	);