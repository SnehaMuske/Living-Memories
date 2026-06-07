<?php
	include('config/regfunction.php');
	$db	=	new db_regfunction();
	
	$response	=	array();

	if(isset($_POST['phone_no']))
	{
		$var_phone_no	=	$_POST['phone_no'];
		$var_current_pwd=	$_POST['current_password'];
		$var_new_pwd	=	$_POST['new_password'];
		$var_conf_pwd	=	$_POST['confirm_password'];
			
		$db_password = $db->get_password_from_contact_no($var_phone_no);
		
		if($db_password=="")
		{
			$response['status']		=	1;
			$response['message']	=	"This user is not registered with us.";
		}
		else{
			if($db_password==$var_current_pwd)
			{
				if($var_new_pwd==$var_conf_pwd)
				{
					if($db->update_user_password($var_phone_no,$var_new_pwd))
					{
						$response['status']		=	0;
						$response['message']	=	"Password changed successfully";
					}
					else
					{
						$response['status']		=	1;
						$response['message']	=	"Failed to change password";
					}
				}
				else
				{
					$response['status']		=	1;
					$response['message']	=	"Please match new password and confirm password";
				}
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