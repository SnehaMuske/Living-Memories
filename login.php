<?php
	include('config/regfunction.php');
	$db	=	new db_regfunction();
	
	$response	=	array();

	if(isset($_POST['phone_no']))
	{
		$var_phone_no	=	$_POST['phone_no'];
		$var_password	=	$_POST['password'];
		
		$db_password = $db->get_password_from_contact_no($var_phone_no);
		if($db_password=="")
		{
			$response['status']		=	1;
			$response['message']	=	"This user is not registered with us.";
		}
		else{
			if($db_password==$var_password)
			{
				$response['status']		=	0;
				$response['message']	=	"Login Success";
			}
			else
			{
				$response['status']		=	1;
				$response['message']	=	"Incorrect password";
			}
		}
	}
	else
	{
		$response['status']		=	1;
		$response['message']	=	"Key Not Found";
	}
	
	echo json_encode($response);
?>