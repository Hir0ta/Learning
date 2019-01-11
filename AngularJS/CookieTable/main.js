var app = angular.module("cookieApp", ["ngCookies"]);
app.controller('cookieCtrl', function($scope, $cookies){
    $scope.active = -1;
    $scope.table = [];
    $scope.mod = [];
    $scope.myJSON;
    var myCookies = $cookies.get("cookie");
    
    if (myCookies !== undefined){
        var obj = JSON.parse(myCookies);
        $scope.table = obj;
        console.log($scope.table) 
    };

    //add new data
    $scope.new = function(){
        $scope.active = 1;
        var data = {
            name : "",
            email : "",
            password : ""
        };
        $scope.table.splice($scope.table.length, 0, data);
        $scope.modify($scope.table.length-1);
    };

    //modify data
    $scope.modify = function(i){
        $scope.active = i;
        $scope.userName = $scope.table[i].name;
        $scope.userMail = $scope.table[i].email;
        $scope.userPassword = $scope.table[i].password;
    
        $scope.save = function(){
            var data = {};
            data.name = $scope.userName;
            data.email = $scope.userMail;
            data.password = $scope.userPassword;
            $scope.table.splice(i, 1, data);
            $scope.myJSON = JSON.stringify($scope.table); 
            $cookies.put("cookie", $scope.myJSON);
            $scope.active = -1;
        };
    };

    $scope.delete = function (i) {
        $scope.table.splice(i, 1);
        $scope.myJSON = JSON.stringify($scope.table); 
        $cookies.put("cookie", $scope.myJSON);
        $scope.active = -1;
    }


});