<?php
include_once("index-connection.php");

$uid=$_GET["uid"];

$query="select * from patients where uid='$uid'";
$table=mysqli_query($dbcon,$query);
if(mysqli_num_rows($table)==0)
	echo "Available for you,you can take it";
else
	echo "Id already occupied,try another one.";

?>