<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once '/models/login/loginModels.php';

function login(){
	
	require_once '/views/login/loginViews.php';
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
