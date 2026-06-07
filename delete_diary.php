<?php
include("db_connect.php");

$id = $_POST['id'];

$sql = "DELETE FROM diary WHERE id='$id'";

if(mysqli_query($conn,$sql)){

    echo json_encode([
        "status"=>0,
        "message"=>"Deleted Successfully"
    ]);

}else{

    echo json_encode([
        "status"=>1,
        "message"=>"Delete Failed"
    ]);
}
?>