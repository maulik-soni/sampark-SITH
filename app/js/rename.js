$(document).ready(function(){

$("#btnAdd1").click(function(){
//alert($('form').serializeArray());



var other_data =$('form').serializeArray();


var finalData = {};
other_data.forEach(function(element) {
    finalData[element.name] = element.value;
});
 


    $.ajax({
         type:'POST',
         url:'http://localhost:8080/sampark-SITH/api/?route=update&function=updateUser',
         datatype:'json',
         data: { data:JSON.stringify(finalData)},
        success:function(data){
            alert(data);
        }  
    });
});
});