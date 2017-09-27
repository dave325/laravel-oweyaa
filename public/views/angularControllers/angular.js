(function(){
    angular.module('oweyaa',['ngRoute', 'ngSanitize']);
    var loc = location.href;
    function routeConfig($routeProvider){
        $routeProvider.when('/',{
            templateUrl : "/views/angularControllers/test.html",
            controller: 'homeCtrl'
        })
    }
    function locationConfig($locationProvider){
        $locationProvider.html5Mode(true);
        $locationProvider.hashPrefix("/");
    }
    function homeCtrl($scope, $http){
        $http.post('/api/login',{name:'david',password:'password'}).then(function(data){
            console.log(data.data);
            $scope.user = data.data;
        },function(data){
            console.log(data);
        });
    }
    angular.module('oweyaa')
    .config(['$routeProvider', routeConfig])
    .config(['$locationProvider', locationConfig])
    .controller('homeCtrl',homeCtrl);
})();