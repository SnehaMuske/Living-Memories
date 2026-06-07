<?php
	include('config/function.php');
       $db=new db_function();
	
	$response	=	array();

	if(isset($_POST['MobileNo']))
	{
		$var_MobileNo=	$_POST['MobileNo'];
		$var_Password=	$_POST['Password'];
		
	
		if($db->pepole_login($var_MobileNo,$var_Password))
		{
			$response['status']	=	0;
			$response['message']=	"Login  Successful";
		}
		else
		{
			$response['status']	=	1;
			$response['message']=	"Please enter MobileNo";

		}
		
		
	}
	else
	{
					$response['status']	=	1;
					$response['message']=	"Login Failed";


	}
	
		

	
	echo json_encode($response);
	
?>