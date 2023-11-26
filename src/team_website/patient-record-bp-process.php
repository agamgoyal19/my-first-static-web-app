<?php
//scriptlet
include_once("index-connection.php");

$uid=$_GET["email"];
$dateofrecord=$_GET["dor"];
$dia=$_GET["dia"];
$syst=$_GET["syst"];
$pulse=$_GET["pulse"];
$query="insert into bprecords values('$uid','$dateofrecord','$dia','$syst','$pulse')";

mysqli_query($dbcon,$query);//fire query on table in database

$msg=mysqli_error($dbcon);//get error info if any

if($msg=="")
	 echo "Bp Record saved successfully";
else
	echo $msg;
?>


