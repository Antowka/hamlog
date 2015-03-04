/**
 * Created by anton on 2/27/15.
 */

angular.module('logService', []).factory('LogService', function($http) {
    return{

        //create new qso
        add: function(log){
            return $http({
                method:  'POST',
                url:     '/log/add',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data:    $.param(log)
            });
        }
    }
});