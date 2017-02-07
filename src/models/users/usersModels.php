<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

include '/models/models.php';

function listeUsers(){
	$cnx = getBD();
	$sql = 'SELECT * FROM users';
	$idResult  = executeR($cnx,$sql);
	return $idResult;
}


function listeCountLimitUsers($premierMessageAafficher,$nbproduits){
    $cnx = getBD();
    $idResult3 = $cnx->prepare('SELECT * FROM users LIMIT :start, :fin');
    $idResult3->bindValue('start', $premierMessageAafficher, PDO::PARAM_INT);
    $idResult3->bindValue('fin', $nbproduits, PDO::PARAM_INT);
    $idResult3->execute();
    return $idResult3;
}

function detailsUser($id){
	$cnx = getBD();
	$sql = 'SELECT * FROM users,usertype,listusersgroup,groups,licenses WHERE users.usertype_id=usertype.usertype_id AND listusersgroup.user_id = users.user_id AND listusersgroup.group_id = groups.group_id AND licenses.user_id=users.user_id AND users.user_id = ?';
	$idResult  = executeR($cnx,$sql, array($id));
	return $idResult;
}

function historyUser($id){
	$cnx = getBD();
	$sql = 'SELECT * FROM users,usertype,listusersgroup,groups,licenses WHERE users.usertype_id=usertype.usertype_id AND listusersgroup.user_id = users.user_id AND listusersgroup.group_id = groups.group_id AND licenses.user_id=users.user_id AND users.user_id = ? ORDER BY listusersgroup.datestart DESC LIMIT 0,4';
	$idResult1  = executeR($cnx,$sql, array($id));
	return $idResult1;
}


function settingsAffichage(){
	$cnx = getBD();
	$sql = 'SELECT * FROM settings WHERE asso_id = 1';
	$idResult7 = executeR($cnx,$sql);
	return $idResult7;
}