$(document).ready(function(){
    $(".conteudo").hide();
    $(".conteudo").fadeToggle(1000);
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
//Modal
    function Modal(){
        $("#abreModal").click(() => {
            setTimeout(() => {
                $(".modal").css("display","block");
                $(".conteudoModal").animate({
                    marginTop: "+10%"
                },700,function(){})
            }, 100);
        });
        $("#fechaModal").click(() => {
            $(".conteudoModal").animate({
                marginTop: "-10%"
            },700,function(){})
            setTimeout(() => {
                $(".modal").css("display","none");
            }, 500);
        });
    }