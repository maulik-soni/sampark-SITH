

$('document').ready(function(){

var edit;
    $.ajax({
        type:"POST",
        url:"../../api?route=read&function=readUser",
        datatype:"json",
        success: function(jsondata){
            var i,output="";
            var json_obj = $.parseJSON(jsondata);


                 for(i=0 ;i<json_obj.length;i++){

                    output+="<td> <button type='button'  class='btn btn-default viewbtn1'  data-toggle='modal' data-target='#myModal' id="+json_obj[i].id+" >EDIT &nbsp;<i class='fa fa-plus'></i></button></td><td> <button type='button'  class='btn btn-primary viewbtn'  data-toggle='modal' data-target='#myModal1' id="+json_obj[i].id+" >View Profile &nbsp;<i class='fa fa-plus'></i></button></td><td>"+json_obj[i].id+"</td><td>"+json_obj[i].refname+"</td><td>"+json_obj[i].firstname+"</td><td>"+json_obj[i].middlename+"</td><td>"+json_obj[i].lastname+"</td><td>"+json_obj[i].nickname+"</td><td>"+json_obj[i].gender+"</td><td>"+json_obj[i].dob+"</td><td>"+json_obj[i].address+"</td><td>"+json_obj[i].mobile+"</td><td>"+json_obj[i].home+"</td><td>"+json_obj[i].office+"</td><td>"+json_obj[i].email+"</td><td>"+json_obj[i].qualification+"</td><td>"+json_obj[i].majorsub+"</td><td>"+json_obj[i].edustatus+"</td><td>"+json_obj[i].attendance+"</td><td>"+json_obj[i].followupname+"</td><td>"+json_obj[i].sabhaplace+"</td><td>"+json_obj[i].leadername+"</td>";
                    output+="</tr>";         
                 }
                 $('#showDetails').html(output); 
                 $('#myTable').DataTable();
         } 
     });
 $('body').on('click','.viewbtn1', function (){
            edit=this.id;
            alert(edit);
            var output="";
            $.ajax({
                 type:"POST",
                url:"../../api/updateUser/edit.php",
                data:{mydata:edit},
                datatype:"json",
                success: function(data){
                
                     alert(data);
                 var json_obj=JSON.parse(data);
                 $("#id").val(json_obj[0].id);
                 $("#referenceName").val(json_obj[0].refname);
                 $("#firstName").val(json_obj[0].firstname);
                 $("#middleName").val(json_obj[0].middlename);
                 $("#lastName").val(json_obj[0].lastname);
                 $("#leadername").val(json_obj[0].leadername);
                     $("#nickName").val(json_obj[0].nickname);
                      $("#gender").val(json_obj[0].gender);
                      $("#DOB").val(json_obj[0].dob);
                      $("#address").val(json_obj[0].address);
                      $("#mobileNo").val(json_obj[0].mobile);
                      $("#homePhoneNo").val(json_obj[0].home);
                      $("#officePhoneNo").val(json_obj[0].office);
                      $("#emailId").val(json_obj[0].email);
                      $("#eduQualification").val(json_obj[0].qualification);
                      $("#majorSubject").val(json_obj[0].majorsub);
                     $("#eduStatus").val(json_obj[0].edustatus);
                      $("#attandance").val(json_obj[0].attendance);
                     
                      //$("#Sabha").val("an");
                      $("#followName").val(json_obj[0].followupname);
                     // $("div#dim select").val(json_obj[0].SabhaPlace).change();
                       
                    $('#Sabha option[value=select]').text(json_obj[0].SabhaPlace);
                   
                    
                }
            });

        });







                  

    $('#readBody').on('click','.viewbtn', function (){
        edit=this.id;
      
        var output="";
        $.ajax({
             type:"POST",
            url:"../../api/readUser/view.php",
            data:{mydata:edit},
            datatype:"json",
            success: function(data){
                  
             var json_obj=JSON.parse(data); 
              $.cookie("imagepath", json_obj[0].imagepath);  
              $.cookie("name", json_obj[0].firstname+" "+json_obj[0].lastname);
              $.cookie("sabha", json_obj[0].sabhaplace);
              $.cookie("yuvakname", json_obj[0].firstname+" "+json_obj[0].middlename+" "+json_obj[0].lastname);
              $.cookie("age", json_obj[0].age);
              window.location.href = "view.html";
            }
        });

    });

});
