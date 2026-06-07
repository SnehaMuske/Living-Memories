<?php
include('config/db_connect.php');

$data = array();

$sql = "SELECT * FROM diary_page ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);
?>