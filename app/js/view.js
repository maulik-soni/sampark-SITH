$(document).ready(function(){ 
    if($.cookie("imagepath")!=""){
        $('#yuvakImage').attr('src',$.cookie("imagepath"));
    }
    $('#yuvakName').text($.cookie("name"));
    $('#sabhaPlace').text($.cookie("sabha"));
    $('#Name').text($.cookie("yuvakname"));
    $('#Age').text($.cookie("age"));
   

    
});