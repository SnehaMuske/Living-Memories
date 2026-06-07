<?php
	include('config/setpinfunction.php');
    $db = new db_setpinfunction();
	$response=array();
	if(isset($_POST['pin']))
	{
		$var_pin=	$_POST['pin'];
        $var_conform_pin=	$_POST['conform_pin'];
		
        if($db->update_setpin($var_pin,$var_conform_pin))
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
