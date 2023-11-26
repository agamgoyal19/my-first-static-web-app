<?php
include_once("index-connection.php");

$uid=$_GET["email"];
$dateofrecord=$_GET["dor"];
$time=$_GET["time"];
$sugartime=$_GET["sugartime"];
$age=$_GET["age"];
$sugarresult=$_GET["sugarresult"];
$medintake=$_GET["medintake"];
$urineresult=$_GET["urineresult"];
$query="insert into sugarrecord values('$uid','$dateofrecord','$time','$sugartime','$age','$sugarresult','$medintake','$urineresult')";

mysqli_query($dbcon,$query);//fire query on table in database

$msg=mysqli_error($dbcon);//get error info if any

if($msg=="")
	 echo "Sugar Record saved successfully";
else
	echo $msg;
?>


