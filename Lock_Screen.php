<?php
	
	include('config/function.php');


	$response	=	array();

	if(isset($_POST['number']))
	{
		$var_number=	$_POST['number'];
		$var_conform_password=	$_POST['conform_password'];


		if($var_number==""))
		{
			$response['status']	=	1;
			$response['message']=	"Please enter number";
		}
		else{
			$response['status']	=	0;
			$response['message']=	"Successful....";
		}
		
		
		
	}
	
	echo json_encode($response);
	
?>