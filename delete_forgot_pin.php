<?php
	include('config/forgot_pin_function.php');
    $db=new db_functions();
	$response=array();
	if(isset($_POST['id']))
	{
				$var_id=$_POST['id'];
		
        if($db->delete_forgot_pin($var_id))
			{
				
				$response['status']	=	0;
                $response['message']=	"Record delete Successfully";
			}
			else
			{
				$response['status']	=	1;
                $response['message']=	"failed to delete Record";

					  
		    }
	 
	}
					
	else
	{
		$response['status']	=	1;
		$response['message']=	"Key not found";

	}	 
		echo json_encode($response);

?>