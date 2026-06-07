<?php
	include('config/function.php');
	$db = new db_function();
	
	$response	=	array();
	
	if(isset($_POST['phoneNo']))
	{
		$var_phoneNo	=	$_POST['phoneNo'];
		
				if($db->delete_registredpepoledata($var_phoneNo))

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