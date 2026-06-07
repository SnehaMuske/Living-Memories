<?php
	//1. Database File Include
	include('config/forgot_pin_function.php');
	$db=new db_functions();

	//Declare Response array
	$response=array();

	if(isset($_POST['old_pin']))
	{
		$forgot_pin_data=array();
		$forgot_pin_data=$db->get_all_select_forgot_pin();
		
		if(!empty($forgot_pin_data))

        {
			$response['status']		=	1;
			$response['message']	=	"key not found";
		}
		else
		{
			$response['status']		=	1;
			$response['message']	=	"No data found";
		}
	}
	else
	{
		$response['status']		=	0;
		$response['message']	=	"forgot_pin data";
	}
	
	echo json_encode($response);
?>