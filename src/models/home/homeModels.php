<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

include '/models/models.php';

function recentsUsers(){
	$cnx = getBD();
	$sql = 'SELECT * FROM users,usertype,listusersgroup,groups,licenses WHERE users.usertype_id=usertype.usertype_id AND listusersgroup.user_id = users.user_id AND listusersgroup.group_id = groups.group_id AND licenses.user_id=users.user_id ORDER BY user_dateCreation DESC LIMIT 0,3 ';
	$idResult  = executeR($cnx,$sql);
	return $idResult;
}

function newUsers($lastmonth,$today){
	$cnx = getBD();
	$sql = 'SELECT COUNT(*) AS new FROM users WHERE user_dateCreation BETWEEN ? AND ? ';
	$idResult  = executeR($cnx,$sql, array($lastmonth,$today));
	return $idResult;
}

function countUsersPerGroup($groupid){
	$cnx = getBD();
	$sql = 'SELECT COUNT(user_id) AS UsersPerGroup FROM listusersgroup WHERE group_id = ? ';
	$idResult7  = executeR($cnx,$sql, array($groupid));
	return $idResult7;
}

function recentsGroups(){
	$cnx = getBD();
	$sql = 'SELECT * FROM groups ORDER BY group_dateCreation DESC LIMIT 0,3';
	$idResult2 = executeR($cnx,$sql);
	return $idResult2;
}

function listUsers(){
	$cnx = getBD();
	$sql = 'SELECT * FROM users';
	$idResult3 = executeR($cnx,$sql);
	return $idResult3;
}

function listGroups(){
	$cnx = getBD();
	$sql = 'SELECT * FROM groups';
	$idResult4 = executeR($cnx,$sql);
	return $idResult4;
}

function sommeTresorerie(){
	$cnx = getBD();
	$sql = 'SELECT SUM(price) AS tresorerie FROM licenses WHERE paid = 1';
	$idResult5 = executeR($cnx,$sql);
	return $idResult5;
}

function settingsAffichage(){
	$cnx = getBD();
	$sql = 'SELECT * FROM settings WHERE asso_id = 1';
	$idResult7 = executeR($cnx,$sql);
	return $idResult7;
}

function Age($birthday)
{
    $arr1 = explode('-', $birthday);
    $arr2 = explode('-', date('Y-m-d'));
		
    if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[2] <= $arr2[2])))
    return $arr2[0] - $arr1[0];

    return $arr2[0] - $arr1[0] - 1;
}


// function listeCountLimitProduits($premierMessageAafficher,$nbproduits){
// 	$cnx = getBD();
// 	$idResult3 = $cnx->prepare('SELECT * FROM produit LIMIT :start, :fin');
// 	$idResult3->bindValue('start', $premierMessageAafficher, PDO::PARAM_INT);
// 	$idResult3->bindValue('fin', $nbproduits, PDO::PARAM_INT);
// 	$idResult3->execute();
// 	return $idResult3;
// }

// function detailsProduit($id){
// 	$cnx = getBD();
// 	$sql = 'SELECT * FROM Produit WHERE reference = ?';
// 	$idResult  = executeR($cnx,$sql, array($id));
// 	return $idResult;
// }

// function commandeProduit($id){
// 	$cnx = getBD();
// 	$sql = 'SELECT * FROM ligne_commande WHERE reference = ?';
// 	$idResult2  = executeR($cnx,$sql, array($id));
// 	return $idResult2;
// }

// function ajoutProduit($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece){
// 	$cnx = getBD();
// 	$sql = 'INSERT INTO produit (designation,quantite,descriptif,prix_unitaire_HT,stock,poids_piece) VALUES (?,?,?,?,?,?)';
// 	$idResult  = executeR($cnx,$sql, array($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece));
// 	Header( 'Location: index.php?success=1' );
// }

// function suppressionProduit($id){
// 	$cnx = getBD();
// 	$sql = 'DELETE FROM produit WHERE reference = ?';
// 	$idResult  = executeR($cnx,$sql, array($id));
// 	Header( 'Location: index.php?success=3' );
// }

// function editionProduit($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece,$id){
// 	$cnx = getBD();
// 	$sql = 'UPDATE produit SET designation=?,quantite=?,descriptif=?,prix_unitaire_HT=?,stock=?,poids_piece=? WHERE reference = ?';
// 	$idResult  = executeR($cnx,$sql, array($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece,$id));
// 	Header( 'Location: index.php?gestion=produit&action=edit&id='. $id . '&success=1' );
// }