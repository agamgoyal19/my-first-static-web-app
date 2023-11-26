<?php
include_once("index-connection.php");
include_once("sms_ok_sms.php");
$uid=$_GET["uid"];
$query="select * from users where Uid='$uid'";
$table=mysqli_query($dbcon,$query);
$row=mysqli_fetch_array($table);
if(mysqli_num_rows($table)==0)
    echo "No user exist with this Uid";
else
    {
        $resp=SendSMS($row["Mob"],"Password :- ".$row["Pass"]);
        echo "Sent to your registered number.<br>".$resp;
    }
?>