<?php
include "connection.php";
$email=$_REQUEST['email'];
$opass=$_REQUEST['opass'];
$npass=$_REQUEST['npass'];
$cpass=$_REQUEST['cpass'];

$select="select * from help_provider where password='$opass' and email='$email'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    if($npass == $cpass){
        echo "matched";
        $update="update help_provider set password='$npass' where email='$email'";
        mysqli_query($conn,$update);
        header("location:hp_changepassword.php?err=1");
    }
    else{
        //not matched
        header("location:hp_changepassword.php?err=2");
    }
}
else{
    header("location:hp_changepassword.php?err=3");
}