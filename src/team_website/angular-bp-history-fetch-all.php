<?php
include_once("index-connection.php");
$uid=$_GET["uid"];
$dos=$_GET["dos"];
$doe=$_GET["doe"];
$query="select * from bprecords where uid='$uid' AND dateofrecord>='$dos' AND dateofrecord<='$doe'";
$table=mysqli_query($dbcon,$query);
$aray=array();
while($row=mysqli_fetch_array($table))
{
    $aray[]=$row;
}
echo json_encode($aray);
?>
