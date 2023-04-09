<?php
include "connection.php";
$username=$_REQUEST['username'];
$fname=$_REQUEST['fname'];
$pass=$_REQUEST['pass'];
$phno=$_REQUEST['phno'];
$email=$_REQUEST['email'];
$select="select * from admin where username='$username'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    echo "exists";
    header("location:add_admin.php?err=1");
}
else{
    $insert="insert into admin values('$username','$pass','$fname','$phno','$email')";
    mysqli_query($conn,$insert);
    header("location:add_admin.php?err=2");
}