app.controller('getData',['$scope','$http','$rootScope','$window',function($scope,$http,$rootScope,$window){
 $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8'; 
    $http({
        method:'GET',
        url:"http://localhost/sampark-SITH/api/?route=read&function=readUser", 
    }).then(function(response){
        $scope.dummyData =response.data;
        
    });
    
   
$scope.showProfile=function(id){
    //alert(id);
      $http({
        method:'POST',
        url:"http://localhost/sampark-SITH/api/?route=view&function=viewUser", 
        data:{
            'id':id
        }
         })
        .then(function(response){
            $window.localStorage['yuvak-profile'] = angular.toJson(response.data[0]);     
        });      
}
}]);


