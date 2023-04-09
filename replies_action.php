<?php
session_start();
$pemail=$_SESSION['patient'];
include "connection.php";
$app_id=$_REQUEST['hp_id'];
$email=$_SESSION['patient'];
$select="select hp_id from appointment where app_id=$app_id";
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
$flag=0;
$qselect="select * from questions where hp_id=$row[0]";
$qres=mysqli_query($conn,$qselect);
while($qrow=mysqli_fetch_array($qres)){
    $reply=$_REQUEST["reply$qrow[0]"];
    $rselect="select * from replies where question=$qrow[0] and patient='$pemail'";
    $rres=mysqli_query($conn,$rselect);
    if(mysqli_num_rows($rres)){
        $flag=1;
        break;
    }
    else{
        $insert="insert into replies(answer,question,patient) values('$reply',$qrow[0],'$email')";
        mysqli_query($conn,$insert);
    }

}
if($flag==1){
        header("location:give_replies.php?q=$app_id&e=1");
}
else{
    header("location:view_replies.php");
}
