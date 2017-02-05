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

function listeCountLimitProduits($premierMessageAafficher,$nbproduits){
	$cnx = getBD();
	$idResult3 = $cnx->prepare('SELECT * FROM users LIMIT :start, :fin');
	$idResult3->bindValue('start', $premierMessageAafficher, PDO::PARAM_INT);
	$idResult3->bindValue('fin', $nbproduits, PDO::PARAM_INT);
	$idResult3->execute();
	return $idResult3;
}

function detailsProduit($id){
	$cnx = getBD();
	$sql = 'SELECT * FROM Produit WHERE reference = ?';
	$idResult  = executeR($cnx,$sql, array($id));
	return $idResult;
}

function commandeProduit($id){
	$cnx = getBD();
	$sql = 'SELECT * FROM ligne_commande WHERE reference = ?';
	$idResult2  = executeR($cnx,$sql, array($id));
	return $idResult2;
}

function ajoutProduit($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece){
	$cnx = getBD();
	$sql = 'INSERT INTO produit (designation,quantite,descriptif,prix_unitaire_HT,stock,poids_piece) VALUES (?,?,?,?,?,?)';
	$idResult  = executeR($cnx,$sql, array($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece));
	Header( 'Location: index.php?success=1' );
}

function suppressionProduit($id){
	$cnx = getBD();
	$sql = 'DELETE FROM produit WHERE reference = ?';
	$idResult  = executeR($cnx,$sql, array($id));
	Header( 'Location: index.php?success=3' );
}

function editionProduit($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece,$id){
	$cnx = getBD();
	$sql = 'UPDATE produit SET designation=?,quantite=?,descriptif=?,prix_unitaire_HT=?,stock=?,poids_piece=? WHERE reference = ?';
	$idResult  = executeR($cnx,$sql, array($designation,$quantite,$descriptif,$prixunitaire,$stock,$piece,$id));
	Header( 'Location: index.php?gestion=produit&action=edit&id='. $id . '&success=1' );
}

function settingsAffichage(){
	$cnx = getBD();
	$sql = 'SELECT * FROM settings WHERE asso_id = 1';
	$idResult7 = executeR($cnx,$sql);
	return $idResult7;
}