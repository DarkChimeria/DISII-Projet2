<?php

require_once '/configs/dbconfig.php';

class SETTINGS
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function editSettings($name,$description,$mail,$adress,$phone,$domain,$userpic,$rna,$price)
	{
		try
		{							
			$stmt = $this->conn->prepare("UPDATE settings SET name_website = :name, description_website = :description, mail_website = :mail, adress_website = :adress, phone_website = :phone, domain = :domain, logo_website = :logo, idRNA = :rna, price_license = :price WHERE id = 1");
			$stmt->bindparam(":name",$name);
			$stmt->bindparam(":description",$description);
			$stmt->bindparam(":mail",$mail);
			$stmt->bindparam(":adress",$adress);
			$stmt->bindparam(":phone",$phone);
			$stmt->bindparam(":domain",$domain);
			$stmt->bindparam(":logo",$userpic);
			$stmt->bindparam(":rna",$domain);			
			$stmt->bindparam(":price",$price);

			$stmt->execute();	
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}


}