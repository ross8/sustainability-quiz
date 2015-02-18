$(document).ready(function(){
    
    $("#results").hide().fadeIn("slow");
      
    $("#tile1").click(function(){
        $("#tile1").toggleClass("true");
        var $response1 = $("#response1").attr('value');
        if ($response1 == "0"){
        $("#response1").attr('value','1');
        } else {
        $("#response1").attr('value','0');
        }
    });
  
    $("#tile2").click(function(){
        $("#tile2").toggleClass("true");
        var $response2 = $("#response2").attr('value');
        if ($response2 == "0"){
        $("#response2").attr('value','1');
        } else {
        $("#response2").attr('value','0');
        }
    });
    
      
    $("#tile3").click(function(){
        $("#tile3").toggleClass("true");
        var $response3 = $("#response3").attr('value');
        if ($response3 == "0"){
        $("#response3").attr('value','1');
        } else {
        $("#response3").attr('value','0');
        }
    });
    
      
    $("#tile4").click(function(){
        $("#tile4").toggleClass("true");
        var $response4 = $("#response4").attr('value');
        if ($response4 == "0"){
        $("#response4").attr('value','1');
        } else {
        $("#response4").attr('value','0');
        }
    });
    
      
    $("#tile5").click(function(){
        $("#tile5").toggleClass("true");
        var $response5 = $("#response5").attr('value');
        if ($response5 == "0"){
        $("#response5").attr('value','1');
        } else {
        $("#response5").attr('value','0');
        }
    });
    
      
    $("#tile6").click(function(){
        $("#tile6").toggleClass("true");
        var $response6 = $("#response6").attr('value');
        if ($response6 == "0"){
        $("#response6").attr('value','1');
        } else {
        $("#response6").attr('value','0');
        }
    });
    
      
    $("#tile7").click(function(){
        $("#tile7").toggleClass("true");
        var $response7 = $("#response7").attr('value');
        if ($response7 == "0"){
        $("#response7").attr('value','1');
        } else {
        $("#response7").attr('value','0');
        }
    });
    
      
    $("#tile8").click(function(){
        $("#tile8").toggleClass("true");
        var $response8 = $("#response8").attr('value');
        if ($response8 == "0"){
        $("#response8").attr('value','1');
        } else {
        $("#response8").attr('value','0');
        }
    });
    
      
    $("#tile9").click(function(){
        $("#tile9").toggleClass("true");
        var $response9 = $("#response9").attr('value');
        if ($response9 == "0"){
        $("#response9").attr('value','1');
        } else {
        $("#response9").attr('value','0');
        }
    });
  
});