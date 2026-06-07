<?php
	include('config/regfunction.php');
	$db	=	new db_regfunction();
	
	$response	=	array();

	if(isset($_POST['phone_no']))
	{
		$var_phone_no	=	$_POST['phone_no'];
				
		$db_password = $db->get_password_from_contact_no($var_phone_no);
		
		if($db_password=="")
		{
			$response['status']		=	1;
			$response['message']	=	"This user is not registered with us.";
		}
		else{
			//Whatsapp API
			$user_message	=	"Dear User,\nyour login details for Facebook is given below.\nContact No :".$var_mobile_no."\nPassword :".$db_password;
			
			$response['status']		=	0;
			$response['message']	=	"Your password sent to your registered whatsapp number";
		}
	}
	else
	{
		$response['status']		=	1;
		$response['message']	=	"Key Not Found";
	}
	
	echo json_encode($response);
?>