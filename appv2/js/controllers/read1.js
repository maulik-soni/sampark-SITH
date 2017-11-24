
app.controller("getData",function($scope,$http){
   $scope.indexShow=0;
    $http({
        method:'GET',
        url:"http://localhost/sampark-SITH/api/?route=read&function=readUser", 
    }).then(function(response){
        $scope.dummyData = response.data;
        console.log( $scope.dummyData);
        // $scope.dumyData.sAjaxSource = response.data;
    });
});