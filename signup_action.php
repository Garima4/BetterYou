<?php
include "connection.php";
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$name = $_REQUEST['name'];
$cno = $_REQUEST['cno'];
$address = $_REQUEST['address'];
$bgroup = $_REQUEST['bgroup'];

$select = "select * from patients where email='$email'";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res)) {
    echo "exists";
    header("location:signup.php?e=2");
} else {
    $insert = "insert into patients values('$email','$pass','$name','$cno','$address','$bgroup')";
    echo $insert;
    mysqli_query($conn, $insert);
    header("location:signup.php?e=1");
}
