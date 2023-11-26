<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel=stylesheet href='css/bootstrap.min.css'>

    <script src='js/jquery-1.8.2.min.js'></script>

    <script src='js/bootstrap.min.js'></script>

    <script src='js/angular.min.js'></script>

    <script>
        $module = angular.module("mymodule", []);
        $module.controller("mycontroller", function($scope, $http) {
            $scope.jsonAry;
            $scope.selObj;
            $scope.doFind = function() {
                $http.get("doctor-cities-process.php").then(ok, notok);

                function ok(response) {
                    //  alert(JSON.stringify(response.data));
                    $scope.jsonAry = response.data;
                    $scope.selObj = $scope.jsonAry[1]; //point
                }

                function notok(response) {
                    alert(response.data);
                }
            }
            $scope.doShow = function() {
                //alert($scope.selObj.city);
            }

            $scope.doFind2 = function() {
                $http.get("doctor-all-process.php?city=" + $scope.selObj.city).then(ok, notok);

                function ok(response) {
                    //alert(JSON.stringify(response.data));
                    $scope.jsonAry2 = response.data;

                }

                function notok(response) {
                    alert(response.data);
                }
            }
        });

    </script>

</head>

<body ng-app='mymodule' ng-controller='mycontroller' ng-init="doFind();">
    <div class='container'>
         <nav class="navbar navbar-expand-lg navbar-light " style="background-color:LIGHTBLUE;border-bottom:1px black solid;margin-left:-130px;margin-right:-130px;">
         <a class="navbar-brand" style="margin-left:575px;font-family:serif;"><b>SEARCH DOCTORS</b></a>
     </nav>
        <div class='row'>
            <div class='col-md-4 mt-5'>
                <label>
                    <h2><small>Select City</small></h2>
                </label>
                <select class="custom-select" ng-options="obj.city for obj in jsonAry" ng-change='doShow();' ng-model='selObj'></select>
            </div>
            <div class='col-md-2' style="margin-top:100px;">
                <input type='button' class='form-control btn btn' style="background-color:lightblue;border:1px black solid;" value='Search' ng-click='doFind2();'>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3 mt-3" ng-repeat="obj in jsonAry2 | orderBy:cname | filter:googler">
                <div class="card">
                    <img src="uploads/{{obj.ppic}}" height='135' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{obj.dname}}</h5>
                        <p class="card-text">{{obj.spl}}</p>
                        <p class="card-text">{{obj.qual}}</p>
                        <p class="card-text">{{obj.hospital}}</p>
                        <p class="card-text">{{obj.address}}</p>
                        <!--                        <p class="card-text">City: {{obj.city}}</p>-->
                        <p class="card-text">Contact: {{obj.contact}}</p>
                        <!--                        <a href="#" class="btn btn-primary" ng-click="doDelete(obj.uid);">Delete</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
