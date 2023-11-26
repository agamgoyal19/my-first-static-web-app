<?php

include_once("index-connection.php");

$btn=$_POST["btn"];
if($btn=="Signup")
{
	doSignup($dbcon);
}
else
	if($btn=="Update")
	{
		doUpdate($dbcon);
	}

function doUpdate($dbcon)
{
$uid=$_POST["txtuid"];
$name=$_POST["txtname"];
$gender=$_POST["txtgender"];
$age=$_POST["txtage"];
$address=$_POST["txtaddress"];
$city=$_POST["txtcity"];
$email=$_POST["txtemail"];
$contact=$_POST["txtcontact"];
$problem=$_POST["txtproblem"];


		$query="update patients set name='$name',gender='$gender',age='$age',address='$address',city='$city',email='$email',contact='$contact',problems='$problem' where uid='$uid'";//seq. of columns should be same table seq.

		mysqli_query($dbcon,$query);//fire query on table in database

		$msg=mysqli_error($dbcon);//get error info if any

		if($msg=="")
			 echo "Updated successfully";
		else
			echo $msg;
}
function doSignup($dbcon)
{
$uid=$_POST["txtuid"];
$name=$_POST["txtname"];
$gender=$_POST["txtgender"];
$age=$_POST["txtage"];
$address=$_POST["txtaddress"];
$city=$_POST["txtcity"];
$email=$_POST["txtemail"];
$contact=$_POST["txtcontact"];
$problems=$_POST["txtproblem"];

$query="insert into patients values('$uid','$name','$gender','$age','$address','$city','$email','$contact','$problems')";

mysqli_query($dbcon,$query);

$msg=mysqli_error($dbcon);

if($msg=="")
	 echo "Profile Record saved successfully";
else
	echo $msg;
}
?>
