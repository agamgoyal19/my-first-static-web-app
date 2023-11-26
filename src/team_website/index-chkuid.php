<?php
include_once("index-connection.php");
$uid=$_GET["email"];
$query="select * from users where Uid='$uid'";
$table=mysqli_query($dbcon,$query);
$rows=mysqli_num_rows($table);
if($rows==0)
{
    echo"Available";
}
else{
    echo"Username already Taken!";
}
?>
