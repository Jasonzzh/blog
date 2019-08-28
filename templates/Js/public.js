/*----top----*/
//头部滚动效果
$(function(){
    var beforeTop = 0,afterTop = 0;
    function opacity(Top){
        if(Top == 0){
            $(".top").css("opacity","1");
        }
        else{
            $(".top").css("opacity","0.9");
        }
    }
    function SrollTop(){
        var afterTop = document.documentElement.scrollTop || document.body.scrollTop;
        if(afterTop <= 50){
            $(".top").css("top",0);
        }
        else{
            if(afterTop > beforeTop){
                $(".top").css("top","-60px");
            }
            else{
                $(".top").css("top",0);
            }
        }
        opacity(afterTop);
        beforeTop = afterTop;
    }
    $(window).scroll(function(){
        SrollTop();
    });
    SrollTop();
});
$(function(){
    $(".close_window").click(function(){
        $(this).css("display","none");
        $(".top_nav").css("left","-46%");
    });
    $(".top_nav_open").click(function(){
        $(".close_window").css("display","block");
        $(".top_nav").css("left","0%");
    })
});
/*----end_top----*/
/*------top_search------*/
$(function(){
    var s_click = true;
    $(".top_search img").on("click",function(){
        if(s_click){
            $(".top_search_box").animate({height:"78px"},200);
            s_click = false;
        }
        else{
            $(".top_search_box").animate({height:"0"},200);
            s_click = true;
        }
    });
    $(".search_submit").click(function(){
        if($(".input_words").val().length == ''){
            alert("请输入关键字！");
            return false;
        }
    })
});
/*------end_top_search------*/
/*---rb_hot_click---*/
$(function(){
    var li_n = $(".rb_hot_click>ul>li");
    li_n.each(function(){
        var index = $(this).index();
        $(this).find(".serialNumber").text(index+1);
        if(index < 3){
            $(this).find(".serialNumber").addClass("serialNumber_cur");
            if(index%2 !== 0){
                $(this).find("a").addClass("a_bgcur");
            }
        }

        else{
            if(index%2 !== 0){
                $(this).find("a").addClass("a_bgcur");
            }
        }
    })
});
/*---end_rb_hot_click---*/
/*---bottom---*/
$(function(){
    $(".backTop").on("click",function(){
        $('html,body').animate({scrollTop:0},'slow');
    });
    function back_Top(){
        if($(document).scrollTop() <= 300){
            $(".backTop").fadeOut();
        }
        else{
            $(".backTop").fadeIn();
        }
    }
    $(window).scroll(function(){
        back_Top();
    });
    back_Top();
});
/*---end_bottom---*/