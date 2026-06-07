<?php

$conn = mysqli_connect("localhost","root","","livingmemories");

$id = $_POST['id'];
$pin = $_POST['pin'];

$sql = "UPDATE diary_page SET pin='$pin' WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "error";
}

?>