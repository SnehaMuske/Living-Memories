<?php
header('Content-Type: application/json');
include('config/db_connect.php');

$response = array();

if(isset($_POST['id'])){

    $id = $_POST['id'];

    $sql = "DELETE FROM diary_page WHERE id='$id'";

    if(mysqli_query($conn,$sql)){

        $response["status"] = 0;
        $response["message"] = "Deleted Successfully";

    }else{

        $response["status"] = 1;
        $response["message"] = "Delete Failed";

    }

}else{

    $response["status"] = 2;
    $response["message"] = "Missing ID";

}

echo json_encode($response);
?>