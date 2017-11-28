
app.controller('getData',['$scope','$http',function($scope,$http){
 $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8'; 
    $http({
        method:'GET',
        url:"http://localhost/sampark-SITH/api/?route=read&function=readUser", 
    }).then(function(response){
        $scope.dummyData =response.data;
        
    });
}]);


