<?php
session_start();
?>
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


    <script type='text/javascript'>
       
    </script>

    <script>
        $module = angular.module("mymodule", []);
        $module.controller("mycontroller", function($scope, $http, $filter) {
             $scope.fetchAll = function() {
                var dfrom = $filter('date')($scope.dfrom, "yyyy-MM-dd");
                var dto = $filter('date')($scope.dto, "yyyy-MM-dd");
                $http.get("angular-sugar-history-fetch-all.php?uid=" + $scope.uid + "&dfrom=" + dfrom + "&dto=" + dto).then(Ok, notOk);

                function Ok(response) {
                    $scope.jsonArray = response.data;
                }

                function notOk(response) {
                    alert(response.data);
                }
            }
            $scope.doSort = function(cname) {
                $scope.col = cname;
            }
        })

        $(document).ready(function(){
           $("#konsi").change(function() {
                    if($(this).prop("selectedIndex")==1)
                        {
                            document.getElementById("table1").style.display="contents";
                            document.getElementById("table2").style.display="none";
                            document.getElementById("table3").style.display="none";
                        }
                    if($(this).prop("selectedIndex")==2)
                        {
                            document.getElementById("table1").style.display="none";
                            document.getElementById("table2").style.display="contents";
                            document.getElementById("table3").style.display="none";
                        }
                    if($(this).prop("selectedIndex")==3)
                        {
                            document.getElementById("table1").style.display="none";
                            document.getElementById("table2").style.display="none";
                            document.getElementById("table3").style.display="contents";
                        }
            })
        });

    </script>

    <style>
        th {
            cursor: pointer;
        }
        th:hover{
            background-color:lightblue;
        }
        #tbl {

            display: none;
        }

        #tbl1 {
            display: none;
        }

        #tbl2 {
            display: none;
        }

    </style>

</head>
<body ng-app="mymodule" ng-controller="mycontroller" id="bg">
    <!-- Image and text -->
    
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color:LIGHTBLUE;border-bottom:1px black solid;">
         <a class="navbar-brand" style="margin-left:575px;font-family:serif;"><b>HISTORY OF SUGAR</b></a>
     </nav>
    <br>

    
        <br><label for="txtuid">
    <b style="margin-left:90px;">USER ID:-</b></label>
        <input type="text" placeholder="User ID" ng-model="uid" id="txtuid" name="txtuid" value="<?php echo $_SESSION["activeuser"];?>" readonly ng-init="uid='<?php echo $_SESSION["activeuser"]; ?>'">
        <br>
        <br>
    <b style="margin-left:90px;">FROM DATE:-</b><input type="date" class="ml-1 mr-5" ng-model="dfrom">
    <b>TO DATE:-</b><input type="date" class="ml-1 mr-5" ng-model="dto">
        <div style="margin-left:720px;margin-top:-27px;">
            <b>TEST TYPE:-</b>
            <select id="konsi">
            <option>SELECT</option>
            <option>SUGAR TEST</option>
            <option>URINE TEST</option>
            <option>BOTH</option>
            </select></div>
    <div class="btn btn" ng-click="fetchAll();" style="margin-left:1000px;margin-top:-50px;background-color:lightblue;border:1px black solid;"><b>FETCH</b></div>


        <br>
        <br>
    <center>
        <table id="table1" class="table table-striped" style="width:1200px;background-color:lightblue;" rules="all">
            <tr>
                <th ng-click="doSort('dateofrecord');">DATE</th>
                <th ng-click="doSort('timerecord');">TIME</th>
                <th ng-click="doSort('sugartime');">WHEN</th>
                <th ng-click="doSort('sugarresult');">S-RESULT</th>
            </tr>
            <tr ng-repeat="obj in jsonArray | orderBy:col">
                <td>{{obj.dateofrecord}}</td>
                <td>{{obj.timerecord}}</td>
                <td>{{obj.sugartime}}</td>
                <td>{{obj.sugarresult}}</td>
            </tr>
        </table>
        <table id="table2" class="table table-striped" style="width:1200px;background-color:lightblue;" rules="all">
            <tr>
                <th ng-click="doSort('dateofrecord');">DATE</th>
                <th ng-click="doSort('timerecord');">TIME</th>
                <th ng-click="doSort('medintake');">MEDICINAL INTAKE</th>
                <th ng-click="doSort('urineresult');">U-RESULT</th>
            </tr>
            <tr ng-repeat="obj in jsonArray | orderBy:col">
                <td>{{obj.dateofrecord}}</td>
                <td>{{obj.timerecord}}</td>
                <td>{{obj.medintake}}</td>
                <td>{{obj.urineresult}}</td>
            </tr>
        </table>
        <table id="table3" class="table table-striped" style="width:1200px;background-color:lightblue;" rules="all">
            <tr>
                <th ng-click="doSort('dateofrecord');">DATE</th>
                <th ng-click="doSort('timerecord');">TIME</th>
                <th ng-click="doSort('sugartime');">WHEN</th>
                <th ng-click="doSort('sugarresult');">S-RESULT</th>
                <th ng-click="doSort('medintake');">MEDICINAL INTAKE</th>
                <th ng-click="doSort('urineresult');">U-RESULT</th>
            </tr>
            <tr ng-repeat="obj in jsonArray | orderBy:col">
                <td>{{obj.dateofrecord}}</td>
                <td>{{obj.timerecord}}</td>
                <td>{{obj.sugartime}}</td>
                <td>{{obj.sugarresult}}</td>
                <td>{{obj.medintake}}</td>
                <td>{{obj.urineresult}}</td>
            </tr>
        </table>
    </center>
</body>


</html>
