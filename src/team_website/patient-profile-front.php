<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function()
						  {
			$(document).ajaxStart(function(){
				$("#processing").show();
				$("#andhera").show();
			});
			$(document).ajaxStop(function(){
								$("#processing").hide();
								$("#andhera").hide();
			});
			
			
			
			$("#txtuid").blur(function(){
				var uid=$("#txtuid").val();
				$.get("patient-chk-uid.php?uid="+uid,function(response){
					$("#errUid").html(response);
				});
			});
			
			//JSON
			$("#btnFetchProfile").click(function(){
				var uid=$("#txtuid").val();
				var url="patient-profile-fetch.php?uid="+uid;
				$.getJSON(url,function(jsonArray){
					if(jsonArray.length==0)
						{
							alert("Invalid uid"); return;
						}
					//alert(JSON.stringify(jsonArray));
					$("#txtname").val(jsonArray[0].name);//.tableColName
					$("#txtgender").val(jsonArray[0].gender);
					$("#txtage").val(jsonArray[0].age);
                    $("#txtaddress").val(jsonArray[0].address);
                    $("#txtcity").val(jsonArray[0].city);
			        $("#txtemail").val(jsonArray[0].email);
                    $("#txtcontact").val(jsonArray[0].contact);
                    $("#txtproblem").val(jsonArray[0].problems);
				});
			});
		});
	
	</script>
	<style>
	
		#processing{
			background-image: url(pics/wait2.gif);
			width: 120px; height: 120px;
			border:1px gray solid;
			background-size: contain;
			position: absolute;
			margin-left:620px;
			margin-top:250px;
			z-index: 10;
			display: none;
		}
		#andhera{
			width: 100%; height: 100%; background-color: darkgray; opacity: .5;
			position: absolute; z-index: 10;
			display: none;
		}
	</style>
</head>

<body>

<div id="andhera"></div>
<div id="processing"></div>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light " style="background-color:lightblue;border-bottom:1px black solid;margin-left:-130px;margin-right:-130px;">
         <a class="navbar-brand" style="margin-left:570px;"><b>WELCOME PATIENT</b></a>
     </nav>
        <br>
      
		<form action="patient-profile-process.php" method="post" enctype="multipart/form-data">
			<div class="form-row">
				<div class="col-md-4 form-group">
                    <label for=""><b>User id</b></label>
					<input type="text" id="txtuid" required class="form-control" name="txtuid" value="<?php echo $_SESSION["activeuser"];?>" readonly>
					<span id="errUid">*</span>
				</div>
				<div class="col-md-2 form-group">
					<label for="">&nbsp;</label>
					<input type="button" id="btnFetchProfile" required class="form-control btn btn" value="Fetch Profile" style="background-color:lightblue;border:1px black solid;">

				</div>
				<div class="col-md-6 form-group" >
                    <label for=""><b>Name</b></label>
					<input type="text" required class="form-control" name="txtname" id="txtname">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 form-group mt-4">
                    <label for=""><b>Gender:</b></label>
					<select name="txtgender" id="txtgender">
					    <option value="select">Select</option>
					    <option value="male">Male</option>
					    <option value="female">Female</option>
					    <option value="other">Other</option>
					   </select>
				</div>
				<div class="col-md-6 form-group">
                    <label for=""><b>Age</b></label>
					<input type="text" class="form-control" name="txtage" id="txtage">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 form-group">
                    <label for=""><b>Address</b></label>
					<input type="text" id="txtaddress" required class="form-control" name="txtaddress" >
				</div>
				
				<div class="col-md-6 form-group" >
                    <label for=""><b>City</b></label>
					<input type="text" required class="form-control" name="txtcity" id="txtcity" >
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 form-group">
                    <label for=""><b>Email Id</b></label>
					<input type="email" id="txtemail" required class="form-control" name="txtemail" >
				</div>
				
				   <div class="col-md-6 form-group">
                       <label for=""><b>Contact Number</b></label>
					<input type="text" class="form-control" name="txtcontact" id="txtcontact" >
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12 form-group">
              <label for=""><b>Health Issues Faced</b></label>
               <textarea name="txtproblem" id="txtproblem" cols="155" rows="5">
                   
               </textarea>
                
                </div>
            </div>


			<div class="form-row">
				<div class="col-md-12">
					
						<input type="submit" value="Signup" name="btn" class="btn btn" style="width:100px;margin-left:380px;border:1px black solid;background-color:lightblue;">
						
						<input type="submit" value="Update" name="btn" class="btn btn" style="width:100px;margin-left:160px;border:1px black solid;background-color:lightblue;">
						
					
				</div>
			</div>
		</form>
        </div>
</body>

</html>
