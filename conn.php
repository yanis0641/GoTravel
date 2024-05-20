<?php

// méthode connexion et requête 
function connexion_requete($req)
{
			// ouverture de connexion
	$db = new mysqli("localhost", "root", "root", "gotravel");
	//permet de forcer le type de caractères en UTF8
	$db->set_charset('utf8');

	if($db->connect_errno){
		die("erreur $db->connect_error");
	}
	else
	{
	$data = $db->query($req);
	return $data;
	}
	
}


?>
