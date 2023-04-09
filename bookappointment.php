<?php
include "connection.php";
$name = $_REQUEST['pname'];
//echo $name;
$phone = $_REQUEST['phone'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$date = $_REQUEST['date'];
$date=date('Y-m-d',strtotime($date));
$doctor = $_REQUEST['hp'];
$availslot = $_REQUEST['availslot'];
session_start();
$userid = $_SESSION['patient'];
$select="select count(*) as rowcount from appointment where pemail='$userid' and app_date='$date'";
//echo $select;
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
if($row[0]!=0){
    echo "exists";
}
else{
    $insert = "INSERT INTO `appointment` VALUES (null,'$name','$phone','$age','$gender','$date','$availslot','$doctor','$userid','booked',null)";
 //echo $insert;
    mysqli_query($conn, $insert);
    echo "Your appointment has been booked.";

}

