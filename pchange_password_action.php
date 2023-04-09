<?php
include "connection.php";
$email=$_REQUEST['email'];
$opass=$_REQUEST['opass'];
$npass=$_REQUEST['npass'];
$cpass=$_REQUEST['cpass'];

$select="select * from patients where password='$opass' and email='$email'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    if($npass == $cpass){
        echo "matched";
        $update="update patients set password='$npaass' where email='$email'";
        mysqli_query($conn,$update);
        header("location:pchange_password.php?err=1");
    }
    else{
        //not matched
        header("location:pchange_password.php?err=2");
    }
}
else{
    header("location:pchange_password.php?err=3");
}