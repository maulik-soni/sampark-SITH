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
                    output+="<td> <button type='button'  class='btn btn-default viewbtn1'  data-toggle='modal' data-target='#myModal' id="+json_obj[i].id+" >EDIT &nbsp;<i class='fa fa-plus'></i></button></td><td> <button type='button'  class='btn btn-primary viewbtn'  data-toggle='modal' data-target='#myModal1' id="+json_obj[i].id+" >View Profile &nbsp;<i class='fa fa-plus'></i></button></td><td>"+json_obj[i].id+"</td><td>"+json_obj[i].refname+"</td><td>"+json_obj[i].firstname+"</td><td>"+json_obj[i].middlename+"</td><td>"+json_obj[i].lastname+"</td><td>"+json_obj[i].nickname+"</td><td>"+json_obj[i].gender+"</td><td>"+json_obj[i].dob+"</td><td>"+json_obj[i].address+"</td><td>"+json_obj[i].mobile+"</td><td>"+json_obj[i].home+"</td><td>"+json_obj[i].office+"</td><td>"+json_obj[i].email+"</td><td>"+json_obj[i].qualification+"</td><td>"+json_obj[i].majorsub+"</td><td>"+json_obj[i].edustatus+"</td><td>"+json_obj[i].attendance+"</td><td>"+json_obj[i].followupname+"</td><td>"+json_obj[i].sabhaplace+"</td><td>"+json_obj[i].leadername+"</td>";
                   output+="</tr>";         
                }
                $('#showDetails').html(output); 
                $('#myTable').DataTable();
        } 
    });

    $('#readBody').on('click','.btn-primary', function (){
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
