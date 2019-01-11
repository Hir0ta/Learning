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

    $scope.modify = function(i){
        $scope.userName = $scope.table[i].name;
        $scope.userMail = $scope.table[i].email;
        $scope.userPassword = $scope.table[i].password;
    
        $scope.save = function(){
            var data={        
            };
            data.name = $scope.userName;
            data.email = $scope.userMail;
            data.password = $scope.userPassword;
            $scope.table.splice(i, 1, data);
            //console.log($scope.table);
            $scope.myJSON = JSON.stringify($scope.table); 
            //console.log($scope.myJSON);
            $cookies.put("cookie", $scope.myJSON);
        };
    };

    
    $scope.delete = function (i) {
        $scope.table.splice(i, 1);
    }
});