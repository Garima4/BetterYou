<?php
$from = $_POST['from'];
$to = $_POST['to'];
$msg = $_POST['msg'];
$insert = "INSERT INTO `chat`(`message`, `msg_from`, `msg_to`) VALUES ('$msg', '$from', '$to')";
include "connection.php";
if ($conn->query($insert)) {
    echo "success";
} else {
    echo "Error: " . $insert . "<br/>" . $conn->error;
}