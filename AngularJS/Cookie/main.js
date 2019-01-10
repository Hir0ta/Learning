var app = angular.module('mainApp', ['ngCookies']);
app.controller('app', function($scope, $cookies){

    $scope.setCookie = function(val){
        $cookies.put('cookie', val);
    }
    
    $scope.writeCookie = function(){
        $scope.myCookieVal = $cookies.get('cookie');
    }

});