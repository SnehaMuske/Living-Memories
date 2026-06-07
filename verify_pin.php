<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dliving_memories";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["status"=>"error"]);
    exit();
}

if(isset($_POST['pin'])){
    $pin = $conn->real_escape_string($_POST['pin']);
    $result = $conn->query("SELECT * FROM pins WHERE pin='$pin' LIMIT 1");

    if($result->num_rows > 0){
        echo json_encode(["status"=>"success"]);
    } else {
        echo json_encode(["status"=>"failed"]);
    }
} else {
    echo json_encode(["status"=>"no_pin"]);
}
$conn->close();
?>