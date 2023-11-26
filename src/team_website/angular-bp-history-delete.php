
			<?php

				include_once("index-connection.php");
				$uid=$_GET["uid"];

				$query="delete from bprecords where uid='$uid'";
				mysqli_query($dbcon,$query);//fetching records
					$count=mysqli_affected_rows($dbcon);
				echo $count." Records Deleted";			
			?>
				
		