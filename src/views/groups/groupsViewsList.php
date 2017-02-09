<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once 'includes/libs/Smarty/Smarty.class.php';


$template = new Smarty();

$listeGroups = array();
$i = 0;

// while($row=$idResult->fetch(PDO::FETCH_ASSOC)){
// 	$listeProduits[$i]['reference'] = $row['reference'];
// 	$listeProduits[$i]['designation'] = $row['designation'];
// 	$listeProduits[$i]['descriptif'] = $row['descriptif'];
// 	$listeProduits[$i]['prix_unitaire_HT'] = $row['prix_unitaire_HT'];
// 	$i++;
// }
$nblignes = $idResult->rowCount();
$template->assign('title','Liste des groupes');
$template->assign('fil', 'Liste des groupes');
$template->assign('nblignes',$nblignes);



if(!empty($_GET['success'])){
	$template->assign('success', $_GET['success']);
}else{
	$template->assign('success', '0');
}

if(isset($_POST['nbAafficher']) == 10){

$nbGroups = 10;

}elseif(isset($_POST['nbAafficher']) == 15){

	$nbGroups = 15;
	
}elseif(isset($_POST['nbAafficher']) == 20){

	$nbGroups = 20;

}else{

	$nbGroups = 10;

}



$nbpages = ceil($nblignes / $nbGroups);
$template->assign('nbpages', $nbpages);

if (isset($_GET['page']))
{
    $page = $_GET['page']; // On récupère le numéro de la page indiqué dans l'adresse (livredor.php?page=4)
}
else // La variable n'existe pas, c'est la première fois qu'on charge la page
{
    $page = 1; // On se met sur la page 1 (par défaut)
}
 
// On calcule le numéro du premier message qu'on prend pour le LIMIT de MySQL
$premierMessageAafficher = ($page - 1) * $nbGroups;


$idResult3 = listeCountLimitGroups($premierMessageAafficher,$nbGroups);
$pagination = array();
$a = 0;
while($row=$idResult3->fetch(PDO::FETCH_ASSOC)){
	$pagination[$a]['group_id'] = $row['group_id'];
	$pagination[$a]['group_name'] = $row['group_name'];
	$pagination[$a]['group_description'] = $row['group_description'];
	$pagination[$a]['group_activity'] = $row['group_activity'];
	$a++;
}

$numero = array();

for ($b = 1 ; $b <= $nbpages ; $b++)
{
	$numero[] = $b;
}
$template->assign('numero', $numero);

$template->assign('pagination', $pagination);

// AFFICHAGE PARAMETRES
$idResult7 = settingsAffichage();
$row2=$idResult7->fetch(PDO::FETCH_ASSOC);
$assoName = $row2['asso_name'];
$assoLogo = $row2['asso_image'];
$template->assign('assoName', $assoName);
$template->assign('assoLogo', $assoLogo);
//FIN

$template->display('templates/header.tpl');
$template->display('templates/groups/groupsViewsList.tpl');
$template->display('templates/footer.tpl');