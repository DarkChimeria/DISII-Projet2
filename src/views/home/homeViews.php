<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once 'includes/libs/Smarty/Smarty.class.php';
// ASSIGNATION CLASS SMARTY A LA VARIABLE $TEMPLATE
$template = new Smarty();
// FIN

// ASSIGNATION DATE DU JOUR
$today = date('Y-m-d H:i:s');

// ASSIGNATION DIFFERENCE 1 MOIS
$lastmonth = date('Y-m-d H:i:s',strtotime('-1 month',strtotime($today)));

// ENVOI PARAMETRES POUR REQUETE NOUVELS UTILISATEURS SUR 1 MOIS
$idResult6 = newUsers($lastmonth,$today);

$row1=$idResult6->fetch(PDO::FETCH_ASSOC);
$new = $row1['new'];
$template->assign('newUsers', $new);



$template->assign('fil', 'Accueil');

// CREATION D'UN TABLEAU POUR LES UTILISATEURS RECENTS
$recentsUsers = array();
$i = 0;
// FIN

// BOUCLE AFFICHAGE DES UTILISATEURS RECENTS
while($row=$idResult->fetch(PDO::FETCH_ASSOC)){
	$recentsUsers[$i]['user_id'] = $row['user_id'];
	$recentsUsers[$i]['user_name'] = $row['user_name'];
	$recentsUsers[$i]['user_firstname'] = $row['user_firstname'];
	// $calculBirth = date('Y-m-d');
	$birthday = $row['user_birth'];
	$age = Age($birthday);
	$recentsUsers[$i]['user_birth'] = $age;
	$recentsUsers[$i]['usertype_id'] = $row['usertype_id'];
	$recentsUsers[$i]['user_dateCreation'] = $row['user_dateCreation'];
	$recentsUsers[$i]['user_profilPicture'] = $row['user_profilPicture'];
	$recentsUsers[$i]['group_name'] = $row['group_name'];
	$recentsUsers[$i]['group_cover'] = $row['group_cover'];
	$recentsUsers[$i]['usertype_name'] = $row['usertype_name'];

	if($row['paid'] == 1){
		$recentsUsers[$i]['paid'] = 'Licencié';
	}else{
		$recentsUsers[$i]['paid'] = 'Non Licencié';
	}



	$i++;
}
// FIN
$template->assign('recentsUsers', $recentsUsers);
$template->assign('titleUser','Les 3 derniers membres');


// CREATION D'UN TABLEAU POUR LES GROUPES RECENTS
$recentsGroups = array();
$a = 0;
// FIN

// BOUCLE AFFICHAGE DES UTILISATEURS RECENTS
while($row1=$idResult2->fetch(PDO::FETCH_ASSOC)){
	$recentsGroups[$a]['group_id'] = $row1['group_id'];
	$recentsGroups[$a]['group_name'] = $row1['group_name'];
	$recentsGroups[$a]['group_description'] = $row1['group_description'];
	$recentsGroups[$a]['group_activity'] = $row1['group_activity'];
	$recentsGroups[$a]['group_avatar'] = $row1['group_avatar'];
	$recentsGroups[$a]['group_cover'] = $row1['group_cover'];
	$recentsGroups[$a]['group_dateCreation'] = $row1['group_dateCreation'];
	$groupid = $row1['group_id'];
	$idResult7 = countUsersPerGroup($groupid);
	$row1=$idResult7->fetch(PDO::FETCH_ASSOC);
	$recentsGroups[$a]['count_users_per_group'] = $row1['UsersPerGroup'];
	$a++;
}
// FIN

$template->assign('titleGroup','Les 3 derniers groupes');
$template->assign('recentsGroups', $recentsGroups);


// COMPTE UTILISATEURS
$countUsers = $idResult3->rowCount();
$template->assign('countUsers', $countUsers);
//FIN

// COMPTE GROUPES
$countGroups = $idResult4->rowCount();
$template->assign('countGroups', $countGroups);
//FIN

// SOMME TRESORERIE
$row1=$idResult5->fetch(PDO::FETCH_ASSOC);
$sum = $row1['tresorerie'];
$template->assign('sumTresorerie', $sum);
//FIN

// AFFICHAGE PARAMETRES
$idResult7 = settingsAffichage();
$row2=$idResult7->fetch(PDO::FETCH_ASSOC);
$assoName = $row2['asso_name'];
$assoLogo = $row2['asso_image'];
$template->assign('assoName', $assoName);
$template->assign('assoLogo', $assoLogo);
//FIN

if(!empty($_GET['success'])){
	$template->assign('success', $_GET['success']);
}else{
	$template->assign('success', '0');
}


$template->display('templates/header.tpl');
$template->display('templates/home/homeViews.tpl');
$template->display('templates/footer.tpl');