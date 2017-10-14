$(document).ready(function(){
    var fileExt,fileName="";
    //This Function is called When user click on add button
    function readURL(input) {
        if (input.files && input.files[0]) {
            
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#yuvakImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    //This Fucntion is called when 
    $("#imageSearch").change(function(e){
        
        var file = $("#imageSearch")[0].files[0];
        fileName = file.name;
         
        fileExt = '.' + fileName.split('.').pop();
        if(fileExt==".jpg"){
            $('#invalidfileName').text('');
            $('#invalidfileName').css('display','none');
            readURL(this);  
        }
        else{
            $('#yuvakImage').attr('src', ""); 
            $('#invalidfileName').text('Invalid File');
            $('#invalidfileName').css('display','block');
        }
         
        
        //alert("Lopesh");
    });
    $('#btnAdd').click(function(){ 
        /*

            This is the section to apply Validation to all the Fields which is available in the file
        
        */
        
        var referenceName="",firstName="",middleName="",lastName="",gender="",dob="",address="",qualification="",majorSubject="",eduStatus="",attendance="",sabhaPlace="",followupYuvakName="";

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
        
        if($("#eduQualification").val()==""){
             $('#invalideduQualification').css('display','block');
        }
        else{  
            $('#invalideduQualification').css('display','none'); 
            qualification=$('#eduQualification').val();
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
        if($("#attandance").val()==""){
            $("#invalidattendance").css('display','block'); 
        }
        else{ 
            $('#invalidattendance').css('display','none'); 
            attendance  =$('#attandance').val();
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
        if(fileName==""){

            $('#invalidfileName').text('Please Select  File');
            $('#invalidfileName').css('display','block');

        }
        //This will Show priviwe to image
        
        /*
    //This condition is hit Ajax call when all Values are fill    
       if(referenceName!="" && firstName!="" && middleName!="" && lastName!="" && gender!="" && dob!="" && 
        address!="" &&  qualification!="" && majorSubject!="" && eduStatus!="" && attendance!="" && sabhaPlace!="" && followupYuvakName!=""){
             
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
                    followupYuvakName:followupYuvakName
                }, 
                success:function(data1){
                        alert(data1);
                        $('#referenceName').val("");
                        $('#firstName').val("");
                        $('#middleName').val("");
                        $('#lastName').val("");
                        $('#nickName').val("");
                        $('#gender').val("");
                        $('#dob').val("");
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
                        $('#followupYuvakName').val("");
                }
            });  
              referenceName,firstName,middleName,lastName,gender,dob,address,qualification,majorSubject,eduStatus,attendance,sabhaPlace,followupYuvakName="";
             
            //alert("All Fields are fill"); 
         }
         */

    }); 
});