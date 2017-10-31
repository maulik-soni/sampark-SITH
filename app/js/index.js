$(document).ready(function(){
    var fileExt="",fileName="",flag=false;
    //This Function is called When user click on add button
    function readURL(input) {
        if (input.files && input.files[0]) {
            
            var reader = new FileReader();
            
            reader.onload = function (e) {
                //alert(e.target.result);
                $('#yuvakImage').attr('src', e.target.result); 
                flag=true;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    //This Fucntion is called when 
    $("#imageSearch").change(function(e){
         
        var file = $("#imageSearch")[0].files[0];
        fileName = file.name;
         
        fileExt = '.' + fileName.split('.').pop();

        //This is for displaying an error for invalid input
        if(fileExt==".jpg" || fileExt==".jpeg"){
            $('#invalidfileName').text('');
            $('#invalidfileName').css('display','none'); 
            readURL(this);
            
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
         
        var referenceName="",firstName="",middleName="",lastName="",gender="",dob="",address="",qualification="",majorSubject="",eduStatus="",attendance="",sabhaPlace="",followupYuvakName="",leaderName="";

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
        /*if(fileName==""){

            $('#invalidfileName').text('Please Select  File');
            $('#invalidfileName').css('display','block');

        } */ 

        if($('#leaderName').val()==""){ 
            $('#invalidleaderName').css('display','block');
        }
        else{
            $('#invalidleaderName').css('display','none');
            leaderName=$("#leaderName").val();
        }

        //This will Show priviwe to image 
        
    //This condition is hit Ajax call when all Values are fill    
       if(referenceName!="" && firstName!="" && middleName!="" && lastName!="" && gender!="" && dob!="" && 
        address!="" &&  qualification!="" && majorSubject!="" && eduStatus!="" && attendance!="" && sabhaPlace!="" && followupYuvakName!="" && leaderName!=""){
             
              $.ajax({
                url:'../../api?route=create&function=createUser',
                type:'GET', 
                data:{ 
                    referenceName:referenceName,
                    firstName:firstName,
                    middleName:middleName,
                    lastName:lastName,
                    nickName:$("#nickName").val(),
                    gender:gender,
                    dob:dob,
                    address:address,
                    mobileNo:$("#mobileNo").val(),
                    homeNo:$("#homePhoneNo").val(),
                    officeNo:$("#officePhoneNo").val(),
                    emailId:$("#emailId").val(),
                    qualification:qualification,
                    majorSubject:majorSubject,
                    eduStatus:eduStatus,
                    attendance:attendance,
                    sabhaPlace:sabhaPlace,
                    followupYuvakName:followupYuvakName,
                    leaderName:leaderName 
                }, 
                success:function(data1){
                        alert(data1);
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

                         
                }
            });  
              referenceName,firstName,middleName,lastName,gender,dob,address,qualification,majorSubject,eduStatus,attendance,sabhaPlace,followupYuvakName="";
             
            //alert("All Fields are fill"); 
         } 
    }); 
});


//This is The Div for Add the Birthdate
$(document).ready(function(){  
        var dynamicDiv="";
        d = new Date();
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];;
         
        var n =d.getUTCMonth()+1;
        alert(n);
         
        $.ajax({    
            url:'../../api?route=birthday&function=readDateOfBirth',
            type:'GET',
            datatype: 'json',
            data:{Month:n},
            success:function(data){
                var json_obj = $.parseJSON(data);
                
                for(var i=0 ;i<json_obj.length;i++){ 
                    
                    dynamicDiv+="<div> Name: "+json_obj[i].FirstName+" "+json_obj[i].MiddleName+" "+json_obj[i].LastName+"</div>  <div>Birthday : "+json_obj[i]['DOB']+"</div><br/>"; 
                }
                alert(dynamicDiv);
                 $("#BirthdayDiv").html(dynamicDiv);
                
                
                 
                //alert(data);
            }
            
        }); 
        
        
     

});