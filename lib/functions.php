<?php

/*
recupere la clé font du tableau $_GET
ou renvoie une valeur par défaut
*/
function getFont() {
	//on test si la clé 'font' est définie dans le tableau $_GET
	if(isset($_GET['font'])) {
		// si oui on retourne immédiatemment la valeur associée, ce qui interrompt la fonction 
		return $_GET['font'];
	} 
	// et sinon on retourne une valeur par défaut
	return 'Inconsolata';
}

function makeMenu(){
	//le tableau de notre séléction de fonts
	$fonts = [
		'Inconsolata', 
		'Indie Flower', 
		'Roboto',
		'Great Vibes',
		'Cookie'
	];
	//on boucle sur le tableau précédent et on affiche un lien avec les bons paramètres
	foreach($fonts as $font){
		echo '<a href="?font=' . $font . '">' . $font . '</a>';
	}
}
