<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#btnrecord").click(function() {

                var uid = $("#txtuid").val();
                var dor = $("#txtdor").val();
                var time = $("#txttime").val();
                var sugartime = $("#txtsugartime").val();
                var age = $("#txtage").val();
                var sugarresult = $("#txtsugarresult").val();
                var medintake = $("#txtmedintake").val();
                var urineresult = $("#txturineresult").val();
                var url = "patient-record-sugar-process.php?email=" + uid + "&dor=" + dor + "&time=" + time + "&sugartime=" + sugartime + "&age=" + age + "&sugarresult=" + sugarresult + "&medintake=" + medintake + "&urineresult=" + urineresult;

                $.get(url, function(response) {
                    $("#result").html(response);

                });
            });
        });

    </script>
</head>

<body style="background-color:skyblue;">
    <div class="modal-body">
        <form>
            <div class="container" style="background-color:white;margin-top:-20px;width:800px;">
                <nav class="navbar navbar-expand-lg navbar-light " style="background-color:white;border-bottom:1px black solid;">
         <a class="navbar-brand" style="margin-left:290px;font-family:serif;"><b>RECORD SUGAR</b></a>
     </nav>
                <div class="form-row mt-2">
                    <div class="form-group col-md-6">
                        <label for="txtuid"><b>User Id</b></label>
                        <input type="text" class="form-control" name="txtuid" id="txtuid" ng-model="uid" value="<?php echo $_SESSION["activeuser"];?>" readonly ng-init="uid='<?php echo $_SESSION["activeuser"]; ?>'">

                    </div>
                    <div class="form-group col-md-6">
                        <label for=""><b>Date of record</b></label>
                        <input type="date" class="form-control" name="txtdor" id="txtdor">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-md-6">
                        <label for=""><b>Time</b></label>
                        <input type="time" class="form-control" name="txttime" id="txttime">
                    </div>
                </div>
                <fieldset class="border border-dark p-4">
                    <legend class="w-auto"><b>BLOOD SUGAR</b></legend>
                    <div class="form-row mt-2">
                        <div class="form-group col-md-12">
                            <label for=""><b>Duration</b></label>
                            <select class="custom-select" name="txtsugartime" id="txtsugartime">
                                <option disabled selected>Select Sugartime</option>
                                <option>After Meal</option>
                                <option>Before Meal</option>
                                <option>Before Exercise</option>
                                <option>Bedtime</option>
                                <option>Fasting</option>
                                <option>After Exercise</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="form-group col-md-6">
                            <label for=""><b>Age</b></label>
                            <input type="text" class="form-control" name="txtage" id="txtage">
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""><b>Result</b></label>
                            <input type="text" class="form-control" name="txtsugarresult" id="txtsugarresult">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border border-dark p-4">
                    <legend class="w-auto"><b>URINE SUGAR</b></legend>
                    <div class="form-row mt-2">
                        <div class="form-group col-md-6">
                            <label for=""><b>Medicinal Intake</b></label>
                            <input type="text" class="form-control" name="txtmedintake" id="txtmedintake">
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""><b>Result</b></label>
                            <input type="text" class="form-control" name="txturineresult" id="txturineresult">
                        </div>
                    </div>
                </fieldset>
                <br>

                <center>
                    <button type="button" id="btnrecord" class="btn btn" style="margin-bottom:20px;border:1px black solid;background-color:skyblue;">Record</button>

                </center>

                <center>
                    <span id="result"></span></center>
            </div>
        </form>
    </div>
</body>

</html>
