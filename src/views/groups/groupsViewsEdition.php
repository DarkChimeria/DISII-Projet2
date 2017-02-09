<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once 'includes/libs/Smarty.class.php';


$template = new Smarty();



if(!isset($_POST['update'])){
	$listeProduits = array();
	$i = 0;

	$row=$idResult->fetch(PDO::FETCH_ASSOC);
	$ref = $row['reference'];
	$design = $row['designation'];
	$descri= $row['descriptif'];
	$pu = $row['prix_unitaire_HT'];
	$qt = $row['quantite'];
	$stock = $row['stock'];
	$pp = $row['poids_piece'];



	$template->assign('title','Détails d\'un produit');

	$template->assign('ref', $ref);
	$template->assign('design', $design);
	$template->assign('descri', $descri);
	$template->assign('pu', $pu);
	$template->assign('qt', $qt);
	$template->assign('stock', $stock);
	$template->assign('pp', $pp);





}elseif(isset($_POST['update'])){

	$row=$idResult->fetch(PDO::FETCH_ASSOC);
	$ref = $row['reference'];
	$design = $row['designation'];
	$descri= $row['descriptif'];
	$pu = $row['prix_unitaire_HT'];
	$qt = $row['quantite'];
	$stock = $row['stock'];
	$pp = $row['poids_piece'];
	
	if($qt == $_POST['quantite'] && $descri == $_POST['descriptif'] && $pu == $_POST['prixunitaire'] && $stock == $_POST['stock']){

		Header( 'Location: index.php?gestion=produit&action=edit&id=' . $ref . '&success=2' );

	}else{

		$designation = $_POST['designation'];
		$quantite = $_POST['quantite'];
		$descriptif = $_POST['descriptif'];
		$prixunitaire = $_POST['prixunitaire'];
		$stock = $_POST['stock'];
		$piece = $_POST['piece'];

		if($descriptif == 'G'){

			$piece = '0';
		}else{
			$piece = $_POST['piece'];
		}


		$idResult = editionProduit($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece,$id);
	}
}




if(!empty($_GET['success'])){
	$template->assign('success', $_GET['success']);
}else{
	$template->assign('success', '0');
}




$template->display('templates/header.tpl');
$template->display('templates/produit/produitViewsEdition.tpl');
$template->display('templates/footer.tpl');