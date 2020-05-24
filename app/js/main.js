$(document).ready(function(){
    $(".conteudo").hide();
    $(".conteudo").fadeToggle(500);
    $("header.h .url h1").animate({paddingLeft: "+=4%"},1000,function(){});
});
//$(".iconehide").fadeToggle();

if( conta == 0){
    $(".iconehide").hide();
}else{
    $(".iconehide").show();
}

function titulo(head,url){
    $("#title").html(head);
    $("#urlt").html(url);
}