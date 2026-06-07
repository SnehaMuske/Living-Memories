<?php 
include('config/db_diaryfunction.php');
$db = new db_diaryfunction();

$response = array();

$result = $db->get_all_diary_pages();

if($result){

    $response['status'] = 0;
    $response['message'] = array();

    while($row = mysqli_fetch_assoc($result)){
        $response['message'][] = $row;
    }

}else{
    $response['status'] = 1;
    $response['message'] = "No data found";
}

echo json_encode($response);
?>