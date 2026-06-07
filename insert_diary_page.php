<?php 
include('config/db_diaryfunction.php');
$db = new db_diaryfunction();

$response = array();

if(isset($_POST['title']) && isset($_POST['content'])){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date("Y-m-d H:i:s");

    if($db->insert_diary_page($title,$content,$date)){
        $response['status'] = 0; // 0 = success
        $response['message'] = "Inserted successfully";
    } else {
        $response['status'] = 1;
        $response['message'] = "Insert failed";
    }
}else{
    $response['status'] = 1;
    $response['message'] = "Missing parameters";
}

echo json_encode($response);
?>