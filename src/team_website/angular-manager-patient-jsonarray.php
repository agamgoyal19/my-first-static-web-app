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
                $http.get("angular-manager-patient-fetch-all.php").then(okFx, notOk);

                function okFx(response) {
                    $scope.jsonArray = response.data;
                    $scope.selObject = $scope.jsonArray[1]; //point
                    
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

        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:LIGHTBLUE;border-bottom:1px black solid;">
         <a class="navbar-brand" style="margin-left:575px;font-family:serif;"><b>ALL PATIENTS RECORD</b></a>
     </nav></center>
        <br>
        <div>
            <div class="btn btn" ng-click="doFetchAll();" style="margin-left:719px;margin-top:10px;background-color:lightblue;border:1px black solid;">Fetch All Records Of Patients</div>
           
               
            </div>    
       
    <div style="margin-top:-35px;">
          <p style="margin-left:350px;"><b>
                Search:</b> <input type="text" ng-model="googler.uid">
            </p> <br>
        <table class="table table-striped" width="600" border="3" rules="all" style="background-color:skyblue;">
            <tr>
                <th>Sr. No.</th>
                <th ng-click="doSort('uid');"><b>User id</b></th>
                <th ng-click="doSort('name');"><b>Name</b></th>
                <th ng-click="doSort('gender');"><b>Gender</b></th>
                <th ng-click="doSort('age');"><b>Age</b></th>
                <th ng-click="doSort('city');"><b>City</b></th>
                <th ng-click="doSort('email');"><b>Email ID</b></th>
                <th ng-click="doSort('contact');"><b>Contact no.</b></th>
                <th ng-click="doSort('problems');"><b>Problems</b></th>
            </tr>
            <tr ng-repeat="obj in jsonArray |orderBy:colName | filter:googler">
                <td>{{$index+1}}</td>
                <td>{{obj.uid}} </td>
                <td>{{obj.name}}</td>
                <td>{{obj.gender}} </td>
                <td>{{obj.age}} </td>
                <td>{{obj.city}} </td>
                <td>{{obj.email}} </td>
                <td>{{obj.contact}} </td>
                <td>{{obj.problems}} </td>
            </tr>
        </table>
    </div>   
</body>

</html>
