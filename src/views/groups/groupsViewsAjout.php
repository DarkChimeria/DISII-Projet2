<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once 'includes/libs/Smarty.class.php';


$template = new Smarty();

if(!isset($_POST['designation']) && !isset($_POST['descriptif'])){
	$designation = '';
	$descriptif = '';
}elseif (empty($_POST['designation'])){
	Header( 'Location: index.php?gestion=produit&action=add&success=1' );
	$template->assign('success', $_GET['success']);
}else{
	$designation = $_POST['designation'];
	$quantite = $_POST['quantite'];
	$descriptif = $_POST['descriptif'];
	$prixunitaire = $_POST['prixunitaire'];
	$stock = $_POST['stock'];

	if($_POST['piece'] == ""){
		$piece= '0';
	}else{
		$piece=$_POST['piece'];
	}

	$idResult = ajoutProduit($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece);
}

if(!empty($_GET['success'])){
	$template->assign('success', $_GET['success']);
}else{
	$template->assign('success', '0');
}

$template->display('templates/header.tpl');
$template->display('templates/produit/produitViewsAjout.tpl');
$template->display('templates/footer.tpl');