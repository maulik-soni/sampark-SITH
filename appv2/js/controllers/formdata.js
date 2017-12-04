   
app.controller("acceptdata", function($scope, $http){
    $scope.fields={};  
    $scope.files = []; 
    $scope.submitMyForm = function(){ 
        $scope.form.image = $scope.files[0];        
        var form=$scope.fields;
        var form_data = new FormData();  
        form_data.append("image", $scope.form.image);
        form_data.append('data',JSON.stringify(form)); 
         $http( 
         {    
            method:'POST',
<<<<<<< HEAD
            url:'http://localhost/sampark-SITH/api/?route=create&function=createUser',
=======
            url:'http://localhost/SITH/sampark-SITH/api/?route=create&function=createUser',
>>>>>>> a9d140d6e445bc492c2851acad6664051c556f1f
            data:form_data,
            transformRequest: angular.identity,  
            headers: {'Content-Type': undefined,'Process-Data': false}  
         })
         .success(function(response){  
            alert(response);  
             
         });  
    }  
    $scope.uploadedFile = function(element) {
        $scope.currentFile = element.files[0];
        var reader = new FileReader();

        reader.onload = function(event) {
          $scope.image_source = event.target.result
          $scope.$apply(function($scope) {
            $scope.files = element.files;
          
          });
        }
                reader.readAsDataURL(element.files[0]);
      }

    });
   
  




