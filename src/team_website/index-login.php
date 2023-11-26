<?php
session_start();
include_once("index-connection.php");
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];

$query="select * from users where Uid='$uid' and Pass='$pwd'";
$table=mysqli_query($dbcon,$query);
$row=mysqli_fetch_array($table);
if(mysqli_num_rows($table)==0)
    echo "Unauthorized";
else
{
    $_SESSION["activeuser"]=$uid;
    echo $row["occupation"];
}
?>