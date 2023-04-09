<?php
include "connection.php";
$did = $_REQUEST['q'];
$app_date=$_REQUEST['dt'];
$select = "select * from help_provider where id=$did";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
$timeslot = $row['available_hours'];
$arr = explode("-", $timeslot);
$start = $arr[0];
$end = $arr[1];
$count = 0;
$slotarray = [];
while ($start < $end) {
    $slotarray[$count] = $start . ":00";
    $count++;
    $start++;
}
$slotarray[$count] = $end;
//print_r($slotarray);
$newid=0;
$getprevslot = "select max(app_id),time_slot from appointment where hp_id=$did and app_date='$app_date'";
//echo $getprevslot;
$gpsres = mysqli_query($conn, $getprevslot);
if(mysqli_num_rows($gpsres)){
    $gpsrow=mysqli_fetch_array($gpsres);
    for ($k = 0; $k < count($slotarray); $k++) {
        if ($slotarray[$k] == $gpsrow['time_slot']) {
            $newid = $k + 1;
            $availtimeslot = $slotarray[$newid];
            //echo $availtimeslot;
        }
        else{
            $availtimeslot = $slotarray[$newid];
            //echo $availtimeslot;
            //$availtimeslot = $slotarray[0];
        }
    }
}
else{
    $availtimeslot = $slotarray[$newid];
}
echo $availtimeslot;
