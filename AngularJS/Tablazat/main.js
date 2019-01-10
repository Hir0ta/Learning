var app = angular.module("myTable", []);
app.controller("myCtrl", function($scope) {
    $scope.active = -1;
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
        $scope.records.push({
            "Name" : "",
            "Email" : "",
        });
        $scope.viewData($scope.records.length-1);
    };

    $scope.removeRow = function(i) {
        $scope.records.splice(i,1);
        $scope.active = -1;

    };

    $scope.viewData = function(i) {
        $scope.active = i;
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