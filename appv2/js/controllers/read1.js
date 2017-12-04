
app.controller('getData',['$scope','$http',function($scope,$http){
 $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8'; 
    $http({
        method:'GET',
        url:"http://localhost/sampark-SITH/api/?route=read&function=readUser", 
    }).then(function(response){ 
        $scope.dummyData =response.data;
        
    });

}]);
 

//This is the Form Submission  
app.controller("updateDataController",["$scope",'$rootScope','$http','$window' ,function($scope,$rootScope,$http,$window){
  $scope.$on('eventName', function (event, data) { 
       
       
     $scope.form={ 
      //Professional Data is pending
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
      editfollowUp:data.editfollowUp, 
      editgender:data.editgender,
      editsabha:data.editsabha,
      editoccupation:data.editoccupation,
      imagepath:data.imagepath 
    };
    
    
  }); 
  $scope.submitMyForm=function(){ 
     
    $http.post("http://localhost/sampark-SITH/appv2/js/controllers/updateProfile.php", {"data":$scope.form},{"content-type":"application/json","Accept" : "application/json"}).
      success(function(updateDataResponse, status) { 
        //$modalInstance.dismiss('submit');
        $window.location.reload();
     }); 
  }; 

}]);


app.controller('ModalController', ['$scope', '$modal', '$log','$http','$rootScope', function($scope, $modal, $log , $http,$rootScope) { 
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
  
  //This is Controller to dismiss modal

  app.controller('ModalInstanceCtrl', ['$scope', '$modalInstance', 'items', function($scope, $modalInstance, items) {
     
    $scope.cancel = function () {
      $modalInstance.dismiss('cancel');
    };
  }])
  $scope.ABC=function(){ 
    
    $http.post("http://localhost/sampark-SITH/appv2/js/controllers/Myphp.php", {"data":$scope.getid},{"content-type":"application/json","Accept" : "application/json"}).
    success(function(data, status) { 
        
        $rootScope.$broadcast("eventName",{
          //Professional Data is pending
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
        'editfollowUp':data[0].followupname,
        'editgender':data[0].gender, 
        'editsabha':data[0].sabhaplace,
        'editoccupation':data[0].occupation,
        'imagepath':data[0].imagepath
      });
      
    })
     
  };

}]);

 
 


    
   


    



