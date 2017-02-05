<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once '/models/users/usersModels.php';

function listU(){
	$idResult = listeUsers();
	$idResult6 = settingsAffichage();
	require_once '/views/users/usersViewsList.php';
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
