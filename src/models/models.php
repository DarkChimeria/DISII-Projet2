<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

function executeR($connexion,$sql,$parametre=null){
	if($parametre==null){
		$idResult = $connexion->query($sql);
	}else{
		$idResult = $connexion->prepare($sql);
		$idResult->execute($parametre);
	}
	return $idResult;
}

function getBD(){
	$cnx = connexion(SERVER,BASEDEDONNEES,UTILISATEUR,MOTDEPASSE);
	return $cnx;
}

function connexion($server,$bdd,$user,$psw){
	try{
		$connexion = new PDO('mysql:host='. $server . ';dbname=' . $bdd,$user,$psw,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		return $connexion;
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
}

?>