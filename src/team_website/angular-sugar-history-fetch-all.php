<?php
include_once("index-connection.php");
$uid=$_GET["uid"];
$df=$_GET["dfrom"];
$dt=$_GET["dto"];
$query="select * from sugarrecord where uid='$uid' and dateofrecord>='$df' and dateofrecord<='$dt'";
$table=mysqli_query($dbcon,$query);
$aray=array();
while($row=mysqli_fetch_array($table))
{
    $aray[]=$row;
}
echo json_encode($aray);
?>
