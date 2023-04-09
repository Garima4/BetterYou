<?php
include "connection.php";
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$select="select * from help_provider where email='$email' and password='$pass'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    $row=mysqli_fetch_array($res);
    echo "login";
    session_start();
    $_SESSION['helprovider']=$email;
    $_SESSION['hp_id'] = $row[0];
    header("location:hp_home.php");
}
else{
    ECHO "ERROR";
    header("location:login.php?e");
}
