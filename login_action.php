<?php

include "connection.php";
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$select="select * from patients where email='$email' and password='$pass'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    echo "login";
    session_start();
    $_SESSION['patient']=$email;
    header("location:patient_home.php");
}
else{
    ECHO "ERROR";
    header("location:login.php?e");
}
