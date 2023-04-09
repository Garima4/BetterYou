<?php
include "connection.php";
session_start();
$app_id=$_REQUEST['app_id'];
$hp="select hp_id from appointment where app_id=$app_id";
$hp_res=mysqli_query($conn,$hp);
$hp_row=mysqli_fetch_array($hp_res);
$hp_id=$hp_row[0];

$qselect = "select * from questions where hp_id=$hp_id";
echo $qselect;
$qres = mysqli_query($conn, $qselect);
if (mysqli_num_rows($qres)) {
    while ($qrow = mysqli_fetch_array($qres)) {
        $reply=$_REQUEST["reply$qrow[0]"];
       // echo $reply;
        $update="update replies set answer='$reply' where question=$qrow[0] and patient='".$_SESSION['patient']."'";
        mysqli_query($conn,$update);
        echo $update."<br/>";
        header("location:view_replies.php?q=$app_id");
    }
}
