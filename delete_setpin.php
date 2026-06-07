<?php
	include('config/setpinfunction.php');
	$db = new db_setpinfunction();

	$response	=	array();
	
	if(isset($_POST['pin']))
	{
		$var_pin	=	$_POST['pin'];
		
		if($db->delete_setpin($var_pin))
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