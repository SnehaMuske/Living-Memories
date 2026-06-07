<?php
header('Content-Type: text/plain');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dliving_memories";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("connection_failed"); }

if(isset($_POST['pin'])){
    $pin = $conn->real_escape_string($_POST['pin']);
    
    // Check if PIN exists
    $check = $conn->query("SELECT * FROM pins WHERE pin='$pin'");
    if($check->num_rows > 0){
        echo "exists";
    } else {
        $sql = "INSERT INTO pins (pin) VALUES ('$pin')";
        if($conn->query($sql) === TRUE){
            echo "success";
        } else {
            echo "error";
        }
    }
} else {
    echo "no_pin";
}

$conn->close();
?>