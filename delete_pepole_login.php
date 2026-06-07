<?php
	include('config/function.php');
	$db = new db_function();
	
	$response	=	array();
	
	if(isset($_POST['pepole_id']))
	{
		$var_pepole_id	=	$_POST['pepole_id'];
		
		if($db->delete_pepole_login($var_pepole_id))
		{
			$response['status']	=	0;
			$response['message']=	" Record Deleted Successfully";
		}
		
		else
		{
			$response['status']	=	1;
			$response['message']=	"Failed To Delete  Record";
		}
	}
	else
	{
		$response['status']	=	1;
		$response['message']=	"Key not found";
	}
	
	echo json_encode($response);
	
?>