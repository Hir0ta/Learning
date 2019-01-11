var app = angular.module("cookieApp", ["ngCookies"]);
app.controller('cookieCtrl', function($scope, $cookies){
    //$scope.active = -1;
    $scope.table = [];
    $scope.mod = [];
    $scope.myJSON;
    var myCookies = $cookies.get("cookie");
    
    if (myCookies !== undefined){
        var obj = JSON.parse(myCookies);
        $scope.table = obj;
        console.log($scope.table) 
    };


    $scope.save = function(name, email, password){
        var data={        
        };
        data.name = $scope.userName;
        data.email = $scope.userMail;
        data.password = $scope.userPassword;
        $scope.table.splice($scope.table.length-1, 0, data);
        //console.log($scope.table);
        $scope.myJSON = JSON.stringify($scope.table); 
        //console.log($scope.myJSON);
        $cookies.put("cookie", $scope.myJSON);
    };
    
});