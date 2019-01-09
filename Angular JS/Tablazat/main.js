var app = angular.module("myTable", []);
app.controller("myCtrl", function($scope) {

    $scope.selectedData = []; 
    $scope.records = [
        {
            "Name" : "Kis Zoltán",
            "Email" : "kis.zoltan.cs@gmail.com"
        },
        {
            "Name" : "John Doe",
            "Email" : "john.d@test.com"
        },
        {
            "Name" : "Remek Elek",
            "Email" : "r.elek@test.com"
        },
        {
            "Name" : "Trab Antal",
            "Email" : "trab.ant@test.com"
        },
        {
            "Name" : "Git Áron",
            "Email" : "git.aron@test.com"
        }
    ]

    $scope.addNewRow = function(){
        //console.log("x");
        $scope.records.push({
            "Name" : "",
            "Email" : "",
        });

    };

    $scope.removeRow = function(i) {
        $scope.records.splice(i,1);

    };



    $scope.viewData = function(i) {
        //console.log("x");
        $scope.selectedData[0] = {}  ;
        $scope.selectedData[0].Name = $scope.records[i].Name;
        $scope.selectedData[0].Email = $scope.records[i].Email;

        $scope.modify = function() {
                $scope.records[i] = {};
                $scope.records[i].Name = $scope.selectedData[0].Name;
                $scope.records[i].Email = $scope.selectedData[0].Email;
        };
        
    };
    




});