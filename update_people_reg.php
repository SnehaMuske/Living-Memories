<?php
	include('config/regfunction.php');
    $db = new db_regfunction();
	$response=array();
	if(isset($_POST['username']))
	{
		$var_username=	$_POST['username'];
        $var_email=	$_POST['email'];
		$var_password =$_POST['password'];
		$var_phoneNo =$_POST['phoneNo'];
		$var_address =$_POST['address'];

         if($db->update_people_reg($var_username,$var_email,$var_password,$var_phoneNo,$var_address))
			{
				$response['status']	=	1;
                $response['message']=	" failed to update Record";
					
			}
			else
			{
				$response['status']	=	0;
                $response['message']=	"Record update Successfully";

					  
		    }
	 
	 }
					
	else
	{
		$response['status']	=	1;
		$response['message']=	"Key not found";


	}	 
		echo json_encode($response);

?>