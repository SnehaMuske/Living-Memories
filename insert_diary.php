<?php
include("db_connect.php");

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO diary(title,content) VALUES('$title','$content')";

if(mysqli_query($conn,$sql)){

    echo json_encode([
        "status"=>0,
        "message"=>"Diary Saved"
    ]);

}else{

    echo json_encode([
        "status"=>1,
        "message"=>"Insert Failed"
    ]);
}

?>