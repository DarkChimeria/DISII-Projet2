<?php
/**************************************************************************
Script de cours PHP - MVC - Smarty
**************************************************************************/

require_once '/models/users/usersModels.php';

function detailsU($id){
	$idResult = detailsUser($id);
	// $idResult6 = settingsAffichage();
	require_once '/views/users/usersViewsDetails.php';
}


function listU(){
	$idResult = listeUsers();
	$idResult6 = settingsAffichage();
	require_once '/views/users/usersViewsList.php';
}

function carteLicence($user_name,$user_firstname,$group_actif,$user_dateCreation,$usertype_name,$assoLogo,$user_profilPicture,$assoName){
	$numlicence = $user_name.$user_dateCreation.$user_firstname;
	$nomprenom = $user_name . ' ' . $user_firstname;
	$profilPicture = "upload_files/user_avatar/" . $user_profilPicture;
	$file = "upload_files/".$user_name.".png";
	$logo = "upload_files/association_settings/logo-mini.png";


	$font = 'includes/libs/bootstrap/fonts/arial.ttf';
	
	$im2 = imagecreatefrompng($profilPicture);
	$im3 = imagecreatefrompng($logo);

	$im = imagecreatefrompng("upload_files/association_settings/bg-carte.png");
	
	$black = imagecolorallocate($im, 0, 0, 0);
	$white = imagecolorallocate($im, 255, 255, 255);
	$grey = imagecolorallocate($im, 102, 102, 102);
	imagecopy($im, $im2, 379, 191, 0, 0, 256, 256);
	imagecopy($im, $im3, 720, 60, 0, 0, 200, 173);
	
	imagettftext($im, 30, 0, 61, 70, $white, $font, $nomprenom);
	imagettftext($im, 20, 0, 61, 120, $white, $font, $group_actif);
	imagettftext($im, 20, 0, 440, 490, $grey, $font, 'N° Licence');
	imagettftext($im, 20, 0, 300, 530, $grey, $font, $numlicence);
	// create the image
	imagepng($im, $file);
	imagedestroy($im);
	//}

	return $file;	
}


function send_mail($user_mail,$message,$subject,$file)
	{						
		require_once('includes/libs/PHPmailer/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 465;             
		$mail->AddAddress($user_mail);
		$mail->Username="groupe3disii@gmail.com";  
		$mail->Password="Anthony28";            
		$mail->SetFrom('groupe3disii@gmail.com','Gestionnaire');
		$mail->AddReplyTo("groupe3disii@gmail.com","Gestionnaire");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->AddAttachment($file);
		$mail->Send();
	}




// function read($id){
// 	$idResult = detailsProduit($id);
// 	$idResult2 = commandeProduit($id);
// 	require_once '/views/produit/produitViewsDetails.php';
// }

// function add(){
// 	require_once '/views/produit/produitViewsAjout.php';
// }

// function del($id){
// 	if(isset($_POST['supp'])){
// 		$idResult = suppressionProduit($id);
// 	}else{
// 		$idResult = detailsProduit($id);
// 	}
// 	require_once '/views/produit/produitViewsSuppression.php';
// }

// function edit($id){
// 	$idResult = detailsProduit($id);
// 	require_once '/views/produit/produitViewsEdition.php';

// }
