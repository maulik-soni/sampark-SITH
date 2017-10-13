$(document).ready(function(){

$("#btnAdd").click(function(){
alert("good going");
    $.ajax({
        type:"GET",
        url:"../../api?route=update&function=updateUser",
        success:function(data){
            $("#showDetails").html(data);
        }  
    });
});
});