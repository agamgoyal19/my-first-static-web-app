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

                var uid= $("#txtuid").val();
                var dor = $("#txtdor").val();
                var dia = $("#txtdia").val();
                var syst = $("#txtsyst").val();
                var pulse=$("#txtpulse").val();
                var url = "patient-record-bp-process.php?email=" + uid + "&dor=" + dor + "&dia=" + dia + "&syst=" + syst  + "&pulse=" + pulse;

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
            <div class="container" style="background-color:white;margin-top:60px;width:500px;">
               <nav class="navbar navbar-expand-lg navbar-light " style="background-color:white;border-bottom:1px black solid;">
         <a class="navbar-brand" style="margin-left:160px;font-family:serif;"><b>RECORD BP</b></a>
     </nav>

                <div class="form-row mt-2">
                    <div class="form-group col-md-6">
                        <label for=""><b>Uid</b></label>
                        <input type="text" class="form-control" name="txtuid" id="txtuid" value="<?php echo $_SESSION["activeuser"];?>" readonly>

                    </div>
                    <div class="form-group col-md-6">
                        <label for=""><b>Date of record</b></label>
                        <input type="date" class="form-control" name="txtdor" id="txtdor">
                    </div>
                </div>
                <div class="form-row mt-2">
                    <div class="form-group col-md-6">
                        <label for=""><b>Diastolic</b></label>
                        <input type="text" class="form-control" name="txtdia" id="txtdia">
                    </div>
                    <div class="form-group col-md-6">
                        <label for=""><b>Systolic</b></label>
                        <input type="text" class="form-control" name="txtsyst" id="txtsyst">
                    </div>
                </div>
                <div class="form-row mt-2">
                <div class="form-group col-md-6">
                        <label for=""><b>Pulse</b></label>
                        <input type="text" class="form-control" name="txtpulse" id="txtpulse">
                    </div>
                </div>
                <center>
                    <button type="button" id="btnrecord" class="btn btn" style="margin-bottom:20px;border:1px black solid;background-color:lightblue;">Record</button>

                </center>

            <center>
                <span id="result"></span></center>
            </div>
        </form>
    </div>
</body>

</html>
