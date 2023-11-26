<?php
include_once("index-connection.php");

$uid=$_GET["txtuid"];

$query="select * from doctors where uid='$uid'";
$table=mysqli_query($dbcon,$query);//1 or 0 possibility
/*if(mysqli_num_rows($table)==0)
	echo "Available for for you,You can take it";
else
	echo "Its already occupied";
*/
?>