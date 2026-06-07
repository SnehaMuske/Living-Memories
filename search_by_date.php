<?php

include('config/db_connect.php');

$date = $_POST['date'];

$sql = "SELECT * FROM diary_page 
WHERE DATE(date_created)='$date'
ORDER BY pin DESC, date_created DESC";

$result = mysqli_query($conn,$sql);

$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);

?>