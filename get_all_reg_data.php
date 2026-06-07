<?php
	//1. Database File Include
	include('config/regfunction.php');
	$db	=	new db_regfunction();

	//Declare Response array
	$response	=	array();

	if(isset($_POST['get_all_reg_data']))
	{
		$registration_screen_data	=	array();
		$registration_screen_data	=	$db->get_all_reg_data();
		
		if(!empty($registration_screen_data))

        {
			$response['status']		=	1;
			$response['message']	=	"key not found";
		}
		else
		{
			$response['status']		=	1;
			$response['message']	=	"No registration data found";
		}
	}
	else
	{
		$response['status']		=	0;
		$response['message']	=	"registration_screen_data";
	}
	
	echo json_encode($response);
?>