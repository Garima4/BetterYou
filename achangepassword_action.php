<?php
include "connection.php";
$username=$_REQUEST['username'];
$opass=$_REQUEST['opass'];
$npass=$_REQUEST['npass'];
$cpass=$_REQUEST['cpass'];

$select="select * from admin where pass='$opass' and username='$username'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    if($npass == $cpass){
        echo "matched";
        $update="update admin set pass='$npass' where username='$username'";
        mysqli_query($conn,$update);
        header("location:achangepassword.php?err=1");
    }
    else{
        //not matched
        header("location:achangepassword.php?err=2");
    }
}
else{
    header("location:achangepassword.php?err=3");
}