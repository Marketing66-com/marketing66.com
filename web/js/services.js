
(function(window, $, Routing) {
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope,$http) {



        $scope.init = function(url){
            console.log(Routing.generate(url))
            var my_url = Routing.generate(url)
            $http({
                method: 'GET',
                url: my_url
            }).then(function successCallback(response) {
                $scope.services = response.data
                console.log(response.data)
            }, function errorCallback(response) {
                $scope.services = "error"
            });
        }

    });
})(window, jQuery, Routing);
