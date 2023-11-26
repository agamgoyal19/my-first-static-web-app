<?php
session_start();
if(isset($_SESSION["activeuser"])==false)
{
    header("location:index-front.php");
}
?>
<html>

<head>
    <title>Patient's Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body style="background-color:lightblue;">
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:white;border-bottom:1px black solid;">
        <a class="navbar-brand" href="#" style="margin-left:575px;font-family:serif;"><b>PATIENT'S DASHBOARD</b></a>
         <div>
        <div class="button" style="width:300px;">
                           <a href="logout.php" class="btn btn" style="background-color:lightblue;border:1px black solid;margin-left:400px;">LOGOUT</a>

             </div>
        <div class="button" style="width:350px;margin-left:80px;margin-top:-3px;">
                           <a href="doctor-search-front.php" class="btn btn" style=";background-color:lightblue;border:1px black solid;margin-left:110px;margin-top:-35px;">SEARCH FOR DOCTORS</a>

        </div>
    </div>
    </nav>
    <div>
        <div class="card" style="width:300px;margin-left:100px;margin-top:50px;border:1px black solid;">
            <img src="pics/patientprofile" height="250" width="50" class="card-img-top" style="border-bottom:1px black solid;">
            <div class="card-body">
                <a href="patient-profile-front.php" class="btn btn" style="margin-left:50px;background-color:lightblue;border:1px black solid;">PATIENT'S PROFILE</a>
            </div>
        </div>
        <div class="card" style="width:300px;margin-left:560px;margin-top:-329px;border:1px black solid;">
            <img src="pics/doctorslip.jpg" height="250" class="card-img-top" style="border-bottom:1px black solid;">
            <div class="card-body">
                <a href="doctor-slip-profile-front.php" class="btn btn" style="margin-left:65px;background-color:lightblue;border:1px black solid;">DOCTOR'S SLIP</a>
            </div>
        </div>
        <div class="card" style="width:300px;margin-left:1000px;margin-top:-330px;border:1px black solid;">
            <img src="pics/bp1.jpg" height="250" width="50" class="card-img-top" style="border-bottom:1px black solid;">
            <div class="card-body">
                <a href="patient-record-bp-front.php" class="btn btn" style="margin-left:65px;background-color:lightblue;border:1px black solid;">RECORD BP</a>
            </div>
        </div></div>
    <div>
        <div class="card" style="width:300px;margin-left:100px;margin-top:50px;border:1px black solid;">
            <img src="pics/sugar1.jpg" height="250" class="card-img-top" style="border-bottom:1px black solid;">
            <div class="card-body">
                <a href="patient-record-sugar-front.php" class="btn btn" style="margin-left:55px;background-color:lightblue;border:1px black solid;">RECORD SUGAR</a>
            </div>
        </div>
        <div class="card" style="width:300px;margin-left:560px;margin-top:-330px;border:1px black solid;margin-bottom:10px;">
            <img src="pics/bphistory.jpg" height="250" width="50" class="card-img-top" style="border-bottom:1px black solid;">
            <div class="card-body">
                <a href="angular-bp-history-jsonarray.php" class="btn btn" style="margin-left:65px;background-color:lightblue;border:1px black solid;">BP HISTORY</a>
            </div>
        </div>
        <div class="card" style="width:300px;margin-left:1000px;margin-top:-340px;border:1px black solid;margin-bottom:10px;">
            <img src="pics/sugarhistory.jpg" height="250" width="50" class="card-img-top" style="border-bottom:1px black solid;">
            <div class="card-body">
                <a href="angular-sugar-history-jsonarray.php" class="btn btn" style="margin-left:65px;background-color:lightblue;border:1px black solid;">SUGAR HISTORY</a>
            </div>
        </div>
    </div>
   
</body>

</html>
