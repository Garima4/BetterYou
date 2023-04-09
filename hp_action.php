<?php
include "connection.php";
require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
$email=$_REQUEST['email'];
$name=$_REQUEST['name'];
$cno=$_REQUEST['cno'];
$startime=$_REQUEST['startime'];
$endtime=$_REQUEST['endtime'];
$pass="";
for($i=0;$i<5;$i++){
    $pass.=rand(0,9);
}
echo $pass;

$select="select * from help_provider where email='$email'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    echo "exists";
    header("location:add_hp.php?e=2");
}
else {

$insert="insert into help_provider values(null,'$name','$email','$pass','$cno','$startime-$endtime')";
mysqli_query($conn,$insert);
//email sending code
    $fromEmail = "nodeemailtesting43@gmail.com";
    $toEmail = $email;
    $subjectName = "Your login credentials";

    $str = "Hello, <br/>
Thank you for registering on the Mental Health Portal <br/>
You can login to portal by using your email id and Password. <br/>
Your Password is <strong> $pass </strong><br/> 
You can update your password anytime after login to the portal <br/>
Regards <br/>
Mental Health Portal";
    $message = $str;

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = "nodeemailtesting43@gmail.com";
    $mail->Password = "oarbcjnfpyeeyqhn";
    $mail->setFrom($fromEmail, 'Mental Health Portal');
    $mail->addAddress($toEmail, "Anu Sareen");
    $mail->isHTML(true);
    $mail->Subject = $subjectName;
    $mail->Body = $message;

    $mail->send();

    header("location:add_hp.php?e=1");
}