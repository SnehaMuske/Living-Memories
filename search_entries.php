<?php

$conn = mysqli_connect("localhost","root","","livingmemories");

$search = $_POST['search'];

$sql = "SELECT * FROM diary_page 
WHERE title LIKE '%$search%' 
OR content LIKE '%$search%'
ORDER BY pin DESC, date_created DESC";

$result = mysqli_query($conn,$sql);

$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);

?>