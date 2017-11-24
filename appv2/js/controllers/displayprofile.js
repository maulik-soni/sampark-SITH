app.controller('profileData',['$scope','$rootScope','$window',function($scope, $rootScope,$window) {
    var user = angular.fromJson($window.localStorage['yuvak-profile']);
    console.log(user);
       $scope.yuvakData={
            firstname:user.firstname,
            sabhaplace:user.sabhaplace,
            middlename:user.middlename,
            lastname:user.lastname,
            age:user.age,
            bloodgroup:user.bloodgroup,
            dob:user.dob,
            address:user.address,
            qualification:user.qualification,
            profession:user.profession,
            organization:user.organization,
            workexperience:user.workexperience,
            doj:user.doj,
            sabhaplace:user.sabhaplace,
            leadername:user.leadername,
            attendance:user.attendance,
            refname:user.refname,
            imagepath:user.imagepath,
            followupname:user.followupname
       }
    }]);