<?php
	//1. Database File Include
	include('config/setpinfunction.php');
	$db	=	new db_setpinfunction();

	//Declare Response array
	$response	=	array();

	if(isset($_POST['get_all_setpin']))
	{
		$registration_screen_data	=	array();
		$registration_screen_data	=	$db->get_all_setpin();
		
		if(!empty($get_all_setpin))

        {
			$response['status']		=	0;
			$response['message']	=	"registration_screen_data";
		}
		else
		{
			$response['status']		=	1;
			$response['message']	=	"No registration data found";
		}
	}
	else
	{
		$response['status']		=	1;
		$response['message']	=	"key not found";
	}
	
	echo json_encode($response);
?>