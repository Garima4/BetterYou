<?php
include "connection.php";
$hp_id=$_REQUEST['hp_id'];
$title=$_REQUEST['title'];

$insert="insert into questions(title,hp_id) values('$title',$hp_id)";
mysqli_query($conn,$insert);
header("location:view_questions.php");