<?php
include "connection.php";
$username=$_REQUEST['username'];
$fname=$_REQUEST['fname'];
$phno=$_REQUEST['phno'];
$email=$_REQUEST['email'];

$update="update admin set fullname='$fname', phone='$phno',email='$email' where email='$email'";
mysqli_query($conn,$update);
header("location:view_admins.php");