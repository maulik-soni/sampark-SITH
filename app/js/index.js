$(document).ready(function(){
    
    //This Function is called When user click on add button

    $('#btnAdd').click(function(){
        
        /*

            This is the section to apply Validation to all the Fields which is available in the file
        
        */

        var referenceName="",fullName="",gender="",dob="",address="",qualification="",majorSubject="",eduStatus="",attendance="",sabhaPlace="",followupYuvakName="";

        //the validation apply to the Reference Name

        if($('#referenceName').val()==""){
            $('#invalidReferenceName').css('display','block'); 
        }
        else{
            $('#invalidReferenceName').css('display','none'); 
            referenceName=$('#referenceName').val();
           
        }

        //This Validation is for Full Name

        if($("#fullName").val()==""){ 
            $('#invalidFullName').css('display','block'); 

        }
        else{
            $('#invalidFullName').css('display','none'); 
            fullName=$('#fullName').val(); 
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
 
    //This condition is hit Ajax call when all Values are fill    
        if(referenceName!="" && fullName!="" && gender!="" && dob!="" && 
        address!="" &&  qualification!="" && majorSubject!="" && eduStatus!="" && attendance!="" && sabhaPlace!="" && followupYuvakName!=""){
               
              $.ajax({
                url:'../../api?route=create&function=createUser',
                type:'GET', 
                data:{ 
                    referenceName:referenceName,
                    fullName:fullName,
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
                        $('#fullName').val("");
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
              referenceName,fullName,gender,dob,address,qualification,majorSubject,eduStatus,attendance,sabhaPlace,followupYuvakName="";
             
            //alert("All Fields are fill"); 
         }


    }); 
   
});