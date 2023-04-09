<?php
include "connection.php";
$username=$_REQUEST['username'];
$pass=$_REQUEST['pass'];

$select="select * from admin where username='$username' and pass='$pass'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    echo "matched";
    session_start();
    $_SESSION['admin']=$username;
    header("location:admin_home.php");
}
else{
    echo "not matched";
    header("location:adminlogin.php?e");
}