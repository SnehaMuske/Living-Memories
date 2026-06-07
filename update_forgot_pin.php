<?php
	include('config/forgot_pin_function.php');
    $db = new db_functions();
	$response=array();
	if(isset($_POST['old_pin']))
	{
		$var_old_pin=$_POST['old_pin'];
        $var_new_pin=$_POST['new_pin'];
		$var_conform_pin=$_POST['conform_pin'];
		$var_update_id=$_POST['update_id'];

         if($db->update_forgot_pin($var_old_pin,$var_new_pin,$var_conform_pin,$var_update_id))
			{
				
				$response['status']	=	0;
                $response['message']=	"Record update Successfully";
			}
			else
			{
				$response['status']	=	1;
                $response['message']=	" failed to update Record";

					  
		    }
	 
	 }
					
	else
	{
		$response['status']	=	1;
		$response['message']=	"Key not found";


	}	 
		echo json_encode($response);

?>