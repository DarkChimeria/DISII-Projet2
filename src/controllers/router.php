<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

// $accueil = 'home';
$login = 'login';
$listUsers = 'listUsers';

switch($gestion){
	case  'home':
	require_once 'home/' . $gestion . 'Controllers.php';
	break;
	case  'login':
	require_once 'login/' . $gestion . 'Controllers.php';
	break;
	case  'users':
	require_once 'users/' . $gestion . 'Controllers.php';
	break;
	default:
	echo 'Impossible !';
}


if(isset($_GET['action'])){
	$val = $_GET['action'];
}else{
	$val = '';
}



if($val == $login){
	login();
}elseif($val == $listUsers){
	listU();
}elseif(empty($var)){
	home();
}
