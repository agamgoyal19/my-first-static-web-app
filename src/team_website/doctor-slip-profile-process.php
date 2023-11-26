<?php

include_once("index-connection.php");

$patientid=$_POST["txtuid"];
$doctorname=$_POST["txtdoctorname"];
$dovisit=$_POST["txtdovisit"];
$city=$_POST["txtcity"];
$hospital=$_POST["txthospital"];
$problem=$_POST["txtproblem"];
$nextdov=$_POST["txtndov"];
$discussion=$_POST["txtinfo"];
$slippic=$_FILES["spic"]["name"];
$tmpName=$_FILES["spic"]["tmp_name"];
   

move_uploaded_file($tmpName,"uploads/".$slippic);
     
    
$query="insert into slips values(null,'$patientid','$doctorname','$dovisit','$city','$hospital','$problem','$nextdov','$discussion','$slippic')";

mysqli_query($dbcon,$query);//fire query on table in database

$msg=mysqli_error($dbcon);//get error info if any

if($msg=="")
	 echo "Profile record saved successfully";
else
	echo $msg;

?>