<?php 
$url = $_SERVER['PHP_SELF']; 
$reg = '#^(.+[\\\/])*([^\\\/]+)$#';
define('onestla', preg_replace($reg, '$2', $url)); 

if (onestla == 'index.php'){

	$title = 'Page d\'accueil | Auteur';
}
elseif (onestla == 'listeAuteur.php'){

	$title = 'Liste des Auteurs';

}
elseif (onestla == 'update.php'){
	$title = 'Modification Auteur';

}
elseif(onestla == 'delete.php'){
	$title = 'Suppression Auteur';
}
elseif(onestla == 'recherche.php'){
	$title = 'Recherche Auteurs';
}
elseif(onestla == 'formAjout.php'){
	$title = 'Ajout d\'un auteur';
}
elseif(onestla == 'upload.php'){
	$title = 'Formulaire Upload';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $title; ?></title>



	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

</head>