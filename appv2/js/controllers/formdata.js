
app.controller("acceptdata",function($scope,$http){
  
 
$scope.fields={};
 
  
  $scope.submitMyForm=function(){
    /* post to server*/
    var form=$scope.fields;
    console.log(form);
    var fd = new FormData();
    fd.append('data',JSON.stringify(form));
    console.log("Formdata"+fd);
    angular.forEach($scope.form.Image, function(file) {
        fd.append('file', file);
    })
   
    $http({
         method:'POST',
         headers: {'Content-Type': 'application/x-www-form-urlencoded'},  
         url:'http://localhost/SITH/sampark-SITH/api/?route=create&function=createUser',
         data:form
        })
        .then(function(response){
              console.log(response);
            });
    

    }

});


app.directive('fileModel', ['$parse', function ($parse) {
  return {
      restrict: 'A',
      link: function(scope, element, attrs) {
          var model = $parse(attrs.fileModel);
          var modelSetter = model.assign;

          element.bind('change', function(){
              scope.$apply(function(){
                  modelSetter(scope, element[0].files[0]);
              });
          });
      }
  };
}]);
