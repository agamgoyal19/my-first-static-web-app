<?php
session_start();
?>
<html>

<head>
    <title>Welcome Patient</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function showpreview(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    $('#x').attr('src', ev.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }

    </script>
    <script>
        $(document).ready(function() {
                    //==-=-=-=-=-=-=-=-=-=-=-=
                    $(document).ajaxStart(function() {
                        $("#processing").show();
                        $("#andhera").show();
                    });
                    $(document).ajaxStop(function() {
                        $("#processing").hide();
                        $("#andhera").hide();
                    });

    </script>
    <style>
        #processing {
            background-image: url(pics/wait2.gif);
            width: 120px;
            height: 120px;
            border: 1px gray solid;
            background-size: contain;
            position: absolute;
            margin-left: 45%;
            margin-top: 17%;
            z-index: 10;
            display: none;
        }

        #andhera {
            width: 100%;
            height: 100%;
            background-color: darkgray;
            opacity: .5;
            position: absolute;
            z-index: 10;
            display: none;
        }

    </style>
</head>

<body style="background-color:white;">
    <form action="doctor-slip-profile-process.php" method="post" enctype="multipart/form-data">

        <div id="andhera"></div>
        <div id="processing"></div>
       <nav class="navbar navbar-expand-lg navbar-light " style="background-color:LIGHTBLUE;border-bottom:1px black solid;">
         <a class="navbar-brand" style="margin-left:560px;font-family:serif;"><b>DOCTOR'S SUBSCRIPTION</b></a>
     </nav>
        <div style="margin-left:50px;">
            <div class="form-row mt-2">
                <div class="form-group col-md-6" style="margin-left:304px;margin-top:20px;">
                    <label for=""><b>Patients's uid</b></label>
                    <input type="text" class="form-control" id="txtuid" name="txtuid" value='<?php echo $_SESSION["activeuser"]; ?>' readonly>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-4" style="margin-left:304px;margin-top:20px;">
                    <label for=""><b>Doctor's name</b></label>
                    <input type="text" class="form-control" id="txtdoctorname" name="txtdoctorname">
                </div>
                <div class="form-group-col-md-2" style="margin-left:20px;margin-top: 20px;">
                    <label for=""><b> Date Of Visit</b></label>
                    <input type="date" class="form-control" id="txtdovisit" name="txtdovisit">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-4" style="margin-left:304px;margin-top:20px;">
                    <label for=""><b>Hospital</b></label>
                    <input type="text" class="form-control" id="txthospital" name="txthospital">
                </div>
                <div class="form-group-col-md-2" style="margin-left:20px;margin-top: 20px;">
                    <label for=""><b>City</b></label>
                    <input type="text" class="form-control" id="txtcity" name="txtcity">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-4" style="margin-left:304px;margin-top:20px;">
                    <label for=""><b>Problem</b></label>
                    <input type="text" class="form-control" id="txtproblem" name="txtproblem">
                </div>
                <div class="form-group-col-md-2" style="margin-left:20px;margin-top: 20px;">
                    <label for=""><b>Next Date Of Visit</b></label>
                    <input type="date" class="form-control" id="txtndov" name="txtndov">
                </div>
            </div>
            <div class="form-mt-2">
                <div class="row">
                    <div>
                        <textarea rows="10" cols="50" style="margin-left:320px;margin-top:30px;" id="txtinfo" name="txtinfo"></textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="" style="margin-left:72px;margin-top:20px;"><b>Upload Doctor Slip</b></label>
                        <img src="pics/agent.jpg" id="x" width="150" height="150" alt="" style="margin-left:72px;margin-top:10px;">
                    </div>
                    <div class="form-group col-md-3" style="margin-left:765px;margin-top:-30px;">
                        <input type="file" onchange="showpreview(this);" name="spic" id="spic">
                    </div>
                </div>
            </div>

            <div>
                <input type="submit" value="Submit" class="btn btn" name="btn" style="margin-left:650px;margin-top:30px;border:1px black solid;background-color:lightblue;">

            </div>
        </div>
    </form>
</body>

</html>
