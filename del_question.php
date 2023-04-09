<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from questions where id=$id";
mysqli_query($conn,$delete);
header("location:view_questions.php");