<?php

require_once '/configs/dbconfig.php';

class USER
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
	
	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}
	
	public function register($uname,$firstname,$ubirth,$uadress,$uphone,$umobile,$umail,$type,$upseudo,$ugender,$upicture,$upassword)
	{
		try
		{							
			$password = md5($upassword);
			$stmt = $this->conn->prepare("INSERT INTO users(name_user, firstname_user, birth_user, adress_user, phone_user, mobile_user, mail_user, account_type, pseudo_user, gender_user, picture_user, password_user) 
			                                             VALUES(:name_user, :firstname_user, :birth_user, :adress_user, :phone_user, :mobile_user, :mail_user, :account_type, :pseudo_user, :gender_user, :picture_user, :password_user)");
			$stmt->bindparam(":name_user",$uname);
			$stmt->bindparam(":firstname_user",$firstname);
			$stmt->bindparam(":birth_user",$ubirth);
			$stmt->bindparam(":adress_user",$uadress);
			$stmt->bindparam(":phone_user",$uphone);
			$stmt->bindparam(":mobile_user",$umobile);
			$stmt->bindparam(":mail_user",$umail);
			$stmt->bindparam(":account_type",$type);
			$stmt->bindparam(":pseudo_user",$upseudo);
			$stmt->bindparam(":gender_user",$ugender);
			$stmt->bindparam(":picture_user",$upicture);
			$stmt->bindparam(":password_user",$password);
			$stmt->execute();	
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	public function login($umail,$upassword)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM users WHERE mail_user=:mail");
			$stmt->execute(array(":mail"=>$umail));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($stmt->rowCount() == 1)
			{
				
					if($userRow['password_user']==md5($upassword))
					{
						$_SESSION['userSession'] = $userRow['id_user'];
						return true;
					}
					else
					{
						
						header("Location: login.php?error");
						exit;
					}
				
			}
			else
			{

				header("Location: login.php?error");
				exit;
			}		
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	
	public function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
	}
	
	function send_mail($email,$message,$subject)
	{						
		require_once('/lib/mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 465;             
		$mail->AddAddress($email);
		$mail->Username="groupe3disii@gmail.com";  
		$mail->Password="Anthony28";            
		$mail->SetFrom('groupe3disii@gmail.com','Gestionnaire');
		$mail->AddReplyTo("groupe3disii@gmail.com","Gestionnaire");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}	
}