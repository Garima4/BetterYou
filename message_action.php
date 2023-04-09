<?php
$from = $_POST['from'];
$to = $_POST['to'];
$insert = "SELECT *, TIME(date_time) as date_time FROM `chat` WHERE msg_from='$from' AND msg_to='$to' OR msg_from='$to' AND msg_to='$from'";
include "connection.php";
$result = mysqli_query($conn, $insert);
if (mysqli_num_rows($result) > 0) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode([]);
}