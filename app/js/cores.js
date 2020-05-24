var color  = 0;
if(cor == 1){
    light();
    $("#dark").show();
    $("#light").hide();

}
if(cor == 2){
    dark();
    $("#light").show();
    $("#dark").hide();
    $(document).ready(function(){
        setTimeout(function(){
            $("b").css("color","white");
        },10)
    })

}

$("#dark").click(function(){
    var color = 2;    
    dark();
    ajaxcolor(color,idu);
    
});

$("#light").click(function(){
    var color = 1;    
    light();
    ajaxcolor(color,idu);
});

function ajaxcolor(color,idu){
    $.ajax({
        url:"../color/colormode.php",
        type:"GET",
        data: {color: color,id: idu}

    })
}

//night mode 
function dark(){
    $("header.v").css("background-color","#262626"),
    $("header.h").css("background-color","#262626"),
    $("b").css("color","white"),
    $("body").css("background-color","#1a1a1a"),
    $("#dark").hide(),
    $("#light").show()
}
//light mode
function light(){
    $("header.v").css("background-color","#ff4700ff"),
    $("header.h").css("background-color","#ff4700ff"),
    $("b").css("color","black"),
    $("body").css("background-color","white"),
    $("#dark").show(),
    $("#light").hide()
}
