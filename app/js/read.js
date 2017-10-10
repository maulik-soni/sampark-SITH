$(document).ready(function(){
 
$("#viewDetails").click(function(){
    $.ajax({
        type:"GET",
        url:"../../api/readUser/index.php", 
        success: function(jsondata){
            var i,output="";
            var json_obj = $.parseJSON(jsondata);
            
                
                for(i=0 ;i<json_obj.length;i++){
                    output+=" <tr>";
                    output+="<td>edit</td><td>"+json_obj[i].id+"</td><td>"+json_obj[i].refname+"</td><td>"+json_obj[i].fullname+"</td><td>"+json_obj[i].nickname+"</td><td>"+json_obj[i].gender+"</td><td>"+json_obj[i].dob+"</td><td>"+json_obj[i].address+"</td><td>"+json_obj[i].mobile+"</td><td>"+json_obj[i].home+"</td><td>"+json_obj[i].office+"</td><td>"+json_obj[i].email+"</td><td>"+json_obj[i].qualification+"</td><td>"+json_obj[i].majorsub+"</td><td>"+json_obj[i].edustatus+"</td><td>"+json_obj[i].attendence+"</td><td>"+json_obj[i].followupname+"</td>";
                   output+="</tr>";         
                }
                $('#showDetails').html(output);
                
            
        } 
    });
});
});