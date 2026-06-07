<?php

$conn = mysqli_connect("localhost","root","","dlivingmemories");

$sql = "SELECT * FROM diary_page 
        ORDER BY pin DESC, date_created DESC";

$result = mysqli_query($conn,$sql);

$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);

?>