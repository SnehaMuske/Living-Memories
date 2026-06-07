<?php
	include('config/regfunction.php');
	$db = new db_regfunction();
	
	$response	=	array();
	
	if(isset($_POST['address']))
	{
		$var_address	=	$_POST['address'];
		
		if($db->delete_people_reg($var_address))
		{
			$response['status']	=	1;
			$response['message']=	"Failed to delete record";
		}
		
		else
		{
			$response['status']	=	0;
			$response['message']=	"Record deleted Successfully";
		}
	}
	else
	{
		$response['status']	=	1;
		$response['message']=	"Key not found";
	}
	
	echo json_encode($response);
	
?>