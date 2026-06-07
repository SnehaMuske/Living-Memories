<?php
	include('config/regfunction.php');
	$db	=	new db_regfunction();
	$response	=	array();
	if(isset($_POST['username']))
	{
		$var_username  =	$_POST['username'];
		$var_email     =	$_POST['email'];
	    $var_password  =	$_POST['password'];
		$var_phoneNo  =	$_POST['phoneNo'];
       if($db->registration_screen($var_username,$var_email,$var_password,$var_phoneNo))   

		{
			$response['status']		=	0;
			$response['message']	=	" Registered Successfully";
		}
		else
		{
			$response['status']		=	1;
			$response['message']    =	"Please enter details";
		}
	}
			
	echo json_encode($response);
?>