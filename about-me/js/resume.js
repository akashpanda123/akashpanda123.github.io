var app = angular.module("myApp", []); 
app.controller('myResume', function($scope , $http) {
    $http.get("info/my_info.json")
    .then(function(response) {
        $scope.info = response.data;
    });
});
