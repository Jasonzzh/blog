/*---lb_recommend_share---*/
//热判断
$(function(){
    $(".lb_recommend_share>ul>li").each(function(){
        var a = $(this).children(".blog_content").find(".see span").text();
        a = parseInt(a,10);
        if(a < 50){
            $(this).children(".blog_title").find("b").remove();
        }
    })
});
//滚动插件实例化
$(function(){
    (function(){
        window.scrollReveal = new scrollReveal({ reset: true, move: '50px'});
    })();
});
/*---end_lb_recommend_share---*/
