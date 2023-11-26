<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/angular.min.js"></script>
    <script>
        $module = angular.module("mymod", []);
        $module.controller("mycont", function($scope, $http, $filter) {
            /*{{searchi| date:'yyyy-MM-dd'}}*/
            $scope.searchi;
            $scope.doFetch = function() {
                /*var uid=$("#txtuid").val();
                var dos=$("#dos").val();
                var doe=$("#doe").val();*/
                var dos = $filter('date')($scope.dos, "yyyy-MM-dd");
                var doe = $filter('date')($scope.doe, "yyyy-MM-dd");
                $http.get("angular-bp-history-fetch-all.php?uid=" + $scope.uid + "&dos=" + dos + "&doe=" + doe).then(ok, notok);

                function ok(response) {
                    $scope.arroy = response.data;
                }

                function notok(response) {
                    $scope.arroy = response.data;
                }
            }
            $scope.doSort = function(colm) {
                $scope.colname = colm;
            }
            $scope.doSearch = function() {
                $scope.searchu= $filter('date')($scope.searchi, "yyyy-MM-dd");
            }
        });

    </script>
</head>

<body ng-app="mymod" ng-controller="mycont">
    <center>
       <nav class="navbar navbar-expand-lg navbar-light " style="background-color:LIGHTBLUE;border-bottom:1px black solid;">
         <a class="navbar-brand" style="margin-left:575px;font-family:serif;"><b>HISTORY OF BP</b></a>
     </nav>
       <br>

        <div class="container mt-4 mr-4">
            <div class="row">
                <div class="col-md-4" style="margin-left:50px;">
                    <label for="txtuid" style="margin-left:-125px;" ><b>User-id</b></label><br>
            <input type="text" id="txtuid" name="txtuid" ng-model="uid" value="<?php echo $_SESSION["activeuser"];?>" readonly ng-init="uid='<?php echo $_SESSION["activeuser"]; ?>'">
       
               
                <div class="col-md-4" style="margin-left:285px;margin-top:-63px;">
                    <label for="dos"><b>From Date</b></label><br>
                    <input type="date" ng-model="dos" id="dos" name="dos">
                </div>
                <div class="col-md-4" style="margin-left:485px;margin-top:-63px;">
                    <label for="doe" style="margin-left:-30px;"><b>To Date</b></label><br>
                    <input type="date" ng-model="doe" id="doe" name="doe">
                    </div></div></div>
                <div class="btn btn" ng-click="doFetch();" style="margin-left:545px;margin-top:-60px;background-color:lightblue;border:1px black solid;">FETCH ALL RECORDS</div>
            
       <div style="margin-left:-1200px;">
           <b>Search by Date:</b> <input type="date" ng-model="searchi" ng-change="doSearch()">
            </div>
           <table class="table table-striped" style="width:780px;margin-left:-60px;margin-top:-30px;background-color:lightblue;">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th ng-click="doSort('dateofrecord');">Date of record</th>
                    <th ng-click="doSort('dia');">Diastolic Pressure(low)</th>
                    <th ng-click="doSort('syst');">Systolic Pressure(high)</th>
                   <th ng-click="doSort('pulse');">Pulse</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="obj in arroy|orderBy:colname|filter:searchu">
                    <td>{{$index+1}}</td>
                    <td>{{obj.dateofrecord}}</td>
                    <td>{{obj.dia}}</td>
                    <td>{{obj.syst}}</td>
                    <td>{{obj.pulse}}</td>
                </tr>
            </tbody>
            </table></div>
    </center>

</body>

</html>

                   