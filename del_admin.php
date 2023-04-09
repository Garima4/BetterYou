<?php
include "connection.php";
$username=$_REQUEST['q'];
mysqli_query($conn,"delete from admin where username='".$username."'");
header("location:view_admins.php");
