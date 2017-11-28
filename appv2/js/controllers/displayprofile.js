app.controller('profileData',['$scope','$stateParams','$http',function($scope,$stateParams,$http) {
      var image;
      $http({
        method:'POST',
        url:"http://localhost/sampark-SITH/api/?route=view&function=viewUser", 
        data:{
            'id':$stateParams.id
        }
         })
        .then(function(data){
            if(data.data[0].imagepath==null){
                image="../appv2/img/logo1.png";
            }
            else{
                 image=data.data[0].imagepath;
            }
    
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
                imagepath:image,
                followupname:data.data[0].followupname
           } 
        }); 
        
       
    }]);