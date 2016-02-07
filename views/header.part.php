<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Test de la font : <?php echo getFont(); ?></title>
	<link rel="stylesheet" href="assets/css/style.css">
<link 
href='https://fonts.googleapis.com/css?family=<?php echo getFont(); ?>' 
rel='stylesheet' 
type='text/css'>
<!-- à part dans certains cas de figures précis, il faut éviter d'avoir une balise style dans votre head
car contrairement au feuilles de styles, il ne sera pas mis en cache.
Ca tombe bien, on a un de ces cas de figures ! -->
<style>
	.copy {
		font-family: <?php echo getFont(); ?>;
	}
</style>
</head>
<body>
