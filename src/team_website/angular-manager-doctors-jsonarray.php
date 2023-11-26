<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-1.8.2.min.js"></script>


    <script src="js/bootstrap.min.js"></script>


    <script src="js/angular.min.js"></script>
    <script>
        $module = angular.module("mymodule", []);
        $module.controller("mycontroller", function($scope, $http) {
            $scope.jsonArray;

            $scope.doFetchAll = function() {
                //sending JSON request
                $http.get("angular-manager-doctors-fetch-all.php").then(okFx, notOk);

                function okFx(response) {
                    $scope.jsonArray = response.data;
                    $scope.selObject = $scope.jsonArray[1]; //point
                    
                }

                function notOk(response) {
                    alert(response.data);
                }
            }

            $scope.doDelete = function(uid) {
                $http.get("angular-manager-doctors-delete.php?uid=" + uid).then(okFx, notOk);

                function okFx(response) {
                   
                    $scope.doFetchAll();

                    //alert(JSON.stringify(response.data));//data==jsonArray
                }

                function notOk(response) {
                    alert(response.data);
                }
            }

            $scope.doSort = function(colm) {
                $scope.colName = colm;
            }

            //=======
            $scope.selObject;
            $scope.doShow = function() {
                alert($scope.selObject.uid);
            }

        });

    </script>
    <style>
        th {
            cursor: pointer;
        }

        th:hover {
            background-color:lightblue;
        }

    </style>
</head>

<body ng-app="mymodule" ng-controller="mycontroller">




    <center>

        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:LIGHTBLUE;border-bottom:1px black solid;margin-right:-200px;">
         <a class="navbar-brand" style="margin-left:575px;font-family:serif;"><b>ALL DOCTORS RECORD</b></a>
     </nav></center>
        <br>
        <div>
            <div class="btn btn" ng-click="doFetchAll();" style="margin-left:750px;margin-top:10px;background-color:lightblue;border:1px black solid;">Fetch All Records</div>
           
               
            </div>    
       
    <div style="margin-top:-35px;">
          <p style="margin-left:350px;"><b>
                Search:</b> <input type="text" ng-model="googler.uid">
            </p> <br>
        <table class="table table-striped" width="100" border="3" rules="all" style="background-color:skyblue;">
            <tr>
                <th>Sr. No.</th>
                <th ng-click="doSort('uid');"><b>User id</b></th>
                <th ng-click="doSort('dname');"><b>Doctor's name</b></th>
                <th ng-click="doSort('contact');"><b>Contact no.</b></th>
                <th ng-click="doSort('spl');"><b>Specialisation</b></th>
                <th ng-click="doSort('qual');"><b>Qualification</b></th>
                <th ng-click="doSort('studied');"><b>Studied From</b></th>
                <th ng-click="doSort('exp');"><b>Experience</b></th>
                <th ng-click="doSort('hospital');"><b>Hospital</b></th>
                <th ng-click="doSort('address');"><b>Address</b></th>
                <th ng-click="doSort('city');"><b>City</b></th>
                <th ng-click="doSort('email');"><b>Email ID</b></th>
                <th ng-click="doSort('website');"><b>Website</b></th>
                <th ng-click="doSort('ppic');"><b>Profile pic</b></th>
                <th ng-click="doSort('cpic');"><b>Certificate pic</b></th>
                <th ng-click="doSort('info');"><b>Additional Information</b></th>
                <th>Operations</th>
            </tr>
            <tr ng-repeat="obj in jsonArray |orderBy:colName | filter:googler">
                <td>{{$index+1}}</td>
                <td>{{obj.uid}} </td>
                <td>{{obj.dname}}</td>
                <td>{{obj.contact}} </td>
                <td>{{obj.spl}} </td>
                <td>{{obj.qual}} </td>
                <td>{{obj.studied}} </td>
                <td>{{obj.exp}} </td>
                <td>{{obj.hospital}} </td>
                <td>{{obj.address}} </td>
                <td>{{obj.city}} </td>
                <td>{{obj.email}} </td>
                <td>{{obj.website}} </td>
                <td>{{obj.ppic}} </td>
                <td>{{obj.cpic}} </td>
                <td>{{obj.info}} </td>
                <td align="center"><input type="button" value="Delete" ng-click="doDelete(obj.uid);"> </td>
            </tr>
        </table>
    </div>   
</body>

</html>
