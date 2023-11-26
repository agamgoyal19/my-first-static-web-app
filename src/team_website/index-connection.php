<?php
	$dbcon= mysqli_connect("localhost","root","","db2020");
	$msg=mysqli_connect_error();//if no error it gives ""- empty string
if($msg=="")
	echo "Connected Successfully";
else
	echo $msg;


?>