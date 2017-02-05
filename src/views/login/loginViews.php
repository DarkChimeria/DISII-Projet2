<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/
require_once 'includes/libs/Smarty/Smarty.class.php';
// ASSIGNATION CLASS SMARTY A LA VARIABLE $TEMPLATE
$template = new Smarty();
// FIN

if($idResult = is_logged_in()!="")
{
  $idResult = redirect('index.php?gestion=home&action=home');
}

if(!isset($_POST['umail']) && !isset($_POST['upassword'])){
	$umail = '';
	$upassword = '';
}else{
	$umail = $_POST['umail'];
	$upassword = $_POST['upassword'];
	$idResult = loginIn($umail,$upassword);
}



$template->display('templates/login/loginViews.tpl');
