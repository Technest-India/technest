var app = angular.module('myApp',[]);
app.controller('homeController',['$http',function($http){
    var home = this;
    window.home = home;
    home.name = 'Technest India';
}]);
