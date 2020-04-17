/*----top----*/
//头部滚动效果
$(function(){
    var beforeTop = 0, afterTop = 0;
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
/*rb_excellentBlogs*/
function rgb() {
    const r = Math.floor(Math.random()*256);
    const g = Math.floor(Math.random()*256);
    const b = Math.floor(Math.random()*256);
    const rgb = '('+r+','+g+','+b+')';
    return rgb;
}
$(function () {
    $('.rb_excellentBlogs>ul>li').each(function () {
        $(this).css({background: 'rgb'+rgb()});
    })
})
/*end_rb_excellentBlogs*/
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

/*---right_box---*/
$(function () {
    $(window).load(function () {
        let href = window.location.href
        , hrefArray = ['excellentBlogs', 'feedback', 'aboutMe']
        , screenWidth = $(window).width()
        , leftHeight = $('.left_box').height()
        , rightHeight = $('.right_box').height()
        console.log(screenWidth,'屏幕宽度')
        for (index in hrefArray) {
            if(href.indexOf(hrefArray[index]) !== -1 || screenWidth <= 1050 || leftHeight <= rightHeight) {
                console.log('终止')
                return false
            }
        }
        let dom = $('.right_box')
        , domWidth = dom.width()
        , domHeight = dom.outerHeight(true)
        , domLeft = dom.offset().left
        , myselfCardHeight = $('.myself_card').outerHeight(true)
        , rbHotClickHeight = $('.rb_hot_click').outerHeight(true)
        , stationRecommendHeight = $('.station_recommend').outerHeight(true)
        , rbExcellentBlogsHeight = $('.rb_excellentBlogs').outerHeight(true)
        , rbQRcodeHeight = $('.rb_QRcode').outerHeight(true)
        , bodyHeight = $(document).height()
        , windowHeight = $(window).height()
        , bottomHeight = $('.bottom').outerHeight(true)
        $(document).scroll(function () {
            dom.css({
                'transition': 'all 0.3s ease'
            })
            sticky()
        })
        function sticky() {
            const scrollTop = $(document).scrollTop()
            if (myselfCardHeight + rbHotClickHeight + stationRecommendHeight + 80 <= scrollTop) {
                dom.addClass('fixed')
                dom.css({
                    'left': domLeft + 'px',
                    'width': domWidth,
                })
                if(bodyHeight - scrollTop - windowHeight <= bottomHeight) {
                    dom.css({
                        'top': '-' + (domHeight - rbQRcodeHeight) + 'px',
                    })
                } else {
                    dom.css({
                        'top': '-' + (domHeight - rbExcellentBlogsHeight - rbQRcodeHeight) + 'px',
                    })
                }
            } else {
                dom.removeClass('fixed')
            }
        }
        sticky()
    })
})
/*---right_box---*/