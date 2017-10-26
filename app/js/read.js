$(document).ready(function(){
 
    $.ajax({
        type:"GET",
        url:"../../api?route=read&function=readUser", 
        datatype:"json",
        success: function(jsondata){
            var i,output="";
            var json_obj = $.parseJSON(jsondata);
                 for(i=0 ;i<json_obj.length;i++){
                    output+=" <tr>";
                    output+="<td> <button type='button'  class='btn btn-default'  data-toggle='modal' data-target='#myModal' id="+json_obj[i].id+" >EDIT &nbsp;<i class='fa fa-plus'></i></button></td><td> <button type='button'  class='btn btn-primary' data-toggle='modal' data-target='#myModal1' id="+json_obj[i].id+" >View Profile &nbsp;<i class='fa fa-plus'></i></button></td><td>"+json_obj[i].id+"</td><td>"+json_obj[i].refname+"</td><td>"+json_obj[i].firstname+"</td><td>"+json_obj[i].middlename+"</td><td>"+json_obj[i].lastname+"</td><td>"+json_obj[i].nickname+"</td><td>"+json_obj[i].gender+"</td><td>"+json_obj[i].dob+"</td><td>"+json_obj[i].address+"</td><td>"+json_obj[i].mobile+"</td><td>"+json_obj[i].home+"</td><td>"+json_obj[i].office+"</td><td>"+json_obj[i].email+"</td><td>"+json_obj[i].qualification+"</td><td>"+json_obj[i].majorsub+"</td><td>"+json_obj[i].edustatus+"</td><td>"+json_obj[i].attendance+"</td><td>"+json_obj[i].followupname+"</td><td>"+json_obj[i].sabhaplace+"</td><td>"+json_obj[i].leadername+"</td>";
                   output+="</tr>";         
                }
                $('#showDetails').html(output); 
                $('#myTable').DataTable();
        } 
    });

    $('#readBody').on('click','.btn-primary', function (){
        edit=this.id;
      alert(edit);
        var output="";
        $.ajax({
             type:"POST",
            url:"../../api/readUser/view.php",
            data:{mydata:edit},
            datatype:"json",
            success: function(data){
                alert(data);
                  
             var json_obj=JSON.parse(data);
             //console.log(json_obj[0].firstname);
             
             $("#yuvakName").val(json_obj[0].firstname);
              
            //   $( "#readBody").load("view.html",function(responseTxt, statusTxt, xhr){
            //         if(statusTxt =="success"){
            //             $("#yuvakName").text(json_obj[0].firstname+" "+ json_obj[0].lastname);
            //             $("#sabhaPlace").text(json_obj[0].sabhaplace);
            //         }
            //   });
              
             //$("#yuvakName").text();
             /*$("#referenceName").val(json_obj[0].refname);
             $("#firstname").val(json_obj[0].firstname);
             $("#middlename").val(json_obj[0].middlename);
             $("#lastName").val(json_obj[0].lastname);
             $("#leadername").val(json_obj[0].leadername);
                 $("#nickName").val(json_obj[0].nickname);
                  $("#gender").val(json_obj[0].gender);
                  $("#date").val(json_obj[0].dob);
                  $("#address").val(json_obj[0].address);
                  $("#mobileNo").val(json_obj[0].mobile);
                  $("#homePhoneNo").val(json_obj[0].home);
                  $("#officePhoneNo").val(json_obj[0].office);
                  $("#emailId").val(json_obj[0].email);
                  $("#eduQualication").val(json_obj[0].qualification);
                  $("#majorSubject").val(json_obj[0].majorsub);
                 $("#eduStatus").val(json_obj[0].edustatus);
                  $("#attandance").val(json_obj[0].attendance);
                  $("#sabha").val(json_obj[0].SabhaPlace);
                  $("#followName").val(json_obj[0].followupname);*/
            }
        });

    });

});
