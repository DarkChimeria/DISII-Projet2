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
// $row2=$idResult2->fetch(PDO::FETCH_ASSOC);
// VARIABLES BDD USERS
$userid = $row['user_id'];
$user_name = $row['user_name'];
$user_firstname= $row['user_firstname'];
$user_pseudo = $row['user_pseudo'];
$user_birth = $row['user_birth'];
$user_adress = $row['user_adress'];
$user_cp = $row['user_cp'];
$user_city = $row['user_city'];
$user_phone = $row['user_phone'];
$user_mobile = $row['user_mobile'];
$user_mail = $row['user_mail'];
$user_gender = $row['user_gender'];
$user_profilPicture = $row['user_profilPicture'];
$usertype_id = $row['usertype_id'];
$user_dateCreation = $row['user_dateCreation'];
// VARIABLES BDD GROUPS
$group_name = $row['group_name'];
$datestart = $row['datestart'];
$datefinish = $row['datefinish'];

// VARIABLES BDD LICENSES
if($row['paid'] == 1){
	$license = 'Licencié';
}else{
	$license = 'Non Licencié';
}

// VARIABLES BDD USERTYPE
$usertype_name = $row['usertype_name'];

// VARIABLES SMARTY USERS
$template->assign('userid', $userid);
$template->assign('user_name', $user_name);
$template->assign('user_firstname', $user_firstname);
$template->assign('user_pseudo', $user_pseudo);
$template->assign('user_birth', $user_birth);
$template->assign('user_adress', $user_adress);
$template->assign('user_cp', $user_cp);
$template->assign('user_city', $user_city);
$template->assign('user_phone', $user_phone);
$template->assign('user_mobile', $user_mobile);
$template->assign('user_mail', $user_mail);
$template->assign('user_gender', $user_gender);
$template->assign('user_profilPicture', $user_profilPicture);
$template->assign('usertype_id', $usertype_id);
$template->assign('user_dateCreation', $user_dateCreation);



// VARIABLES SMARTY LICENSES
$template->assign('license', $license);

// VARIABLES SMARTY USERTYPE
$template->assign('usertype_name', $usertype_name);





$idResult1 = historyUser($userid);

$history = array();
$i = 0;

while($row1=$idResult1->fetch(PDO::FETCH_ASSOC)){
	$history[$i]['group_id'] = $row1['group_id'];
	$history[$i]['group_name'] = $row1['group_name'];
	$history[$i]['group_description'] = $row1['group_description'];
	$history[$i]['group_activity'] = $row1['group_activity'];
	$history[$i]['datestart'] = $row1['datestart'];
	$history[$i]['datefinish'] = $row1['datefinish'];

// VARIABLES SMARTY GROUPS
if(!empty($row1['datestart']) && $row1['datefinish'] == NULL){
	$history[$i]['ifActif'] = 1;
	$group_actif = $row1['group_name'];
	$template->assign('group_name', $group_actif);
	$template->assign('datestart', $row1['datestart']);
}else{
	$history[$i]['ifActif'] = 0;
}

	$i++;
}

$template->assign('history', $history);


// AFFICHAGE PARAMETRES
$idResult7 = settingsAffichage();
$row2=$idResult7->fetch(PDO::FETCH_ASSOC);
$assoName = $row2['asso_name'];
$assoLogo = $row2['asso_image'];
$template->assign('assoName', $assoName);
$template->assign('assoLogo', $assoLogo);
//FIN


// AFFICHAGE CARTE LICENCE
$file = carteLicence($user_name,$user_firstname,$group_actif,$user_dateCreation,$usertype_name,$assoLogo,$user_profilPicture,$assoName);

$template->assign('carteLicence', $file);




$template->display('templates/header.tpl');
$template->display('templates/users/usersViewsDetails.tpl');
$template->display('templates/footer.tpl');