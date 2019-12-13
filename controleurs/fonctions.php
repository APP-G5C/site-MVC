<?php
function estUnEntier($int){
	return is_numeric($int);
}

function estUneChaine($chaine){
	if (empty($chaine)){
		return false;
	} else {
		return is_string($chaine);
	}
}

function estUnMotDePasse($chaine){
	if (empty($chaine) || strlen($chaine) < 10){
		return false;
	} else {
		return is_string($chaine);
	}
}