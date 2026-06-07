<?php
header('Content-Type: application/json');
include('config/db_connect.php');

$response = array();

if(isset($_POST['id']) && isset($_POST['title']) && isset($_POST['content'])){

    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $content = mysqli_real_escape_string($conn,$_POST['content']);

    $sql = "UPDATE diary_page 
            SET title='$title', content='$content'
            WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        $response["status"] = 0;
        $response["message"] = "Updated Successfully";
    }else{
        $response["status"] = 1;
        $response["message"] = "Update Failed";
    }

}else{

    $response["status"] = 2;
    $response["message"] = "Missing Parameters";

}

echo json_encode($response);
?>