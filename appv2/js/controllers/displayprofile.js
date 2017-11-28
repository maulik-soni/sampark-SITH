app.controller('profileData',['$scope','$rootScope','$window',function($scope, $rootScope,$window) {
    //var response = angular.fromJson($window.localStorage['yuvak-profile']);
    $scope.$on('eventName', function (event, data){
        $scope.yuvakData={
            
             firstname:data.data[0].firstname,
             sabhaplace:data.data[0].sabhaplace,
             middlename:data.data[0].middlename,
             lastname:data.data[0].lastname,
             age:data.data[0].age,
             bloodgroup:data.data[0].bloodgroup,
             dob:data.data[0].dob,
             address:data.data[0].address,
             qualification:data.data[0].qualification,
             profession:data.data[0].profession,
             organization:data.data[0].organization,
             workexperience:data.data[0].workexperience,
             doj:data.data[0].doj,
             sabhaplace:data.data[0].sabhaplace,
             leadername:data.data[0].leadername,
             attendance:data.data[0].attendance,
             refname:data.data[0].refname,
             imagepath:data.data[0].imagepath,
             followupname:data.data[0].followupname
        }     



    });
     
       
    }]);