<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once '/models/home/homeModels.php';

function home(){
	$idResult = recentsUsers();
	$idResult2 = recentsGroups();
	$idResult3 = listUsers();
	$idResult4 = listGroups();
	$idResult5 = sommeTresorerie();
	$idResult6 = settingsAffichage();
	require_once '/views/home/homeViews.php';
}

// function read($id){
// 	$idResult = detailsProduit($id);
// 	$idResult2 = commandeProduit($id);
// 	require_once '/views/produit/produitViewsDetails.php';
// }

// function add(){
// 	require_once '/views/produit/produitViewsAjout.php';
// }

// function del($id){
// 	if(isset($_POST['supp'])){
// 		$idResult = suppressionProduit($id);
// 	}else{
// 		$idResult = detailsProduit($id);
// 	}
// 	require_once '/views/produit/produitViewsSuppression.php';
// }

// function edit($id){
// 	$idResult = detailsProduit($id);
// 	require_once '/views/produit/produitViewsEdition.php';

// }
