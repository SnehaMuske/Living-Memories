<?php

header("Content-Type: application/json");

// include database connection
include "db_connect.php";

$data = array();

$sql = "SELECT * FROM diary ORDER BY id DESC";
$result = mysqli_query($conn,$sql);

if($result){

    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }

    echo json_encode([
        "status" => 0,
        "message" => $data
    ]);

}else{

    echo json_encode([
        "status" => 1,
        "message" => "Query failed"
    ]);
}

?>