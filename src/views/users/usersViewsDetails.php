<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once 'includes/libs/Smarty.class.php';


$template = new Smarty();

// $listeProduits = array();
// $i = 0;

$row=$idResult->fetch(PDO::FETCH_ASSOC);
$row2=$idResult2->fetch(PDO::FETCH_ASSOC);
$ref = $row['reference'];
$design = $row['designation'];
$descri= $row['descriptif'];
$pu = $row['prix_unitaire_HT'];
$qt = $row['quantite'];
$stock = $row['stock'];
$pp = $row['poids_piece'];
$qtdemandee = $row2['quantite_demandee'];


$template->assign('title','Détails d\'un produit');

$template->assign('ref', $ref);
$template->assign('design', $design);
$template->assign('descri', $descri);
$template->assign('pu', $pu);
$template->assign('qt', $qt);
$template->assign('stock', $stock);
$template->assign('pp', $pp);
$template->assign('qtdemandee', $qtdemandee);


$template->display('templates/header.tpl');
$template->display('templates/produit/produitViewsDetails.tpl');
$template->display('templates/footer.tpl');