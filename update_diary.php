<?php
include("db_connect.php");

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE diary 
SET title='$title', content='$content'
WHERE id='$id'";

if(mysqli_query($conn,$sql)){

    echo json_encode([
        "status"=>0,
        "message"=>"Updated Successfully"
    ]);

}else{

    echo json_encode([
        "status"=>1,
        "message"=>"Update Failed"
    ]);
}
?>