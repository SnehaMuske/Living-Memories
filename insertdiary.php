<?php
include('config/diaryfunction.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date_created = date('Y-m-d'); // current date

    $sql = "INSERT INTO diary_page (title, content, date_created) 
            VALUES ('$title', '$content', '$date_created')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>