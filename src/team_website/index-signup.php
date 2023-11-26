<?php


$Uid=$_GET["email"];
$Pass=$_GET["pwd"];
$Mob=$_GET["mob"];
$occupation=$_GET["occupation"];
include_once("index-connection.php");
include_once("sms_ok_sms.php");
$query="insert into users values('$Uid','$Pass','$Mob',NOW(),'$occupation')";

mysqli_query($dbcon,$query);//fire query on table in database

$msg=mysqli_error($dbcon);//get error info if any

if($msg==""){
    $resp=SendSMS($Mob,"You are signed up successfully.Enjoy our website.");
	 echo "Profile Record saved successfully.<br>". $resp;
}
    else{
	echo $msg;
    }
?>



