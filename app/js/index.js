$(document).ready(function(){
    var fileExt="",fileName="",file;
    //This Function is called When user click on add button
    function readURL(input) {
        if (input.files && input.files[0]) {
            
            var reader = new FileReader(); 
            reader.onload = function (e) {
                //alert(e.target.result);
                $('#yuvakImage').attr('src', e.target.result); 
                
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    //This Fucntion is called when 
    $("#imageSearch").change(function(e){
         
        file = $("#imageSearch")[0].files[0];
        fileName = file.name;
         
        fileExt = '.' + fileName.split('.').pop();

        //This is for displaying an error for invalid input
        if(fileExt==".jpg" || fileExt==".jpeg"){
            $('#invalidfileName').text('');
            $('#invalidfileName').css('display','none'); 
            readURL(this);
            
            // alert(file);
            
        }
        else{
            $('#yuvakImage').attr('src', ""); 
            $('#invalidfileName').text('Invalid File');
            $('#invalidfileName').css('display','block');
            flag=false;
        } 
    });
    $('#btnAdd').click(function(){ 
        /* 
            This is the section to apply Validation to all the Fields which is available in the file 
        */
         
        var referenceName="",firstName="",middleName="",lastName="",gender="",dob="",address="",qualification="",majorSubject="",eduStatus="",attendance="",sabhaPlace="",followupYuvakName="",leaderName="",email=true,mobile=true,homePhoneNumb=true,officePhoneNumb=true;
        
        //the validation apply to the Reference Name

        if($('#referenceName').val()==""){
            $('#invalidReferenceName').css('display','block'); 
        }
        else{
            $('#invalidReferenceName').css('display','none'); 
            referenceName=$('#referenceName').val();
           
        }

        //This Validation is for First Name

        if($("#firstName").val()==""){ 
            $('#invalidFirstName').css('display','block'); 

        }
        else{
            $('#invalidFirstName').css('display','none'); 
            firstName=$('#firstName').val(); 
        }

        //This Validation apply to Middle Name 

        if($('#middleName').val()==""){
            $('#invalidMiddleName').css('display','block');
        }
        else{
            $('#invalidMiddleName').css('display','none'); 
            middleName=$('#middleName').val(); 
        }
        
        //This is the Validation Apply for Last Name
        if($('#lastName').val()==""){
            $('#invalidLastName').css('display','block');
        }
        else{
            $('#invalidLastName').css('display','none'); 
            lastName=$('#lastName').val(); 
        }

        //The Nickname is not complusory hence we not applying any validation to this field
  
        //This is the Validation for Gender dropDown List
        
        if($("#gender").val()=="Select"){
            $('#invalidGender').css('display','block');
            
        }
        else{ 
            $('#invalidGender').css('display','none'); 
            gender=$('#gender').val(); 
        }


        //this is the validation for date of birthdate

        if($('#DOB').val()==""){
            $('#invalidDOB').css('display','block'); 
        }
        else{
            $('#invalidDOB').css('display','none'); 
            dob=$('#DOB').val(); 
        }

        //This is the validation for Address

        if($("#address").val()==""){
            $('#invalidAddress').css('display','block');
        }
        else{
            $('#invalidAddress').css('display','none'); 
            address=$('#address').val();
        }

        //This is the validation for the Education Qualification
        
        if($("#qualification").val()==""){
             $('#invalideduQualification').css('display','block');
        }
        else{  
            $('#invalideduQualification').css('display','none'); 
            qualification=$('#qualification').val();
        }

        //This is the validation for the Major Subject

        if($("#majorSubject").val()==""){
            $("#invalidmajorSubject").css('display','block');
        }
        else{  
            $('#invalidmajorSubject').css('display','none'); 
            majorSubject=$('#majorSubject').val();
        }

        //This is the Validation for the Educational Status

        if($("#eduStatus").val()==""){
            $("#invalideduStatus").css('display','block'); 
        }
        else{ 
            $('#invalideduStatus').css('display','none'); 
            eduStatus  =$('#eduStatus').val();
        }

        //This is the Validation for the Attendig Sabha
        if($("#attendance").val()==""){
            $("#invalidattendance").css('display','block'); 
        }
        else{ 
            $('#invalidattendance').css('display','none'); 
            attendance  =$('#attendance').val();
        }

        //This is the Validation for the Sabha place selection

        if($('#Sabha').val()=='Select'){ 
            $('#invalidsabhaPlace').css('display','block');
        }

        else{ 
            $('#invalidsabhaPlace').css('display','none'); 
            sabhaPlace  =$('#Sabha').val();

        }

        //This is the Validation for the Follow up name

        if($('#followName').val()==""){
            $('#invalidfollowName').css('display','block');
        }
        else{
            $('#invalidfollowName').css('display','none'); 
            followupYuvakName  =$('#followName').val(); 
        }
         
        if($('#leaderName').val()==""){ 
            $('#invalidleaderName').css('display','block');
        }
        else{
            $('#invalidleaderName').css('display','none');
            leaderName=$("#leaderName").val();
        }

        //this is The Validation For Email Address
        if($('#emailId').val()!=""){
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if(reg.test($('#emailId').val()) == false){
                  
                $('#invalidEmail').css('display','block');
                email=false;
            }
            else{
                $('#invalidEmail').css('display','none');
                email=true;
            }
           
        }
        else{
            email=true;
                            
        }
        var mobilePhoneNumber=$('#mobileNo').val().length;
        if(mobilePhoneNumber!=0){
            var pattern =new RegExp("^([0-9]{10})$");
            if(pattern.test($('#mobileNo').val()) == false){ 
                $('#invalidmobileNo').css('display','block');
                mobile=false;
            }
            else{
                $('#invalidmobileNo').css('display','none');
                mobile=true;
            } 
        }
        else{
            mobile=true;   
        } 

        var homePhonelength=$('#homePhoneNo').val().length;
        if(homePhonelength!=0){
             
            var pattern =new RegExp("^([0-9]{10})$");
            if(pattern.test(($('#homePhoneNo').val())) == false){ 
                $('#invalidhomePhoneNo').css('display','block');
                homePhoneNumb=false; 
            }
            else{
                $('#invalidhomePhoneNo').css('display','none');
                homePhoneNumb=true;
            } 
           
        }
        else{
            homePhoneNumb=true;  
        }

        var officePhonelength=$('#officePhoneNo').val().length;
        if(officePhonelength!=0){
            var pattern =new RegExp("^([0-9]{10})$");
            if(pattern.test(($('#officePhoneNo').val())) == false){ 
                $('#invalidofficePhoneNo').css('display','block');
                officePhoneNumb=false; 
            }
            else{
                $('#invalidofficePhoneNo').css('display','none');
                officePhoneNumb=true;
            } 
        }
        else{
            officePhoneNumb=true;  
        }
        //This will Show priviwe to image 
        
    //This condition is hit Ajax call when all Values are fill    
       if(referenceName!="" && firstName!="" && middleName!="" && lastName!="" && gender!="" && dob!="" && 
        address!="" &&  qualification!="" && majorSubject!="" && eduStatus!="" && attendance!="" && sabhaPlace!="" && followupYuvakName!="" && leaderName!="" && email==true && mobile==true && homePhoneNumb==true && officePhoneNumb==true){
               

            if($('#imageSearch').prop('files')[0]!=""){
                var file_data = $('#imageSearch').prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', file_data);
                var other_data = $('#YuvakDetails').serializeArray();
                console.log(other_data);
                var finalData = {};
                other_data.forEach(function(element) {
                    finalData[element.name] = element.value;
                });
                form_data.append('data', JSON.stringify(finalData));
             }
                console.log(form_data);
                 
               $.ajax({
                url:'http://localhost/sampark-SITH/api/?route=create&function=createUser',
                type:'POST',
                data: form_data,
                processData: false, //prevent jQuery from converting your FormData into a string
                contentType: false,  
                 
                success:function(data1){
                     
                        $('#referenceName').val("");
                        $('#firstName').val("");
                        $('#middleName').val("");
                        $('#lastName').val("");
                        $('#nickName').val("");
                        $('#gender').val("");
                        $('#DOB').val("");
                        $('#address').val("");
                        $('#mobileNo').val("");
                        $('#homeNo').val("");
                        $('#officeNo').val("");
                        $('#emailId').val("");
                        $('#qualification').val("");
                        $('#majorSubject').val("");
                        $('#eduStatus').val("");
                        $('#attendance').val("");
                        $('#sabhaPlace').val("");
                        $('#followName').val("");
                        $('#leaderName').val("");
                        $('#homePhoneNo').val(null);
                        $('#mobileNo').val(null); 
                        $('#followupYuvakName').val("");
                        location.reload();
                         
                }
            });
              
              referenceName,firstName,middleName,lastName,gender,dob,address,qualification,majorSubject,eduStatus,attendance,sabhaPlace,followupYuvakName="";
            
            alert("All Fields are fill");    
         } 
    }); 
});     
//This is The Div for Add the Birthdate
$(document).ready(function(){  
    
       var dynamicDiv="";
        d = new Date();
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];;
         
        var n =d.getUTCMonth()+1;
         
         
        $.ajax({    
            url:'http://localhost/sampark-SITH/api/?route=birthday&function=readDateOfBirth',
            type:'POST',
            datatype: 'json',
            data:{Month:n},
            success:function(data){
                var json_obj = $.parseJSON(data);
                
                for(var i=0 ;i<json_obj.length;i++){ 
                    
                    dynamicDiv+="<div> Name: "+json_obj[i].FirstName+" "+json_obj[i].MiddleName+" "+json_obj[i].LastName+"</div>  <div>Birthday : "+json_obj[i]['DOB']+"</div><br/>"; 
                }
               
                 $("#BirthdayDiv").html(dynamicDiv);
                
                
                 
                //alert(data);
            }
            
        });  
         
 
     

    }); 
    
