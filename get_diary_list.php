<?php
include('config/db_diaryfunction.php');

header('Content-Type: application/json');

$db = new db_diaryfunction();

$result = $db->get_all_diary_pages(); // You must define this in db_diaryfunction.php

if ($result && mysqli_num_rows($result) > 0) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode(['status' => 1, 'data' => $data]);
} else {
    echo json_encode(['status' => 0, 'message' => 'No diary entries found']);
}
