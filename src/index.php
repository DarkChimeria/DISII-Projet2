<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/
require_once 'includes/config.php';

if(isset($_REQUEST['gestion'])){
	$gestion=$_REQUEST['gestion'];
}else{
	$gestion='home';
}
require_once 'controllers/router.php';
