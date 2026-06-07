<?php
	include('config/function.php');
    $db = new db_function();
	$response=array();
	if(isset($_POST['MobileNo']))
	{
		$var_MobileNo=	$_POST['MobileNo'];
        $var_Password=	$_POST['Password'];
		$var_update_id =$_POST['update_id'];

        if($db->update_login_pepole_record($var_MobileNo,$var_Password,$var_update_id))
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
