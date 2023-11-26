<?php

				include_once("index-connection.php");
				$query="select distinct city from doctors";
				$table=mysqli_query($dbcon,$query);//fetching records
					
				$ary=array();	
				while($row=mysqli_fetch_array($table))//it returns a row at a time
				{
					$ary[]=$row;
				}
			echo json_encode($ary);
			
			?>
