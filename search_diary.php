<?php

header("Content-Type: application/json");

include "db_connect.php";

$search = $_GET['search'];

$data = array();

$sql = "SELECT * FROM diary 
        WHERE title LIKE '%$search%' 
        OR content LIKE '%$search%'
        ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode([
    "status"=>0,
    "message"=>$data
]);

?>