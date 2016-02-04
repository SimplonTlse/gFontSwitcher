<?php

/*
recupere la clé font du tableau $_GET
ou renvoie une valeur par défaut
*/
function getFont() {
	if(isset($_GET['font'])) {
		return $_GET['font'];
	} 
	return 'Inconsolata';
}

function makeMenu(){
	$fonts = [
		'Inconsolata', 
		'Indie Flower', 
		'Roboto',
		'Great Vibes',
		'Cookie'
	];

	foreach($fonts as $font){
		echo '<a href="?font=' . $font . '">' . $font . '</a>';
	}
}