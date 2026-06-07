<?php
	include('config/regfunction.php');
	$db	=	new db_regfunction();
	
	$response	=	array();

	if(isset($_POST['phone_no']))
	{
		$var_phone_no	=	$_POST['phone_no'];
		
		$my_profile_data = array();
		$my_profile_data = $db->get_my_profile_data($var_phone_no);
		
		if(!empty($my_profile_data))
		{
			$response['status']		=	0;
			$response['message']	=	$my_profile_data;
		}
		else
		{
			$response['status']		=	1;
			$response['message']	=	"No Profile Found";
		}
	}
	else
	{
		$response['status']		=	1;
		$response['message']	=	"Key Not Found";
	}
	
	echo json_encode($response);
?>