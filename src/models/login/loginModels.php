<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

include '/models/models.php';

function loginIn($umail,$upassword){
			$cnx = getBD();
			$sql = ('SELECT * FROM users WHERE user_mail= ?');
			$idResult  = executeR($cnx,$sql, array($umail));
			$row=$idResult->fetch(PDO::FETCH_ASSOC);
			
			if($idResult->rowCount() == 1)
			{
				
					if($row['user_password']==md5($upassword))
					{
						$_SESSION['userSession'] = $row['user_id'];
						header("Location: index.php?gestion=home");
						return true;
					}
					else
					{
						
						header("Location: index.php?error1");
						exit;
					}
				
			}
			else
			{

				header("Location: index.php?error2");
				exit;
			}		
		
	}


	function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}
	
	function redirect($url)
	{
		header("Location: $url");
	}
	
	function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
	}