angular.module('logCtrl', []).controller('logController', function($scope, LogService) {

    $scope.loading = true;
    $scope.alerts = [];
    $scope.log = {};

    $scope.addLog = function(){

        //Create
        LogService.add($scope.log)
            .success(function(data){
                console.log(data);
                $scope.log = {};
            })
            .error(function(data){
                console.log(data);
            });
    }

});