<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once 'includes/libs/Smarty/Smarty.class.php';


$template = new Smarty();
$template->assign('title','Profil du membre');

// $listeProduits = array();
// $i = 0;

$row=$idResult->fetch(PDO::FETCH_ASSOC);
// VARIABLES BDD GROUPS
$group_id = $row['group_id'];
$group_name = $row['group_name'];
$group_description = $row['group_description'];
$group_activity = $row['group_activity'];
$group_avatar = $row['group_avatar'];
$datestart = $row['datestart'];
$datefinish = $row['datefinish'];
$group_dateCreation = $row['group_dateCreation'];



// VARIABLES SMARTY USERS
$template->assign('group_id', $group_id);
$template->assign('group_name', $group_name);
$template->assign('group_avatar', $group_avatar);
$template->assign('group_activity', $group_activity);
$template->assign('group_dateCreation', $group_dateCreation);


$idResult1 = historyGroup($group_id);
$idResult2 = actifsGroup($group_id);


$history = array();
$i = 0;
while($row1=$idResult1->fetch(PDO::FETCH_ASSOC)){
// VARIABLES SMARTY GROUPS
	if(!empty($row1['datestart']) && !empty($row1['datefinish'])){
		$history[$i]['ifActif'] = 0;
		$history[$i]['user_name'] = $row1['user_name'];
		$history[$i]['user_firstname'] = $row1['user_firstname'];
		$history[$i]['datestart'] = $row1['datestart'];
		$history[$i]['datefinish'] = $row1['datefinish'];
		$user_actif = $row1['user_name'];
	}
	// elseif ($row1['datefinish'] == NULL){
	// 	$history[$i]['nothing'] = 'nothing';
	// }
	$i++;
}



$actifs = array();
$a = 0;
while($row3=$idResult2->fetch(PDO::FETCH_ASSOC)){
// VARIABLES SMARTY GROUPS
	if(!empty($row3['datestart']) && $row3['datefinish'] == NULL){

		$actifs[$a]['user_id'] = $row3['user_id'];
		$actifs[$a]['user_pseudo'] = $row3['user_pseudo'];
		$actifs[$a]['user_avatar'] = $row3['user_profilPicture'];
		$actifs[$a]['datestart'] = $row3['datestart'];
		$actifs[$a]['datefinish'] = $row3['datefinish'];
		$birthday =$row3['user_birth'];
		$age = Age($birthday);
		$template->assign('age', $age);

		// COULEUR FOND USERS ACTIFS
		$avatar = $row3['user_profilPicture'];
		$actifs[$a]['couleurBG'] = dominant_color($avatar);
		// $template->assign('couleurBG', $couleurBG);
		// $user_actif = $row3['user_name'];
		// $template->assign('user_name', $user_actif);
		$template->assign('datefinish', $row3['datefinish']);

	}else{

	}

	$a++;

}

$template->assign('history', $history);
$template->assign('actifs', $actifs);
$nbMembres = $idResult2->rowCount();
$template->assign('nbMembres', $nbMembres);



if($idResult1->rowCount() < 0){

	$template->assign('nothing', 'nothing');
}else{

	$template->assign('nothing', '');
}

// AFFICHAGE PARAMETRES
$idResult7 = settingsAffichage();
$row2=$idResult7->fetch(PDO::FETCH_ASSOC);
$assoName = $row2['asso_name'];
$assoLogo = $row2['asso_image'];
$template->assign('assoName', $assoName);
$template->assign('assoLogo', $assoLogo);
//FIN


$template->display('templates/header.tpl');
$template->display('templates/groups/groupsViewsDetails.tpl');
$template->display('templates/footer.tpl');