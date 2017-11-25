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
 

//This is the Form Submission  
app.controller("updateDataController",["$scope",'$rootScope','$http',function($scope,$rootScope,$http){
  $scope.$on('eventName', function (event, data) {
    
     $scope.form={ 

      //gender , sabha place is pending
     editid:data.editid,
     editrefName:data.editrefName,
     editfirstName:data.editfirstName,
     editmiddleName:data.editmiddleName,
     editlastName:data.editlastName,
     editnickName:data.editnickName,
     editdate:data.editdate,
     editaddress:data.editaddress,
     editmbNo:data.editmbNo,
     edithmNo:data.edithmNo,
     editofNo:data.editofNo,
     editemail:data.editemail,
     editqual:data.editqual,
     editmsub:data.editmsub,
     editedustatus:data.editedustatus,
     editattend:data.editattend,
     editlname:data.editlname,
     editfollowUp:data.editfollowUp 
    };
  }); 
  $scope.submitMyForm=function(){ 
    $http.post("http://localhost/sampark-SITH/appv2/js/controllers/updateProfile.php", {"data":$scope.form},{"content-type":"application/json","Accept" : "application/json"}).
      success(function(updateDataResponse, status) {
        console.log(updateDataResponse);

     });
      
  }; 

}]);


app.controller('ModalDemoCtrl', ['$scope', '$modal', '$log','$http','$rootScope', function($scope, $modal, $log , $http,$rootScope) { 
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
    });
  };
  $scope.ABC=function(){ 
    
    $http.post("http://localhost/sampark-SITH/appv2/js/controllers/Myphp.php", {"data":$scope.getid},{"content-type":"application/json","Accept" : "application/json"}).
    success(function(data, status) { 
        
       $rootScope.$broadcast("eventName",{
         //gender , sabha place is pending
        'editid':data[0].id,
        'editrefName':data[0].refname,
       'editfirstName':data[0].firstname,
       'editmiddleName':data[0].middlename,
       'editlastName':data[0].lastname,
       'editnickName':data[0].nickname, 
       'editdate':data[0].dob,
       'editaddress':data[0].address,
       'editmbNo':data[0].mobile,
       'edithmNo':data[0].home,
       'editofNo':data[0].office,
       'editemail':data[0].email,  
       'editqual':data[0].qualification,
       'editmsub':data[0].majorsub,
       'editedustatus':data[0].edustatus,
       'editattend':data[0].attendance,
       'editlname':data[0].leadername,
       'editfollowUp':data[0].followupname 
       
    });
    })
     
  };

}]);

 
 


    
   



