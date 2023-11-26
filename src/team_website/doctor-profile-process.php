<?php

include_once("index-connection.php");

$btn=$_POST["btn"];
if($btn=="Submit")
{
	doSubmit($dbcon);
}
else
	if($btn=="Update")
	{
		doUpdate($dbcon);
	}

function doUpdate($dbcon)
{
			$uid=$_POST["txtuid"];
		$dname=$_POST["txtdname"];
		$contact=$_POST["txtcontact"];
		$spl=$_POST["txtspl"];
    $qual=$_POST["txtqual"];
    $studied=$_POST["txtstudied"];
    $exp=$_POST["txtexp"];
    $hospital=$_POST["txthospital"];
    $address=$_POST["txtaddress"];
    $city=$_POST["txtcity"];
    $email=$_POST["txtemail"];
    $website=$_POST["txtwebsite"];
    
	//2 possibilites: 1.empty  2. not-empty 
		$ppic=$_FILES["ppic"]["name"];//empty string
		$tmpName=$_FILES["ppic"]["tmp_name"];//empty string
	
		$jasus=$_POST["jasus"];//never empty
	    
	if($ppic=="")
	{
		//user did not change the pic
		$fileName=$jasus;
	}
	else
	{
		//user changed the the pic
		$fileName=$ppic;
		move_uploaded_file($tmpName,"uploads/".$ppic);
	}
    $cpic=$_FILES["cpic"]["name"];
        $tmpName=$_FILES["cpic"]["tmp_name"];
        $jasus2=$_POST["jasus2"];
	if($cpic=="")
	{
		//user did not change the pic
		$fileName1=$jasus2;
	}
	else
	{
		//user changed the the pic
		$fileName1=$cpic;
		move_uploaded_file($tmpName,"uploads/".$cpic);
	}

		$info=$_POST["txtinfo"];

		$query="update doctors set dname='$dname',contact='$contact',spl='$spl',qual='$qual',studied='$studied',exp='$exp',hospital='$hospital',address='$address',city='$city',email='$email',website='$website',ppic='$fileName',cpic='$fileName1',info='$info' where uid='$uid'";//seq. of columns should be same table seq.

		mysqli_query($dbcon,$query);//fire query on table in database

		$msg=mysqli_error($dbcon);//get error info if any

		if($msg=="")
			 echo "Profile Record Updated successfully";
		else
			echo $msg;
}
function doSubmit($dbcon)
{
$uid=$_POST["txtuid"];
		$dname=$_POST["txtdname"];
		$contact=$_POST["txtcontact"];
		$spl=$_POST["txtspl"];
    $qual=$_POST["txtqual"];
    $studied=$_POST["txtstudied"];
    $exp=$_POST["txtexp"];
    $hospital=$_POST["txthospital"];
    $address=$_POST["txtaddress"];
    $city=$_POST["txtcity"];
    $email=$_POST["txtemail"];
    $website=$_POST["txtwebsite"];
   
$ppic=$_FILES["ppic"]["name"];
$tmpName=$_FILES["ppic"]["tmp_name"];
   

move_uploaded_file($tmpName,"uploads/".$ppic);
     $cpic=$_FILES["cpic"]["name"];
$tmpName=$_FILES["cpic"]["tmp_name"];
move_uploaded_file($tmpName,"uploads/".$cpic);
     $info=$_POST["txtinfo"];
$query="insert into doctors values('$uid','$dname','$contact','$spl','$qual','$studied','$exp','$hospital','$address','$city','$email','$website','$ppic','$cpic','$info')";//seq. of columns should be same table seq.

mysqli_query($dbcon,$query);//fire query on table in database

$msg=mysqli_error($dbcon);//get error info if any

if($msg=="")
	 echo "Profile Record saved successfully";
else
	echo $msg;
}
?>
