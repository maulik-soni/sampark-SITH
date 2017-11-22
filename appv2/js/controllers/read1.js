
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

app.controller('ModalDemoCtrl', ['$scope', '$modal', '$log', function($scope, $modal, $log) {
  $scope.items = ['item1', 'item2', 'item3'];
  $scope.open = function (size) {
    var modalInstance = $modal.open({
      templateUrl: 'myModalContent.html',
      controller: 'ModalInstanceCtrl',
      size: size,
      resolve: {
        items: function () {
          return $scope.items;
        }
      }
    });

    modalInstance.result.then(function (selectedItem) {
      $scope.selected = selectedItem;
    }, function () {
      $log.info('Modal dismissed at: ' + new Date());
    });
  };
}]);