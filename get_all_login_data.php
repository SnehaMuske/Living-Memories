<?php
	//1. Database File Include
	include('config/function.php');
	$db	=	new db_function();

	//Declare Response array
	$response	=	array();

	if(isset($_POST['get_log_data']))
	{
		$login_sreen_data	=	array();
		$login_sreen_data	=	$db->get_all_login_data();
		
		if(!empty($login_sreen_data))

        {
			$response['status']		=	0;
			$response['message']	=	"login_sreen_data";
		}
		else
		{
			$response['status']		=	1;
			$response['message']	=	"No login data found";
		}
	}
	else
	{
		$response['status']		=	1;
		$response['message']	=	"Key Not Found";
	}
	
	echo json_encode($response);
?>