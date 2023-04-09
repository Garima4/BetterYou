<?php
session_start();
session_destroy();
if($_REQUEST['q']=="patient"){
    $_SESSION['patient'] =null;
    header("location:login.php");
}
elseif ($_REQUEST['q'] =="admin"){
    $_SESSION['admin'] =null;
    header("location:adminlogin.php");
}
else{
    $_SESSION['helprovider'] = null;
    header("location:hp_login.php");
}