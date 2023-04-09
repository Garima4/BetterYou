<?php
include "connection.php";
$id=$_REQUEST['q'];

$update="update appointment set status='visited' where app_id=$id";
$res=mysqli_query($conn,$update);
header("location:myappointments.php");