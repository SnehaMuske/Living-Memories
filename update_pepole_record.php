<?php
	include('config/function.php');
    $db = new db_functions();
	if(isset($_POST['full_name']))
	{
		$var_MobileNo=	$_POST['MobileNo'];
        $var_Password=	$_POST['Password'];
         if($db->update_pepole_record($var_Password))
			{
				$response['status']	=	0;
                $response['message']=	"Student Record Updated Successfully";

					
			}
			else
			{
				$response['status']	=	1;
                $response['message']=	"Failed to Update Student Record";

					  
			}
	 }
					
	else
	{
		$response['status']	=	1;
		$response['message']=	"Key not found";


	}	 
		echo json_encode($response);

?>
