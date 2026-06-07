<?php
include('config/db_connect.php');

$id = $_POST['id'];
$pin = $_POST['pin'];

$sql = "UPDATE diary_page SET pin='$pin' WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo json_encode(["status"=>0,"message"=>"Pin Updated"]);
}else{
    echo json_encode(["status"=>1,"message"=>"Failed"]);
}
?>