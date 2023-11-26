<html>

<head>
    <title>Welcome Doctor</title>
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
        function show(file) {

            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(ev) {
                    $('#y').attr('src', ev.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
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
            /*$("#txtuid").blur(function() {
                var uid = $("#txtuid").val();
                $.get("ajax-chk-uid.php?x=" + uid, function(response) {
                    //alert(response);
                    $("#errUid").html(response);
                });
            });*/

            //JSON
            $("#btnFetchProfile").click(function() {
                var uid =$("#txtuid").val();
                var url="doctor-profile-fetch.php?uid="+uid;
                $.getJSON(url, function(jsonArray) {
                    if (jsonArray.length == 0) {
                        alert("Invalid uid");
                        return;
                    }
                    else{
                    $("#txtdname").val(jsonArray[0].dname); //.tableColName
                    $("#txtcontact").val(jsonArray[0].contact);
                    $("#txtspl").val(jsonArray[0].spl);
                    $("#txtqual").val(jsonArray[0].qual);
                    $("#txtstudied").val(jsonArray[0].studied);
                    $("#txtexp").val(jsonArray[0].exp);
                    $("#txthospital").val(jsonArray[0].hospital);
                    $("#txtaddress").val(jsonArray[0].address);
                    $("#txtcity").val(jsonArray[0].city);
                    $("#txtemail").val(jsonArray[0].email);
                    $("#txtwebsite").val(jsonArray[0].website);
                    $("#txtinfo").val(jsonArray[0].info);
                    $("#jasus").val(jsonArray[0].ppic);
                    $("#x").prop("src", "uploads/" + jsonArray[0].ppic).css("border-radius", "50%");
                     $("#jasus2").val(jsonArray[0].cpic);
                    $("#y").prop("src", "uploads/" + jsonArray[0].cpic).css("border-radius", "50%");
                    } });
            });
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
            margin-left:45%;
            margin-top:17%;
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
    <form action="doctor-profile-process.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="jasus" id="jasus">
		<input type="hidden" name="jasus2" id="jasus2">
        
        <div id="andhera"></div>
        <div id="processing"></div>
        <div>
            <center>
                <h2 style="border-bottom:1px black solid;background-color:lightblue;height:40px;"><b style="margin-top:50px;">WELCOME DOCTOR</b></h2>
            </center>
        </div>
        <div style="margin-left:50px;">
            <div class="form-row mt-2">
                <div class="form-group col-md-4" style="margin-left:300px;margin-top:20px;">
                    <label for=""><b>Doctor's uid</b></label>
                    <input type="text" class="form-control" id="txtuid" name="txtuid">
                    <span id="errUid">*</span>
                </div>
                <div class="form-group col-md-2">
                    <div class="form-group" style="margin-top:17.5px;margin-left:18px;">
                        <input type="button" value="FETCH" formaction="php-show-records.php" required class="btn btn form-control" style="margin-top:33px;background-color:skyblue;border:1px black solid;" id="btnFetchProfile">
                    </div>
                </div>
            </div>
            <div class="form-row mt-2" style="margin-left:97px;">
                <div class="form-group col-md-2" style="margin-left:200px;">
                    <label for=""><b>Doctor's name</b></label>
                    <input type="text" class="form-control" id="txtdname" name="txtdname">
                </div>
                <div class="form-group-col-md-2" style="margin-left:26px;">
                    <label for=""><b>Contact Number</b></label>
                    <input type="text" class="form-control" id="txtcontact" name="txtcontact">
                </div>
                <div class="form-group-col-md-2" style="margin-left:21px;">
                    <label for=""><b>Email</b></label>
                    <input type="email" class="form-control" id="txtemail" name="txtemail">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-4" style="margin-left:300px;margin-top:20px;">
                    <label for=""><b>Qualification</b></label>
                    <input type="text" class="form-control" id="txtqual" name="txtqual">
                </div>
                <div class="form-group col-md-2" style="margin-left:20px;margin-top:20px;">
                    <label for=""><b>Specialisation</b></label>
                    <select style="margin-top:1.5px;" id="txtspl" name="txtspl">
                        <option value="Allergists">Allergists</option>
                        <option value="Gastroenterologists">Gastroenterologists</option>
                        <option value="Dermatologists">Dermatologists</option>
                        <option value="Ophthalmologists">Ophthalmologists</option>
                        <option value="Gynecologists">Gynecologists</option>
                        <option value="Cardiologists">Cardiologists</option>
                        <option value="Endocrinologists">Endocrinologists</option>
                        <option value="Nephrologists">Nephrologists</option>
                        <option value="Urologists">Urologists</option>
                        <option value="Pulmonologists">Pulmonologists</option>
                        <option value="Otalaryngologists">Otalaryngologists</option>
                        <option value="Psychatrists">Psychatrists</option>
                        <option value="Oncologists">Oncologists</option>
                        <option value="Radiologists">Radiologists</option>
                        <option value="General surgeons">General surgeons</option>
                        <option value="Orthopedic surgeons">Orthopedic surgeons</option>
                        <option value="Cardiac surgeons"> Cardiac surgeons</option>
                        <option value="Anesthesilogists">Anesthesilogists</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-4" style="margin-left:300px;margin-top:20px;">
                    <label for=""><b>Studied From</b></label>
                    <input type="text" class="form-control" id="txtstudied" name="txtstudied">
                </div>
                <div class="form-group-col-md-2" style="margin-left:20px;margin-top:20px;">
                    <label for=""><b>Work Experience</b></label>
                    <input type="text" class="form-control" id="txtexp" name="txtexp">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-6" style="margin-left:304px;margin-top:20px;">
                    <label for=""><b>Hospital</b></label>
                    <input type="text" class="form-control" id="txthospital" name="txthospital">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-4" style="margin-left:300px;margin-top:20px;">
                    <label for=""><b>Address</b></label>
                    <input type="text" class="form-control" id="txtaddress" name="txtaddress">
                </div>
                <div class="form-group-col-md-2" style="margin-left:20px;margin-top: 20px;">
                    <label for=""><b>City</b></label>
                    <input type="text" class="form-control" id="txtcity" name="txtcity">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="form-group col-md-6" style="margin-left:304px;margin-top:20px;">
                    <label for=""><b>Website</b></label>
                    <input type="text" class="form-control" id="txtwebsite" name="txtwebsite">
                </div>
            </div>
            <div class="form-mt-2">
                <div class="row">
                    <div class="col-md-4">
                        <label for="" style="margin-left:350px;margin-top:20px;"><b>Upload Profile Pic</b></label>
                        <img src="pics/agent.jpg" id="x" width="150" height="150" alt="" style="margin-left:350px;margin-top:10px;">
                    </div>
                    <div class="col-md-4">
                        <label for="" style="margin-left:325px;margin-top:20px;"><b>Upload Certificate Pic</b></label>
                        <img src="pics/agent.jpg" id="y" width="150" height="150" alt="" style="margin-left:325px;margin-top:10px;">
                    </div>
                    <div class="form-group col-md-3" style="margin-left:350px;margin-top:30px;">
                        <input type="file" onchange="showpreview(this);" name="ppic" id="ppic">
                    </div>
                    <div class="form-group col-md-3" style="margin-left:90px;margin-top:30px;">
                        <input type="file" onchange="show(this);" name="cpic" id="cpic">
                    </div>
                </div>
            </div>
            <div>
                <textarea rows="10" cols="92" style="margin-left:305px;margin-top:20px;" id="txtinfo" name="txtinfo"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit" class="btn btn" name="btn" style="margin-left:510px;margin-top:30px;border:1px black solid;background-color:lightblue;">

                <input type="submit" value="Update" class="btn btn" name="btn" style="margin-left:110px;margin-top:30px;border:1px black solid;background-color:lightblue;">
            </div>
        </div>
    </form>
</body>

</html>
